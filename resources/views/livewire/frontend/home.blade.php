<div>
    {{-- search bar for mobile view  --}}
    @livewire('frontend.inc.search-bar')
    {{-- search bar for mobile view  --}}



    {{-- Hero section --}}
    <div class="bg-white">
        @livewire('frontend.featured-ads')
    </div>
    {{-- Hero section --}}


    <div class="bg-cream">
        @livewire('frontend.category-list')
    </div>

    <div class="bg-white">
        @livewire('frontend.recent-ads')
    </div>
</div>
