<div>
    {{-- website milestone  --}}
    <div class="bg-white py-10">
        <div class="container md:mx-auto px-5 py-10 rounded-xl">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-10 justify-center items-center">
                <div class="text-center">
                    <h2 class="text-lgd">{{ __('total-ads') }}</h2>
                    <p class="text-4xl font-bold">{{ $totalAds }}</p>
                </div>
                <div class="text-center">
                    <h2 class="text-lgd">{{ __('total-users') }}</h2>
                    <p class="text-4xl font-bold">{{ $totalUsers }}</p>
                </div>

                <div class="text-center">
                    <h2 class="text-lg">{{ __('total-published') }}</h2>
                    <p class="text-4xl font-bold">{{ $totalPublished }}</p>
                </div>

                <div class="text-center">
                    <h2 class="text-lg">{{ __('total-sold') }}</h2>
                    <p class="text-4xl font-bold">{{ $totalSold }}</p>
                </div>
            </div>
        </div>
    </div>
