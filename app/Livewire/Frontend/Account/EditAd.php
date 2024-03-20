<?php

namespace App\Livewire\Frontend\Account;

use App\Models\Ad;
use App\Models\AdImage;
use Livewire\Component;
use App\Models\Category;
use App\Models\District;
use GuzzleHttp\Psr7\Request;

class EditAd extends Component
{

    public $ad;
    public $selectedCategory;
    public $selectedDistrict;

    public function mount($id)
    {
        $this->ad = Ad::findOrFail($id);

        $this->selectedCategory = $this->ad->category_id;
        $this->selectedDistrict = $this->ad->district_id;
    }

 
    public function updateAd()
    {
        
        //validate the form
        $this->validate([
            'ad.title' => 'required',
            'ad.description' => 'required',
            'ad.price' => 'required',
            'ad.category_id' => 'required',
            'ad.district_id' => 'required',           
            'ad.image' => 'image|max:1024',
        ]);
 

        if ($this->ad->image) {
            $this->ad->image = $this->ad->image->store('ads');
        }

        $this->ad->save();

        return redirect()->route('my.ads');

        session()->flash('message', 'Ad updated successfully');
    }


    //delete image from AdImage with AdID
    public function deleteImage($id)
    {
        $image = AdImage::findOrFail($id);
        $image->delete();
        session()->flash('message', 'Image deleted successfully');
    }



    public function render()
    {
        return view('livewire.frontend.account.edit-ad',
            [
                'categories' => Category::all(),
                'districts' => District::all(),
                'ad' => $this->ad
            ]
    );
    }
}
