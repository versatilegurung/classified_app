<div>
    {{-- In work, do what you enjoy. --}}
    <div class="bg-neutral">
        <div class="container mx-auto px-4 py-10">
            <h3 class="font-bold text-2xl md:text-3xl text-primary py-5 mb-5">
                {{ __('ad.location') }}
            </h3>
            <div class="flex flex-wrap gap-5 mb-5">
                @foreach ($locations as $item)
                <a href="{{ route('ads.location', $item->slug)}}">
                    <div class="cursor-pointer bg-gray-200 px-2 py-1 rounded-md hover:bg-secondary hover:text-white transition-all">
                        {{ $item->name }}<span class="text-sm">({{ $item->ads_count }})</span>
                    </div></a> 
                @endforeach
            </div>
        </div>
    </div>
</div>
