@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        referrerpolicy="no-referrer" />
@endpush
<div>

    <div class="owl-carousel owl-theme">


        @if ($images->isEmpty())
            <div class="py-2">
                <img src="{{ asset('storage/page_images/no-image-placeholder.png') }}"
                    title="{{ __('chitwanbuyandsell') }}" alt="{{ __('chitwanbuyandsell') }}"
                    class="h-[300px] w-full object-cover rounded-lg">
            </div>
        @else
            @foreach ($images as $item)
                <!-- Item 1 -->
                <div class="mb-2">
                    <a href="../storage/{{ $item->image }}" target="_blank" title="{{ __('chitwanbuyandsell') }}">
                        <img src="../storage/{{ $item->image }}" alt="{{ __('chitwanbuyandsell') }}"
                            class="h-[300px] w-full object-cover rounded-lg cursor-pointer">
                    </a>
                </div>
            @endforeach
        @endif
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
            margin: 10,
            autoplay: false,
            items: 1,
        })
    </script>
@endpush
