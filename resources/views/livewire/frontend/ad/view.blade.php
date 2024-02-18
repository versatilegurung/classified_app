<div>

    <div class="container mx-auto py-0 md:py-10 mt-16">
        <div class="w-full bg-white rounded-xl pb-10">
            {{-- breadcrumb --}}
            <div class="flex gap-3 px-6 md:px-12 py-14 md:py-10 font-normal text-xs items-center">
                <p><a href="{{ route('home') }}" class="text-primary">
                        {{-- home icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>

                        {{-- home icon --}}
                    </a>
                </p>>
                <p>
                    <a href="{{ route('ads.category', $ad->category->slug) }}"
                        class="hover:underline">{{ $ad->category->name }}</a>
                </p> >
                <p><a href="{{ route('ad.show', $ad->slug) }}"
                        class="text-gray-500 font-thin hover:underline">{{ $ad->title }}</a></p>
            </div>
            {{-- breadcrumb --}}


            {{-- if session has message  --}}
            @if (session()->has('message'))
                <div class="text-green-800 text-md text-center py-5">
                    {{ session('message') }}
                </div>
            @endif
            {{-- if session has message  --}}


            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-9 gap-5 px-5 lg:px-10">
                <div class="col-span-1 md:col-span-1 lg:col-span-2 items">
                    {{-- get photo gallery with ad id --}}
                    @livewire('frontend.ad.photo-gallery', ['ad_id' => $ad->id])
                    <div class="py-2">
                        <hr class="mb-3">
                        <div class="flex  gap-1 items-center justify-between">
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.2" stroke="currentColor" class="w-4 h-4 text-green-900">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                </svg>
                                <p class="text-xs text-gray-500 hover:underline"><a
                                        href="{{ route('ads.location', $ad->district->slug) }}">{{ $ad->district->name }}
                                    </a></p>
                            </div>
                            <div class="flex gap-1 items-center"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                <span class="text-sm text-gray-500">
                                    {{ $ad->created_at->diffForHumans() }}</span>
                            </div>
                        </div>
                        <div class="flex justify-between py-5">
                            <div>
                                <p class="text-sm text-primary">
                                    {{ $ad->user->name }}
                                </p>
                            </div>
                            <div>
                                <p class="font-bold text-md">{{ __('ad.currency') }}. {{ $ad->price }}
                                    <span
                                        class="text-[0.7rem] font-normal text-secondary">{{ $ad->negotiable ? 'Negotiable' : '' }}</span>
                                </p>

                            </div>
                        </div>
                        <div>

                            {{-- contact seller --}}
                            @livewire('frontend.account.compose-message', ['adId' => $ad->id])
                            {{-- contact seller --}}

                        </div>
                        <div class="text-center py-2">
                            {{-- ad expires at  --}}
                            <p class="text-xs text-gray-400">{{ __('ad-expires-at') }}: {{ $ad->expires_at }}</p>
                            {{-- ad expires at  --}}
                        </div>
                    </div>
                </div>
                {{-- get photo gallery with ad id --}}


                <div class="col-span-1 md:col-span-1 lg:col-span-5 py-5">
                    <h3 class="font-bold text-2xl md:text-3xl text-primary mb-5">{{ $ad->title }} <span
                            class="font-normal text-sm text-gray-400">({{ $ad->category->name }})</span>
                    </h3>
                    <p class="text-xs py-2">Views: {{ $ad->views }}</p>
                    <p class="text-secondary py-5">{{ $ad->description }}</p>

                </div>

                <div class="col-span-1 md:col-span-2">
                    @livewire('frontend.ads.similar-ads', ['adId' => $ad->id])
                </div>
            </div>
        </div>
    </div>

</div>