<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="mt-16 md:py-10">
        <div class="container md:mx-auto md:px-5 md:py-10 md:rounded-xl">
            <div class="grid grid-cols-1 md:grid-cols-9 gap-4">

                {{-- navigation  --}}
                <div class="col-span-2 hidden md:block">
                    @include('livewire.frontend.account.account-nav')
                </div>

                {{-- dashboard content  --}}
                <div class="col-span-7">
                    <div class="bg-white rounded-xl py-10 px-5 md:px-10 container md:mx-auto h-full">
                        <p>
                            {{ __('namaste') }}, {{ auth()->user()->name }}, <br>{{ __('welcome-to-dashboard') }}
                        </p>
                        <div>
                            {{-- widget with total ads, total messages, total views, etc. --}}
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-10">
                                <div class="bg-gray-100 rounded-xl p-5">
                                    <a href="{{ route('my.ads') }}">
                                        <p class="text-center text-2xl font-bold">{{ $totalAds }}</p>
                                        <p class="text-center text-xs">{{ __('total-ads') }}</p>
                                    </a>
                                </div>
                                <div class="bg-gray-100 rounded-xl p-5">
                                    <p class="text-center text-2xl font-bold">{{ $totalMessages }}</p>
                                    <p class="text-center text-xs">{{ __('total-messages') }}</p>
                                </div>
                                <div class="bg-gray-100 rounded-xl p-5">
                                    <p class="text-center text-2xl font-bold">{{ $totalViews }}</p>
                                    <p class="text-center text-xs">{{ __('total-views') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
