<div>

    <div class="container mx-auto py-0 md:py-10 mt-16">
        <div class="w-full bg-white rounded-xl">

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

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-9 gap-5 px-5 lg:px-10">


                <div class="col-span-1 md:col-span-1 lg:col-span-2 items">
                    {{-- get photo gallery with ad id --}}
                    @livewire('frontend.ad.photo-gallery', ['ad_id' => $ad->id])
                    <div class="py-2">
                        <hr class="mb-3">
                        <span class="text-sm text-gray-500">{{ __('posted.at') }}
                            {{ $ad->created_at->diffForHumans() }}</span>
                        <div class="flex justify-between py-5">
                            <div>
                                <p>
                                    {{ $ad->user->name }}
                                </p>
                            </div>
                            <div>
                                <p class="font-bold text-lg">{{ __('ad.currency') }}. {{ $ad->price }}</p>
                            </div>
                        </div>
                        <div>
                            {{-- some social share icons --}}


                        </div>
                    </div>
                </div>
                {{-- get photo gallery with ad id --}}

                <div class="col-span-1 md:col-span-1 lg:col-span-5 py-5">
                    <h3 class="font-bold text-2xl md:text-3xl text-primary mb-5">{{ $ad->title }} <span
                            class="font-normal text-sm text-gray-400">({{ $ad->category->name }})</span> </h3>
                    <p class="text-secondary">{{ $ad->description }}</p>
                    <div class="flex justify-between items-center py-2 md:py-3 gap-5">
                        <p class="text-sm">
                            <span class=" text-gray-500">Location: {{ $ad->location->name }} </span>
                        </p>
                        <p class="text-sm">

                    </div>
                </div>

                <div class="col-span-1 md:col-span-2">
                    @livewire('frontend.ads.similar-ads', ['adId' => $ad->id])
                </div>
            </div>
        </div>
    </div>
</div>
