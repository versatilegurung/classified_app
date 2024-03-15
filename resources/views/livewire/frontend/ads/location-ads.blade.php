<div>
    {{-- Success is as dangerous as failure. --}}
    <div class="mt-16 md:py-12">
        <div class="container mx-auto bg-white py-10 rounded-xl px-10">
            <h2 class="mb-3 font-bold text-xl">{{ __('ads-by-location') }}: <span
                    class="text-secondary">{{ $district->name }} </span> </h2>
            <hr>
            {{-- list ads  --}}

            <div class="grid grid-cols-2 pt-10 md:grid-cols-9">
                <div class="col-span-2 md:col-span-6 lg:col-span-7">

                    <div class="flex flex-wrap gap-5">
                        @if ($ads->isEmpty())
                            <div class="col-span-1">
                                <p>{{ __('no-ads-found') }}</p>
                            </div>
                        @endif

                        @foreach ($ads as $item)
                            <div>
                                @php
                                    $adImages = App\Models\AdImage::where('ad_id', $item->id)
                                        ->limit(1)
                                        ->get();
                                @endphp
                                <div class="w-[160px] md:w-[180px] lg:w-[200px]">

                                    <a href="{{ route('ad.show', $item->slug) }}">
                                        @if ($adImages->isEmpty())
                                            <img src="{{ asset('page_images/no-image-placeholder.png') }}"
                                                alt="{{ $item->title }}"
                                                class="object-cover h-[150px] w-full lg:w-[200px] rounded-md">
                                        @else
                                            @foreach ($adImages as $adImage)
                                                <img src="{{ asset($adImage->image) }}" alt="{{ $item->title }}"
                                                    class="object-cover h-[150px] w-full md:w-[180px] lg:w-[200px] rounded-md">
                                            @endforeach
                                        @endif

                                    </a>
                                    <h2 class="text-sm font-bold py-3 leading-tight">
                                        <a href="{{ route('ad.show', $item->slug) }}">
                                            {{ Str::limit($item->title, 30) }}
                                        </a>
                                    </h2>
                                    <p class="font-thin text-sm leading-tight py-1">
                                        {{ Str::limit($item->description, 40) }}
                                    </p>
                                    <div> {{-- location  --}}
                                        <div class="flex gap-2 py-2 items-center justify-between">
                                            <p>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.2" stroke="currentColor"
                                                    class="w-4 h-4 text-green-900">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                                </svg>

                                                <a href="{{ route('ads.location', $item->district->slug) }}">
                                                    <p class="text-xs text-gray-500 hover:underline">
                                                        {{ $item->district->name }}
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

                <div class="hidden md:block md:col-span-3 lg:col-span-2">
                    <div class="">
                        <img src="{{ asset('page_images/no-image-placeholder.png') }}" alt="Advertisement here">
                        here
                    </div>

                </div>
            </div>
            {{-- list ads  --}}

        </div>
    </div>
</div>
