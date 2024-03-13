<div>
    {{-- Success is as dangerous as failure. --}}
    <div class="mt-16 md:py-10">
        <div class="container mx-auto bg-white py-10 rounded-xl px-10">
            <h2 class="mb-3 font-bold text-xl">{{ __('ads-by-location') }}: <span
                    class="text-secondary">{{ $district->name }} </span> </h2>
            <hr>
            {{-- list ads  --}}
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-4 mt-4">
                @if ($ads->isEmpty())
                    <div class="col-span-1">
                        <p>{{ __('no-ads-found') }}</p>
                    </div>
                @endif
                @foreach ($ads as $item)
                    <div class="col-span-1">
                        <div class="flex flex-col items-center">
                            @php
                                $adImages = App\Models\AdImage::where('ad_id', $item->id)
                                    ->limit(1)
                                    ->get();
                            @endphp
                            <a href="{{ route('ad.show', $item->slug) }}">
                                @if ($adImages->isEmpty())
                                    <div class="mb-2">
                                        <img src="{{ asset('page_images/no-image-placeholder.png') }}"
                                            alt="{{ $item->title }}"
                                            class="object-cover w-[150px] md:w-[180px] h-[150px] md:h-[180px] rounded-md">
                                    </div>
                                @else
                                    @foreach ($adImages as $adImage)
                                        <div class="mb-2">
                                            <img src="{{ asset($adImage->image) }}" alt="{{ $item->title }}"
                                                class="object-cover w-[150px] md:w-[180px] h-[150px] md:h-[180px] rounded-md">
                                        </div>
                                    @endforeach
                                @endif
                            </a>
                            <p class="text-xs font-bold text-center">
                                <a href="{{ route('ad.show', $item->slug) }}">
                                    {{ $item->title }}
                                </a>
                            </p>
                            <p class="text-xs font-bold text-primary pt-2">{{ __('ad.currency') }} {{ $item->price }}
                            </p>

                            <div class="flex gap-1 py-2 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.2" stroke="currentColor" class="w-6 h-6 text-green-900">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                </svg>
                                <p class="text-xs">{{ $item->district->name }}</p>

                                <p class="text-[0.7rem] mx-5 text-gray-500"> {{ $item->created_at->diffForHumans() }}
                                </p>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
            {{-- list ads  --}}

        </div>
    </div>
</div>
