<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div class="py-0 md:py-10">
        <div class="flex flex-col gap-2 bg-white py-16 px-8 lg:px-8 mt-8 lg:mt-20 rounded-xl lg:w-2/5 mx-auto">
            <h3 class="font-bold text-2xl md:text-3xl text-primary mb-5">{{ __('post.ad') }}</h3>

            <x-form wire:submit.prevent="save">
                <!-- Category ID -->
                @php
                    $categories = App\Models\Category::all();
                @endphp
                <label for="category" class="text-secondary text-sm">{{ __('category') }}*</label>
                <x-select :options="$categories" placeholder="{{ __('select.category') }}" placeholder-value="0"
                    {{-- Set a value for placeholder. Default is `null` --}} hint="{{ __('select.one') }}" wire:model="category_id" class=" text-primary">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </x-select>
                <!-- Category ID -->

                <!-- Title -->
                <label for="title" class="text-secondary text-sm">{{ __('ad.title') }}</label>
                <x-input wire:model="title" placeholder="{{ __('enter-ad-title') }}" hint="{{ __('ad.title') }}"
                    class="text-primary" />
                <!-- Title -->

                <!-- Description -->
                <label for="description" class="text-sm mt-2 text-secondary">{{ __('ad.description') }}</label>
                <x-textarea wire:model="description" placeholder="{{ __('enter-ad-description') }} ..."
                    hint="{{ __('max-characters') }}" rows="5" inline />
                <!-- Description -->

                <!-- Location -->
                <label for="location" class="text-sm mt-2 text-secondary">{{ __('location') }}*</label>
                <x-input wire:model="location" placeholder="{{ __('enter-ad-location') }}"
                    hint="{{ __('ad.location') }} " class="text-primary mb-2" />
                <!-- Location -->

                <!-- Price -->
                <label for="price" class="text-sm mt-2 text-secondary">{{ __('price') }}*</label>
                <x-input prefix="{{ __('ad.currency') }}" wire:model="price" class="text-primary"
                    hint="{{ __('ad.price') }}" />
                <!-- Price -->

                <!-- Images -->
                <label for="photo" class="text-sm mt-2 text-secondary">{{ __('upload.photos') }}</label>
                <x-file wire:model="images" hint="{{ __('hint.uploadimages') }} [jpg,jpeg,png]" multiple />
                <!-- Images -->


                <!-- Negotiable -->
                <label for="negotiable" class="text-sm mt-2 text-secondary">{{ __('negotiable') }}</label>
                <x-toggle wire:model="negotiable" left hint="{{ __('is.negotiable') }}" class="toggle-primary" left />
                <!-- Negotiable -->

                <!-- Condition -->
                <label for="condition" class="text-sm mt-2 text-secondary">{{ __('condition') }}*</label>
                @php
                    $conditions = [['custom_key' => 'new', 'other_name' => 'New'], ['custom_key' => 'used', 'other_name' => 'Used']];
                @endphp
                <x-select :options="$conditions" option-value="custom_key" option-label="other_name"
                    placeholder="{{ __('select.condition') }}" placeholder-value="0" wire:model="selectedCondition"
                    hint="{{ __('hint.condition') }}" />
                <!-- Condition -->

                <x-slot:actions>                  
                    <x-button type="submit" label="{{ __('submit.ad') }}" class="bg-primary text-white" />

                </x-slot:actions>
            </x-form>

            <p class="p-3 text-gray-400 font-normal">field * are required.</p>
        </div>
        <div>
        </div>
    </div>
</div>
