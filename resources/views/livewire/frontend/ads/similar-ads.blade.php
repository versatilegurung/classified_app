<div>
    {{-- similar ads  --}}

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-1 gap-5">
        <h3 class="px-2 text-primary underline">Similar Ads</h3>

        @foreach ($similarPosts as $item)
            <div class="flex gap-3 p-2 items-center hover:bg-gray-50 rounded-xl">
                @php
                    $adImages = App\Models\AdImage::where('ad_id', $item->id)
                        ->limit(1)
                        ->get();
                @endphp
                @if ($adImages->isEmpty())
                    <div class="w-[180px]">
                        <img src="{{ asset('storage/page_images/no-image-placeholder.png') }}" alt="{{ $item->title }}"
                            class="object-cover h-[100px] w-[180px] rounded-md">
                    </div>
                @else
                    @foreach ($adImages as $adImage)
                        <div class="w-[180px]">
                            <img src="/storage/{{ $adImage->image }}" alt="{{ $item->title }}"
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

                    {{-- location  --}}
                    <div class="flex gap-2 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.2"
                            stroke="currentColor" class="w-4 h-4 text-green-900">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 10.5c0 7.142 7.5 11.25 7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                        </svg>
                        <p class="text-sm text-secondary font-thin">{{ $item->location }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
