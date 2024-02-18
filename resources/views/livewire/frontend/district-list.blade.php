<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="bg-neutral">
        <div class="container mx-auto px-4 py-10">
            <h3 class="font-bold text-2xl md:text-3xl text-primary py-5 mb-5">
                {{ __('ad.location') }}
            </h3>
            <div class="flex flex-wrap gap-5 mb-5">
                @foreach ($districts as $item)
                    <a href="{{ route('ads.location', $item->slug) }}">
                        <div
                            class="cursor-pointer bg-gray-200 px-2 py-1 rounded-md hover:bg-secondary hover:text-white transition-all">
                            {{ $item->name }}<span class="text-sm">({{ $item->ads_count }})</span>
                        </div>
                    </a>
                @endforeach
                <a href="{{ route('ads.by.location') }}"
                    class="bg-white  rounded-lg  px-3 hover:underline text-sm py-2 text-secondary">{{ __('more.location') }}</a>
            </div>

        </div>

    </div>
</div>
