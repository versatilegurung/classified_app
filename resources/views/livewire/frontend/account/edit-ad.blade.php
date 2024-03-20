<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
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
                        <h2 class="font-normal text-2xl mb-5 pb-5"> {{ __('edit-ad') }}</h2>
                        {{-- edit form here  --}}
                        <form wire:submit.prevent="updateAd" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="title" class="text-sm font-bold text-gray-700">{{ __('ad.title') }}</label>
                                <input type="text" wire:model="ad.title" id="ad.title" value="{{$ad->title}}" class="w-full rounded-md bg-gray-200 py-2 px-2">
                                @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label for="price" class="text-sm font-bold text-gray-700">{{ __('ad.price') }}</label>
                                <input type="text" wire:model="ad.price" id="ad.price" value="{{$ad->price}}"  class="w-full rounded-md bg-gray-200 py-2 px-2">
                                @error('price') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label for="description" class="text-sm font-bold text-gray-700">{{ __('ad.description') }}</label>
                                <textarea wire:model="ad.description" id="description"class="w-full rounded-md bg-gray-200 py-2 px-2">
                                    {!!$ad->description!!}
                                </textarea>
                                @error('description') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label for="category" class="text-sm font-bold text-gray-700">{{ __('ad.category') }}</label>
                                <select wire:model="ad.category_id" id="ad.category"  class="w-full rounded-md bg-gray-200 py-2 px-2">
                                    <option value="">{{ __('select-category') }}</option>
                                    @foreach ($categories as $category)
                                        {{-- <option value="{{ $category->id }}">{{ $category->name }}</option> --}}
                                        <option value="{{ $category->id }}" {{ $selectedCategory == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                        
                                    @endforeach
                                </select>
                                @error('category') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label for="location" class="text-sm font-bold text-gray-700">{{ __('ad.location') }}</label>
                                <select wire:model="ad.district_id" id="ad.district"  class="w-full rounded-md bg-gray-200 py-2 px-2">
                                    <option value="">{{ __('location') }}</option>
                                    @foreach ($districts as $item)
                                        {{-- <option value="{{ $item->id }}">{{ $item->name }}</option> --}}
                                        {{-- <option value="{{ $item['id'] }}">{{ $item['name'] }}</option> --}}

                                        <option value="{{ $item->id }}" {{ $selectedDistrict == $item->id ? 'selected' : '' }}>
                                            {{ $item->name }}
                                        </option>

                                    @endforeach
                                </select>
                                @error('ad.district_id') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            </div>

                            {{-- edit upload ad.image  --}}
                            <div>
                                {{-- list ad.image  --}}
                                <div class="grid grid-cols-3 gap-2">
                                    <?php
                                    $adImages = App\Models\AdImage::where('ad_id', $ad->id)
                                        ->limit(3)
                                        ->get();
                                    ?>
                                    @foreach ($adImages as $adImage)
                                        <div class="relative">
                                            <img src="{{ asset($adImage->image) }}" alt="{{ $ad->title }}"
                                                class="object-cover h-[100px] w-[100px] rounded-md">
                                            <button wire:click="deleteImage({{ $adImage->id }})"
                                                class="absolute top-0 right-0 bg-red-500 text-white rounded-full p-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-2 w-2" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>
                                    @endforeach
                                </div>
                                <label for="ad.image" class="text-sm font-bold text-gray-700">{{ __('ad.image') }}</label>
                                <input type="file" wire:model="ad.image" id="ad.image" class="w-full rounded-md bg-gray-200 py-2 px-2">
                                @error('ad.image') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <button class="bg-primary p-2 rounded-md text-white">Update</button>
                                <button class="hover:underline p-2">Cancel</button>
                            </div>
                        </form>
                     
                    </div>
                </div> {{-- cols-col-span-7 close --}}
            </div>
        </div>
    </div>
</div>
