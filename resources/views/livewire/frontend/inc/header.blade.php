<div>
    {{-- main nav  --}}
    <div
        class="fixed top-0 left-0 w-full bg-primary text-white p-4 flex justify-between items-center py-5 gap-5 z-[10]">
        <div class="flex items-center gap-3 px-3">
            <label for="my-drawer" class="cursor-pointer">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                    </path>
                </svg>
            </label>
            <a href="{{ route('home') }}" class="text-lg md:text-2xl font-bold text-white tracking-tight">
                {{ env('APP_NAME') }} <p>{{__("welcome")}}</p>
            </a>
        </div>

        {{-- search bar --}}
        <div class="hidden md:flex items-center gap-3">
            <input type="text"
                class="px-3 py-2 border border-secondary rounded-xl bg-secondary w-[40vw] placeholder-white focus:outline-none text-white"
                placeholder="Search">
            <button class="text-gray-200 focus:outline-none bg-secondary p-1 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8" />
                    <line x1="21" y1="21" x2="16.65" y2="16.65" />
                </svg>
            </button>
        </div>

        <div class="flex items-center">
            <div>
                <a href="{{ route('post.ad') }}"
                    class="bg-secondary py-2 px-3 rounded-md text-white text-sm hover:bg-white hover:text-primary mr-3">
                    + Post Ad
                </a>
            </div>

            <div>
                {{-- if logged in show account icon else show login register  --}}
                @if (Auth::check())
                    <div class="mr-4">
                        <label for="my-drawer2">
                            <x-button class="text-white btn-circle">
                                {{-- svg user icon  --}}
                                <svg class="" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" wire:click="checkAuth">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM15 9C15 10.6569 13.6569 12 12 12C10.3431 12 9 10.6569 9 9C9 7.34315 10.3431 6 12 6C13.6569 6 15 7.34315 15 9ZM12 20.5C13.784 20.5 15.4397 19.9504 16.8069 19.0112C17.4108 18.5964 17.6688 17.8062 17.3178 17.1632C16.59 15.8303 15.0902 15 11.9999 15C8.90969 15 7.40997 15.8302 6.68214 17.1632C6.33105 17.8062 6.5891 18.5963 7.19296 19.0111C8.56018 19.9503 10.2159 20.5 12 20.5Z"
                                        fill="#fff" />
                                </svg>
                            </x-button>
                        </label>
                    </div>
                @else
                    <div class="hidden xl:flex gap-4 text-white text-sm px-3 py-3">
                        <a href="{{ route('login') }}" class="hover:underline">Login</a>
                        <a href="{{ route('register') }}" class="hover:underline">Register</a>
                    </div>
                @endif
            </div>
        </div>

        @livewire('frontend.language-toggle')

    </div>
    {{-- main nav  --}}

    {{-- slide sheet menu drawer --}}
    @livewire('frontend.inc.category-drawer')
    {{-- slide sheet menu drawer --}}

    {{-- main nav  --}}
</div>
