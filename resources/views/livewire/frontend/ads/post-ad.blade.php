@push('styles')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Cropper.js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.1/cropper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.1/cropper.min.css" />

    {{-- Sortable.js --}}
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.1/Sortable.min.js"></script>

    {{-- tinymce --}}
    <script type="text/javascript" src='https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js'
        referrerpolicy="origin"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: '#myTextarea',
            width: 600,
            height: 300,
            plugins: [
                'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
                'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen',
                'insertdatetime',
                'media', 'table', 'emoticons', 'template', 'help'
            ],
            toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
                'forecolor backcolor emoticons | help',
            menu: {
                favs: {
                    title: 'My Favorites',
                    items: 'code visualaid | searchreplace | emoticons'
                }
            },
            menubar: 'favs file edit view insert format tools table help',
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

                <!-- Title -->
                <div>
                    <x-input name="title" placeholder="Ad Title" icon="o-plus" hint="Your Ad Title "
                        class="bg-cream placeholder:text-gray-700 text-primary" />

                </div>
                <br>


                <!-- Description -->
                <div>
                    <textarea id="myTextarea"></textarea>


                </div>
                <br>

                <!-- Category ID -->
                <div>
                    <label for="category_id">Category ID:</label><br>
                    <select name="category_id" id="">
                        <option value="">Select Category</option>
                        @foreach ($categories as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>

                </div>
                <br>

                <!-- Sub Category ID -->
                <div>
                    <label for="sub_category_id">Sub Category ID:</label><br>
                    <input type="text" name="sub_category_id" id="sub_category_id">
                </div>
                <br>

                <!-- Location -->
                <div>
                    <label for="location">Location:</label><br>
                    <input type="text" name="location" id="location" required>
                </div>
                <br>

                <!-- Price -->
                <div>
                    <label for="price">Price:</label><br>
                    <input type="text" name="price" id="price">
                </div>
                <br>

                <!-- Negotiable -->
                <div>
                    <label for="negotiable">Negotiable:</label><br>
                    <input type="checkbox" name="negotiable" id="negotiable" value="1">
                </div>
                <br>

                <!-- Featured -->
                <div>
                    <label for="featured">Featured:</label><br>
                    <input type="checkbox" name="featured" id="featured" value="1">
                </div>
                <br>

                <!-- Condition -->
                <div>
                    <label for="condition">Condition:</label><br>
                    <input type="text" name="condition" id="condition" required>
                </div>
                <br>

                <!-- Images -->
                <div>
                    <label for="images">Images:</label><br>
                    <input type="file" name="images" id="images" multiple>
                </div>
                <br>

                <!-- Published -->
                <div>
                    <label for="published">Published:</label><br>
                    <input type="checkbox" name="published" id="published" value="1">
                </div>
                <br>

                <button type="submit">Submit</button>
            </form>

        </div>
    </div>

</div>
