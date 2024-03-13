@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        referrerpolicy="no-referrer" />
@endpush
<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="container mx-auto py-0 mt-24">
        <div class="w-full bg-white px-4 md:mt-16">
            <h3 class="font-bold text-2xl md:text-3xl text-primary mb-5 py-5">
                {{ __('featured.ads') }}
            </h3>
            {{-- slider  --}}
            <div class="flex">
                <div class="owl-carousel owl-theme">
                    @foreach ($ads as $item)
                        @if ($ads->isEmpty())
                            <div class="col-span-1">
                                <p>{{ __('no-ads-found') }}</p>
                            </div>
                        @endif

                        <div class="item hover:bg-gray-50 transition-all rounded-xl p-3">
                            <a href="{{ route('ad.show', $item->slug) }}">

                                @php
                                    $adImages = App\Models\AdImage::where('ad_id', $item->id)
                                        ->limit(1)
                                        ->get();
                                @endphp
                                @if ($adImages->isEmpty())
                                    <div class="py-2">
                                        <img src="{{ url('/storage', 'page_images/no-image-placeholder.png') }}"
                                            alt="{{ $item->title }}" class="object-cover h-[200px] w-full rounded-md">
                                    </div>
                                @else
                                    @foreach ($adImages as $adImage)
                                        <div class="py-2">
                                            <img src="{{ url('/storage', $adImage->image) }}" alt="{{ $item->title }}"
                                                class="object-cover h-[200px] w-full rounded-md">
                                        </div>
                                    @endforeach
                                @endif

                                <p class="text-primary font-bold text-sm py-3 hover:underline">
                                    {{ Str::limit($item->title, 40, '...') }}</p>
                            </a>

                            <div class="grid grid-cols-2 gap-2 items-center py-2">
                                <div class="">
                                    <div class="flex gap-1 items-center mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.2" stroke="currentColor" class="w-4 h-4 text-green-900">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                        </svg>


                                        <p class="text-xs text-gray-500 hover:underline"><a
                                                href="{{ route('ads.location', $item->district->slug) }}">{{ $item->district->name }}
                                            </a></p>

                                    </div>
                                    <div class="flex gap-1 items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.2" stroke="currentColor" class="w-4 h-4 text-black">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        </svg>
                                        <a href="{{ route('ads.user', $item->user->id) }}">
                                            <p class="text-xs text-gray-500 hover:underline">{{ $item->user->name }}
                                            </p>
                                        </a>

                                    </div>

                                </div>
                                <div class=" text-end">
                                    <p class="text-primary font-bold text-sm">{{ __('ad.currency') }}.
                                        {{ $item->price }}<br>
                                        {{-- if negotiable true show negotiable  --}}
                                        @if ($item->negotiable)
                                            <span class="text-[10px] text-red-800 font-normal">Negotiable</span>
                                        @endif

                                    </p>
                                </div>
                            </div>
                            <p
                                class="flex justify-center items-center gap-3 text-xs text-gray-800 bg-gray-100 py-1 w-full text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                {{ $item->created_at->diffForHumans() }} |
                                @if ($item->condition == 'new')
                                    <span class="text-green px-2 py-1 rounded-md">New</span>
                                @else
                                    <span class="text-secondary px-2 py-1 rounded-md">Used</span>
                                @endif
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 15,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: false,
            items: 5,
            responsiveClass: true,
            nav: false,
            responsive: {
                0: {
                    items: 2,
                },
                600: {
                    items: 4,
                },
                1000: {
                    items: 5,
                }
            }
        })
    </script>
@endpush
