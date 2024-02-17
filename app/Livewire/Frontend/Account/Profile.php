<?php

namespace App\Livewire\Frontend\Account;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Butschster\Head\Facades\Meta;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Profile extends Component
{
    use WithFileUploads;

    public $profile;
    public $profile_photo;


    public function mount()
    {
        $this->profile = auth()->user()->profile;
    }

    public function updateProfile(Profile $profile)
    {
        $this->validate([
            'profile.name' => 'required|string|max:255',
            'profile.email' => 'required|string|email|max:255|unique:users,email,' . auth()->id(),
            'profile.phone' => 'string|max:255',
            'profile.address' => 'string|max:255',
            'profile.profile_photo' => 'image|max:2048',
        ]);

        // upload photos to profile_photos
        if ($this->profile_photo) {
            //rename the profile photo with user_id and timetsamp
            $this->profile_photo = $this->profile_photo->storeAs('profile-photos', auth()->id() . time() . '.' . $this->profile_photo->getClientOriginalExtension(), 'public');
            // $this->profile_photo = $this->profile_photo->store('profile-photos', 'public');
        } else {
            //if no photo is uploaded, use the existing photo
            $this->profile_photo = $this->profile->profile_photo;
        }

        $this->profile->save();

        session()->flash('success', 'Profile updated successfully');
    }


    public function render()
    {
        Meta::setTitle(env('APP_NAME'))
            ->prependTitle('Your account dashboard');

        return view('livewire.frontend.account.profile');
    }
}
