<div>
    <div class="mt-16 md:py-12">
        <div class="container mx-auto bg-white rounded-2xl px-10 py-12">
            <h2 class="text-xl font-bold text-primary mb-3">
                Category: <span class="text-secondary">{{ $category->name }}</span>
            </h2>
            <hr>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 py-10 gap-5">

                @if ($ads->isEmpty())
                    <div class="col-span-1">
                        <p>{{__('no-ads-found')}}</p>
                    </div>
                @endif

                @foreach ($ads as $item)
                    <div>
                        @php
                            $adImages = App\Models\AdImage::where('ad_id', $item->id)
                                ->limit(1)
                                ->get();
                        @endphp
                        @if ($adImages->isEmpty())
                            <div class="md:w-[180] h-[180px]">
                                <img src="{{ asset('storage/page_images/no-image-placeholder.png') }}"
                                    alt="{{ $item->title }}" class="object-cover h-[150px] w-[180px] rounded-md">
                            </div>
                        @else
                            @foreach ($adImages as $adImage)
                                <div class="w-[180px]">
                                    <a href="{{ route('ad.show', $item->slug) }}">

                                        <img src="/storage/{{ $adImage->image }}" alt="{{ $item->title }}"
                                            class="object-cover h-[150px] w-[180px] rounded-md">
                                    </a>
                                </div>
                            @endforeach
                        @endif
                        <div class="w-[180px]">
                            <h2 class="text-sm font-bold py-3 leading-tight">
                                <a href="{{ route('ad.show', $item->slug) }}">
                                    {{ Str::limit($item->title, 30) }}
                                </a>
                            </h2>
                            <p class="font-thin text-sm leading-tight py-1">{{ Str::limit($item->description, 40) }}</p>
                            <div> {{-- location  --}}
                                <div class="flex gap-2 py-2 items-center justify-between">
                                    <p>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.2" stroke="currentColor" class="w-4 h-4 text-green-900">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                    </svg>
    
                                    <a href="{{ route('ads.location', $item->location->slug) }}">
                                        <p class="text-xs text-gray-500 hover:underline">{{ $item->location->name }}
                                        </p>
                                    </a>
</p>
                                    <p class="font-bold">{{ __('ad.currency') }}. {{ $item->price }}</p>
                                </div>
                            </div>
                         

                        </div>
                    </div>
                @endforeach

            </div>
        </div>


    </div>
</div>
