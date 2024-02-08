<div>
    {{-- main nav  --}}
    <div class="fixed top-0 left-0 w-full bg-primary text-white p-4 flex justify-between items-center py-5 gap-5 z-[10]">
        <div class="flex items-center gap-3 px-3">
            <label for="my-drawer" class="cursor-pointer">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                    </path>
                </svg>
            </label>
            <a href="{{ route('home') }}" class="text-lg md:text-2xl font-bold text-white tracking-tight">
                {{ env('APP_NAME') }}
                {{-- {{ __('chitwanbuyandsell') }} --}}
            </a>
        </div>

        {{-- search bar --}}
        {{-- <div class="hidden md:flex items-center gap-3">
            <input type="text"
                class="px-3 py-2 border border-secondary rounded-xl bg-secondary w-[40vw] placeholder-white focus:outline-none text-white"
                placeholder="{{ __('search') }}">
            <button class="text-gray-200 focus:outline-none bg-secondary p-1 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8" />
                    <line x1="21" y1="21" x2="16.65" y2="16.65" />
                </svg>
            </button>
        </div> --}}
        {{-- search bar --}}

        {{-- search bar --}}
        @livewire('frontend.inc.search')
        {{-- search bar --}}

        <div class="flex items-center">
            <div>
             
                @if (Auth::check())
                    <a href="{{ route('post.ad') }}"
                        class="bg-secondary py-3 px-3 rounded-md text-white font-normal hover:bg-white hover:text-primary mr-3">
                        {{ __('postad') }}
                    </a>
                @else
                    <x-button label="{{ __('postad') }}" class="btn-secondary mr-3" wire:click="$toggle('myModal')" />
                @endif


            </div>

            <div>
                {{-- if logged in show account icon else show login register  --}}
                @if (Auth::check())
                    <div class="mr-4">
                        <svg class="h-8 w-8  cursor-pointer" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg" wire:click="toggleDropdown" @click="open = !open">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM15 9C15 10.6569 13.6569 12 12 12C10.3431 12 9 10.6569 9 9C9 7.34315 10.3431 6 12 6C13.6569 6 15 7.34315 15 9ZM12 20.5C13.784 20.5 15.4397 19.9504 16.8069 19.0112C17.4108 18.5964 17.6688 17.8062 17.3178 17.1632C16.59 15.8303 15.0902 15 11.9999 15C8.90969 15 7.40997 15.8302 6.68214 17.1632C6.33105 17.8062 6.5891 18.5963 7.19296 19.0111C8.56018 19.9503 10.2159 20.5 12 20.5Z"
                                fill="#fff" />
                        </svg>
                    </div>

                    @if ($isOpen)
                        <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg overflow-hidden z-10">
                            <ul class="w-full block bg-white px-5 py-5">
                                <li class="text-primary hover:underline">
                                    <a href="#">Account</a>
                                </li>
                                <li class="text-primary hover:underline">
                                    <a href="#">Logout</a>
                                </li>
                            </ul>
                        </div>
                    @endif
                @else
                    <div class="hidden xl:flex gap-4 text-white text-sm px-3 py-3">
                        <a href="{{ route('login') }}" class="hover:underline">{{ __('login') }}</a>
                        <a href="{{ route('register') }}" class="hover:underline">{{ __('register') }}</a>
                    </div>
                @endif
            </div>
        </div>

        {{-- language toggle  --}}
        {{-- @livewire('frontend.language-toggle') --}}
        {{-- language toggle  --}}


    </div>
    {{-- main nav  --}}

    {{-- slide sheet menu drawer --}}
    @livewire('frontend.inc.category-drawer')
    {{-- slide sheet menu drawer --}}

    {{-- main nav  --}}

    {{-- Notice `wire:model`, no `id="xxx"` --}}
    <x-modal wire:model="myModal">
        Please login
        <x-slot:actions>
            <x-button label="Cancel" @click="$wire.myModal = false" />
            <x-button class="btn-primary text-white">
                <a href="{{ route('login')}}">Login</a>
            </x-button>
        </x-slot:actions>
    </x-modal>
</div>
