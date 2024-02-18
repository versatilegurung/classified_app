<div>
    {{-- Stop trying to control. --}}
    <div class="mt-16 md:py-12">
        <div class="container mx-auto bg-white rounded-2xl px-10 py-12">
            <h2 class="text-xl font-bold text-primary mb-5">
                {{ __('ads-by-location') }}
            </h2>
            <div class="flex flex-wrap gap-5 mb-5">
                @foreach ($districts as $item)
                    <a href="{{ route('ads.location', $item->slug) }}">
                        <div
                            class="cursor-pointer bg-gray-200 px-2 py-1 rounded-md hover:bg-secondary hover:text-white transition-all">
                            {{ $item->name }}<span class="text-sm">({{ $item->ads_count }})</span>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
