<div>
    {{-- main nav --}}
    <div class="fixed top-0 left-0 w-full bg-primary text-white px-4 py-3 md:py-4 flex justify-between items-center gap-2 z-[10]">
        <div class="flex items-center gap-3 px-3">
            <label for="my-drawer" class="cursor-pointer">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                    </path>
                </svg>
            </label>
            <a href="{{ route('home') }}" class="text-lg md:text-2xl font-bold text-white tracking-tight"
                title="{{ __('chitwanbuyandsell') }}">
                {{ env('APP_NAME') }}
                {{-- {{ __('chitwanbuyandsell') }} --}}
            </a>
        </div>



        {{-- search bar larger screen --}}
        @livewire('frontend.inc.search')
        {{-- search bar larger screen --}}

        <div class="flex items-center">

            {{-- search toggle button for mobile --}}
            <button class="flex mr-4 md:hidden" wire:click="toggleSearchForm">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
            </button>
            {{-- search toggle button for mobile --}}

            @if ($showSearchForm)
                <div
                    class="absolute flex md:hidden top-20 bg-secondary w-screen left-0 justify-center text-center py-4 px-3 gap-4">
                    <input wire:model.live="searchTerm" type="text"
                        class="px-4 py-3 border border-none w-full rounded-md bg-primary placeholder-white focus:outline-none font-thin text-white"
                        placeholder="{{ __('search') }}">
                    <button wire:click="toggleSearchForm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 text-white hover:text-warning cursor-pointer">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            @endif
            <div>

                {{-- search result --}}
                <div class="absolute flex flex-col w-screen md:hidden left-0 top-36 bg-white transition-opacity ">
                    @if (sizeof($results) > 0)
                        @foreach ($results as $item)
                            <div
                                class="text-primary text-medium hover:bg-gray-100 items-center cursor-pointer py-4 px-5 w-full backdrop-blur-2xl z-20">
                                <div class="flex items-center">
                                    @php
                                        $adImages = App\Models\AdImage::where('ad_id', $item->id)
                                            ->limit(1)
                                            ->get();
                                    @endphp
                                    <a href="{{ route('ad.show', $item->slug) }}">
                                        @if ($adImages->isEmpty())
                                            <div class="w-[150px] md:w-[180px]">
                                                <img src="{{ asset('storage/page_images/no-image-placeholder.png') }}"
                                                    alt="{{ $item->title }}" class="object-cover w-8 h-8 rounded-md">
                                            </div>
                                        @else
                                            @foreach ($adImages as $adImage)
                                                <div class="w-12 mr-3">
                                                    <img src="/storage/{{ $adImage->image }}" alt="{{ $item->title }}"
                                                        class="object-cover h-12 w-12 rounded-md">
                                                </div>
                                            @endforeach
                                        @endif
                                        <p class="text-md">
                                            <a href="{{ route('ad.show', $item->slug) }}">
                                                {{ Str::limit($item->title, 30) }}
                                            </a>
                                        </p>
                                        <p class="text-sm mx-5 text-gray-500"> {{ $item->created_at->diffForHumans() }}
                                        </p>
                                </div>

                            </div>
                        @endforeach
                    @elseif (strlen($searchTerm) > 2)
                        <div class="text-primary text-medium cursor-pointer py-5 px-3 w-screen">
                            No Result Found.
                        </div>
                    @endif
                </div>
                {{-- search result --}}


                {{-- check auth and show post ad button --}}
                @if (Auth::check())
                    <a href="{{ route('post.ad') }}"
                        class="bg-secondary py-3 px-3 text-sm rounded-md text-white font-normal hover:bg-white hover:text-primary mr-3">{{ __('postad') }}
                    </a>
                @else
                    <x-button label="{{ __('postad') }}" class="btn-secondary  text-white"
                        wire:click="$toggle('loginModal')" />
                @endif
                {{-- check auth and show post ad button --}}


            </div>

            <div>
                {{-- if logged in show account icon else show login register --}}
                @if (Auth::check())
                    <div class="mr-0" >

                    </div>
                    <label for="accountDrawer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.0"
                            stroke="currentColor" class="w-10 h-10 cursor-pointer">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                    </label>
                @else
                    <div class="hidden xl:flex gap-4 text-white text-sm px-3 py-3">
                        <a href="{{ route('login') }}" class="hover:underline">{{ __('login') }}</a>
                        <a href="{{ route('register') }}" class="hover:underline">{{ __('register') }}</a>
                    </div>
                @endif
            </div>
        </div>

        {{-- language toggle --}}
        {{-- @livewire('frontend.language-toggle') --}}
        {{-- language toggle --}}


    </div>
    {{-- main nav --}}

    {{-- slide sheet menu drawer --}}
    @livewire('frontend.inc.category-drawer')
    {{-- slide sheet menu drawer --}}

    {{-- main nav --}}

    {{-- check if user is logged in to post ad or not --}}
    <x-modal wire:model="loginModal">
        {{ __('please_login') }}
        <x-slot:actions>
            <x-button label="{{ __('cancel') }}" @click="$wire.loginModal = false" />
            <x-button class="btn-primary text-white">
                <a href="{{ route('login') }}">{{ __('login') }}</a>
            </x-button>
        </x-slot:actions>
    </x-modal>

    {{-- account drawer when user is logged in --}}
    @if (Auth::check())
    <div id="sideDrawer" class="side-drawer">

    {{-- @include('livewire.frontend.account.account-nav') --}}
    </div>

        <x-drawer id="accountDrawer" right class="w-full lg:w-1/4">
            @include('livewire.frontend.account.account-nav')
        </x-drawer>
    @endif



</div>

