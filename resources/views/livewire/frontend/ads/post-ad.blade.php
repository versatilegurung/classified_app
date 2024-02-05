@push('styles')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Cropper.js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.1/cropper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.1/cropper.min.css" />

    {{-- Sortable.js --}}
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.1/Sortable.min.js"></script>

    {{-- tinymce --}}
    <script type="text/javascript"
        src='https://cdn.tiny.cloud/1/v1fwgu9i53o83bzpf4imzkp3q1sjlqlhd9vqeeqzxaxdxsu4/tinymce/6/tinymce.min.js'
        referrerpolicy="origin"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: '#descriptionTiny',

            // plugins: [
            //     'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
            //     'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen',
            //     'insertdatetime',
            //     'media', 'table', 'emoticons', 'template', 'help'
            // ],
            toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify',
            // menu: {
            //     favs: {
            //         title: 'My Favorites',
            //         items: 'code visualaid | searchreplace | emoticons'
            //     }
            // },
            // menubar: 'favs file edit view insert format tools table help',
            content_css: 'css/content.css'
        });
    </script>
@endpush
<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div class="py-10">
        <div class="flex flex-col gap-4 bg-white py-10 px-10 mt-20 rounded-xl w-[90%] md:w-2/5 mx-auto">
            <h3 class="font-bold text-2xl md:text-3xl text-primary mb-5">Post Ad</h3>
            {{-- <x-input label="Name" placeholder="Your name" icon="o-user" hint="Your full name" />

            <x-input label="Right icon" wire:model="address" icon-right="o-map-pin" />

            <x-input label="Password" wire:model="password" icon="o-eye" type="password" />

            <x-input label="Name" wire:model="name" placeholder="Clearable field" clearable /> --}}

            <form action="#" method="post">
                @csrf

                <!-- Category ID -->
                <div>
                    @php
                        $categories = App\Models\Category::all();
                    @endphp
                    {{-- <label for="category_id" class="text-primary">Category ID:</label><br> --}}
                    <x-select :options="$categories" placeholder="Select a category" placeholder-value="0"
                        {{-- Set a value for placeholder. Default is `null` --}} hint="Select category." wire:model="selectedUser2"
                        class=" text-primary placeholder:text-gray-500">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </x-select>

                </div>
                <br>

                <!-- Title -->
                <div>
                    <x-input name="title" placeholder="Ad Title" hint="Ad Title "
                        class="placeholder:text-gray-500 text-primary" />

                </div>
                <br>


                <!-- Description -->
                <div>
                    {{-- <textarea id="descriptionTiny"></textarea> --}}
                    <label for="description" class="text-sm">Ad Description</label>
                    <x-textarea wire:model="bio" placeholder="Your story ..." hint="Max 1000 chars" rows="5"
                        inline />
                </div>
                <br>
                <!-- Location -->
                <div>
                    <input type="text" name="location" id="location" required>
                    <x-input name="title" placeholder="Location" hint="Location "
                        class="placeholder:text-gray-500 text-primary" />
                </div>
                <br>

                <!-- Price -->
                <div>
                    {{-- <input type="text" name="price" id="price"> --}}
                    <x-input prefix="NRS" wire:model="" money inline class="text-primary" hint="price" />
                </div>
                <br>

                <!-- Negotiable -->
                <div>
                    <x-toggle label="Negotiable" wire:model="item2" right hint="Is negotiable?" class="toggle-primary"
                        right />
                </div>
                <br>

                <!-- Condition -->
                <div>
                    <label for="condition">Condition:</label>*<br>
                    <select name="condition" id="condition" class="py-4 px-3 w-full bg-[#e8e8e8] rounded-lg">
                        <option value="">Select Condition</option>
                        <option value="new">New</option>
                        <option value="used">Used</option>
                    </select>
                </div>
                <br>

                <!-- Images -->
                <div>
                    <label for="images">Ad Images:</label><br>
                    @if ($images) 
                    <img src="{{ $photo->temporaryUrl() }}">
                @endif
                    <input type="file" class="py-3 px-3 rounded-lg bg-gray-100 w-full" name="images" id="images"
                        multiple>
                        @error('images') <span class="error">{{ $message }}</span> @enderror

                </div>
                <br>
                <x-button type="submit" label="Submit Ad" class="bg-primary text-white" />
            </form>
            <p class="p-3 text-gray-400 font-normal">field * are required.</p>
        </div>
        <div>
        </div>
    </div>

</div>
