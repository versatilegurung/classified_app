<div>
    {{-- similar ads  --}}
    <div class="mb-4">
        <h3 class="px-2 text-primary underline">{{ __('similar-ads') }}</h3>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-1 gap-5">

        @if ($similarPosts->isEmpty())
            <div class="col-span-1 mb-4 md:mb-0">
                <p class="px-2">{{ __('no-ads-found') }}</p>
            </div>
        @endif
        @foreach ($similarPosts as $item)
            <div class="flex gap-3 p-2 items-center hover:bg-gray-50 rounded-xl">
                @php
                    $adImages = App\Models\AdImage::where('ad_id', $item->id)
                        ->limit(1)
                        ->get();
                @endphp
                @if ($adImages->isEmpty())
                    <div class="w-[180px]">
                        <img src="{{ url('/storage', 'page_images/no-image-placeholder.png') }}" alt="{{ $item->title }}"
                            class="object-cover h-[100px] w-[180px] rounded-md">
                    </div>
                @else
                    @foreach ($adImages as $adImage)
                        <div class="w-[180px]">
                            <img src="{{ url('/storage', $adImage->image) }}" alt="{{ $item->title }}"
                                class="object-cover h-[100px] w-[180px] rounded-md">
                        </div>
                    @endforeach
                @endif

                <div class="flex flex-col w-full">
                    <a href="{{ route('ad.show', $item->slug) }}">
                        <h3 class="font-medium text-sm text-black py-2 leading-tight">
                            {{ Str::limit($item->title, 30, '...') }}
                        </h3>
                    </a>

                    {{-- price  --}}
                    <p class="text-sm">{{ __('ad.currency') }}. {{ $item->price }}</p>
                    {{-- price  --}}

                    {{-- location  --}}
                    <div class="flex gap-1 py-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                        </svg>

                        <p class="text-sm text-secondary font-thin">{{ $item->district->name }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
