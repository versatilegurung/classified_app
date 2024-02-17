<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="mt-16 md:py-10">
        <div class="container md:mx-auto md:px-5 md:py-10 md:rounded-xl">
            <div class="grid grid-cols-1 md:grid-cols-9 gap-4">

                {{-- navigation  --}}
                <div class="col-span-2 hidden md:block">

                    @include('livewire.frontend.account.account-nav')
                </div>

                {{-- dashboard content  --}}
                <div class="col-span-7">
                    <div class="bg-white rounded-xl py-10 px-10 container md:mx-auto h-full">
                        <h2 class="font-normal text-2xl mb-5 pb-5"> {{ __('your-profile') }}</h2>

                        {{-- show session message --}}
                        @if (session()->has('message'))
                            <div class="text-green-800 text-md">
                                {{ session('message') }}
                            </div>
                        @endif

                        <div>
                            <!-- profile form -->
                            <form wire:submit.prevent="updateProfile">
                                <div class="flex flex-col gap-5">
                                    <div class="flex flex-col md:flex-row gap-5">
                                        <div class="w-full">
                                            <x-input label="{{ __('name') }}" wire:model="profile.name"
                                                type="text" placeholder="{{ __('name') }}"
                                                value="{{ auth()->user()->name }}" />
                                            @error('profile.name')
                                                <span class="text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="w-full">
                                            <x-input label="{{ __('email') }}" wire:model="profile.email"
                                                type="email" value="{{ auth()->user()->email }}"
                                                placeholder="{{ __('email') }}" />
                                            @error('profile.email')
                                                <span class="text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="flex flex-col md:flex-row gap-5">
                                        <div class="w-full">
                                            <x-input label="{{ __('phone') }}" wire:model="profile.phone"
                                                type="text" placeholder="{{ __('phone') }}" />
                                            @error('profile.phone')
                                                <span class="text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="w-full">
                                            <x-input label="{{ __('address') }}" wire:model="profile.address"
                                                type="text" placeholder="{{ __('address') }}" />
                                            @error('profile.address')
                                                <span class="text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div>
                                        <!-- profile image -->
                                        <div class="flex flex-col md:flex-row gap-5">
                                            <div class="w-full">
                                                <x-input label="{{ __('profile_photo') }}" wire:model="profile_photo"
                                                    type="file" />
                                                @error('profile_photo')
                                                    <span class="text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="w-full">
                                                @if ($profile_photo)
                                                    <img src="{{ $profile_photo->temporaryUrl() }}" alt="profile_photo"
                                                        class="w-20 h-20 rounded-full" />
                                                @else
                                                    <img src="" alt="profile_photo"
                                                        class="w-20 h-20 rounded-full" />
                                                @endif
                                            </div>
                                        </div>

                                    </div>
                                    <div class="flex justify-center w-full mt-5">
                                        <x-button label="{{ __('update-profile') }}"
                                            class="btn btn-primary text-white w-full" type="submit" />
                                    </div>
                            </form>



                        </div>

                    </div> {{-- cols-col-span-7 close --}}
                </div>
            </div>
        </div>
    </div>
