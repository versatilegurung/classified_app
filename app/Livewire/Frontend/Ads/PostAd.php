<?php

namespace App\Livewire\Frontend\Ads;

use App\Models\Ad;

use App\Models\AdImage;
use Livewire\Component;
use App\Models\Category;
use App\Models\Location;
use App\Events\NewAdPosted;
use App\Models\District;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;
use Mary\Traits\WithMediaSync;
use Butschster\Head\Facades\Meta;
use Illuminate\Support\Facades\Lang;

class PostAd extends Component
{

    use WithFileUploads, WithMediaSync;

    public $categories;
    public $category_id;

    public $address;
    public $districts;
    public $district_id;

    public $title;
    public $description;
    public $price;
    public $negotiable;
    public $selectedCondition;
    public $images = [];

    public $adFormSubmitted = false;


    protected $rules = [
        'title' => 'required|min:3|max:120',
        'description' => 'required|min:5|max:500',
        'price' => 'required|numeric|min:1|max:1000000',
        'category_id' => 'required',
        'images' => 'array|max:5',
        'images.*' => 'image|max:2048|mimes:jpg,jpeg,png',
        'address' => 'required',
        'selectedCondition' => 'required',
        'district_id' => 'required|exists:districts,id'
    ];
    public function save(Request $request)
    {

        $this->validate();        // put validated into a session

        // dd($this->validate());

        //if user is not logged in save data to session and redirect to login page
        if (!auth()->check()) {
            return redirect()->route('login');
        } else {

            $ad = Ad::create([
                'title' => $this->title,
                'description' => $this->description,
                'price' => $this->price,
                'category_id' => $this->category_id,
                'negotiable' => $this->negotiable,
                'condition' => $this->selectedCondition,
                'district_id' => $this->district_id,
                'user_id' => auth()->id(),
            ]);

            foreach ($this->images as $image) {
                $ad_image = new AdImage();
                $ad_image->ad_id = $ad->id;

                //rename file
                $imageName = $ad->id . '_' . time() . '.' . $image->getClientOriginalExtension();
                //upload image to ad_images folder in public disk
                $ad_image->image = $image->store('ad_images', 'public');

                $ad_image->save();
            }
            event(new NewAdPosted($ad));

            $this->adFormSubmitted = true;
            $this->reset();
            return session()->flash('message', Lang::get('ad-created-successfully'));
        }
    }

    public function mount()
    {
        $this->categories = Category::all();
        $this->districts = District::all();
    }

    public function render()
    {
        Meta::prependTitle('Post Ad');

        return view('livewire.frontend.ads.post-ad');
    }
}
