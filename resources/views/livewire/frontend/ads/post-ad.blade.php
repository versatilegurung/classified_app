<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div class="py-0 md:py-10">
        <div class="flex flex-col gap-2 bg-white py-16 px-8 lg:px-8 mt-8 lg:mt-20 rounded-xl lg:w-2/5 mx-auto">
            <h3 class="font-bold text-2xl md:text-3xl text-primary mb-5">{{ __('post.ad') }}</h3>


            {{-- if session as message  --}}
            @if (!session()->has('message'))
                <x-form wire:submit.prevent="save">

                    <!-- Category ID -->
                    <label for="category" class="text-secondary text-sm">{{ __('category') }}</label>
                    <x-choices-offline wire:model="category_id" :options="$categories" hint="{{ __('select.category') }}"
                        single searchable required />

                    <!-- Category ID -->

                    <!-- Title -->
                    <label for="title" class="text-secondary text-sm">{{ __('ad.title') }}</label>
                    <x-input wire:model="title" placeholder="{{ __('enter-ad-title') }}" hint="{{ __('ad.title') }}"
                        class="text-primary" required />
                    <!-- Title -->

                    <!-- Description -->
                    <label for="description" class="text-sm mt-2 text-secondary">{{ __('ad.description') }}</label>
                    <x-textarea wire:model="description" placeholder="{{ __('enter-ad-description') }} ..."
                        hint="{{ __('max-characters') }}" rows="5" inline required />
                    <!-- Description -->

                    <!-- Location -->
                    <label for="location" class="text-sm mt-2 text-secondary">{{ __('location') }}</label>
                    <x-choices-offline wire:model="location_id" :options="$locations" hint="{{ __('ad.location') }}" single
                        searchable required />

                    <!-- Location -->

                    <!-- Price -->
                    <label for="price" class="text-sm mt-2 text-secondary">{{ __('price') }}</label>
                    <x-input prefix="{{ __('ad.currency') }}" wire:model="price" class="text-primary"
                        hint="{{ __('ad.price') }}" required/>
                    <!-- Price -->

                    <!-- Images -->
                    <label for="photo" class="text-sm mt-2 text-secondary">{{ __('upload.photos') }}</label>
                    <x-file wire:model="images" hint="{{ __('hint.uploadimages') }} [jpg,jpeg,png]" multiple />
                    <!-- Images -->


                    <!-- Negotiable -->
                    <label for="negotiable" class="text-sm mt-2 text-secondary">{{ __('negotiable') }}</label>
                    <x-toggle wire:model="negotiable" left hint="{{ __('is.negotiable') }}" class="toggle-primary"
                        left />
                    <!-- Negotiable -->

                    <!-- Condition -->
                    <label for="condition" class="text-sm mt-2 text-secondary">{{ __('condition') }}</label>
                    @php
                        $conditions = [['custom_key' => 'new', 'other_name' => 'New'], ['custom_key' => 'used', 'other_name' => 'Used']];
                    @endphp
                    <x-select :options="$conditions" option-value="custom_key" option-label="other_name"
                        placeholder="{{ __('select.condition') }}" placeholder-value="0" wire:model="selectedCondition"
                        hint="{{ __('hint.condition') }}" required />
                    <!-- Condition -->

                    {{-- if session message show here  --}}
                    @if (session()->has('message'))
                        <div class="text-green">{{ session('message') }}</div>
                    @endif

                    <x-slot:actions>
                        <x-button type="submit" label="{{ __('submit.ad') }}" class="bg-primary text-white" />
                    </x-slot:actions>
                </x-form>
            @else
                <div class="text-green">{{ session('message') }}</div>
                <a href="{{ route('home') }}"
                    class="bg-primary px-4 py-2 text-white rounded-lg w-fit hover:bg-warning hover:text-primary">Go to
                    Home</a>

            @endif


            <p class="py-3 text-secondary text-lg font-normal">field * are required.</p>
        </div>
        <div>
        </div>
    </div>
</div>
