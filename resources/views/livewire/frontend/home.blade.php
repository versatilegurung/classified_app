@push('styles')
    <meta name="og:image" content="{{ asset('storage/page_images/logo.png') }}">
@endpush
<div>

    {{-- sponsored ads --}}
    {{-- <div class="">
        @livewire('frontend.sponsored-ads')
    </div> --}}
    {{-- sponsored ads --}}

    {{-- featured section --}}
    <div class="bg-white">
        @livewire('frontend.featured-ads')
    </div>
    {{-- featured section --}}

    {{-- districts list  --}}
    <div class="">
        @livewire('frontend.district-list')
    </div>
    {{-- districts list  --}}

    {{-- recent ads  --}}
    <div class="bg-white">
        @livewire('frontend.recent-ads')
    </div>
    {{-- recent ads  --}}

    {{-- category list  --}}
    <div class="bg-cream">
        @livewire('frontend.category-list')
    </div>
    {{-- category list  --}}

    {{-- milestone --}}
    @livewire('frontend.inc.milestone')
    {{-- milestone --}}

</div>
