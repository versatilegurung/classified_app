<div>
    {{-- register form --}}
    <div class="container mx-auto py-0 md:py-16">
        <div class="w-full shadow-lg md:w-3/5 lg:w-2/5 mx-auto bg-white px-10 py-16 md:py-5 mt-16 md:mt-16 rounded-xl">
            <h3 class="font-bold text-2xl md:text-3xl text-primary mt-5 mb-3">{{ __('register') }}</h3>


            @if ($registrationSuccess)
                {{-- //message  --}}
                @if (session()->has('message'))
                    <div class="text-primary text-md py-10 rounded-xl">
                        {{ session('message') }}
                    </div>
                @endif
                {{-- //message  --}}
            @else
                <x-form wire:submit.prevent="register" class="py-5 flex gap-3" id="register-form">
                    {{-- Full error bag --}}
                    <x-input label="{{ __('name') }}" type="name" wire:model="name"
                        placeholder="{{ __('enter-your-name') }}" required />

                    <x-input label="{{ __('email') }}" type="email" wire:model="email"
                        placeholder="{{ __('enter-your-email') }}" required />

                    <div class="relative">
                        <div class="relative" x-data="{ isVisible: false }">
                            <div class="absolute flex right-4 mt-1.5 items-center ml-2 h-full">
                                <button class="px-1 block focus:outline-none"
                                    @click="$dispatch('visibility'); isVisible = !isVisible;">
                                    <div x-show="isVisible">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div x-show="!isVisible">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21">
                                            </path>
                                        </svg>
                                    </div>
                                </button>
                            </div>
                            <label for="password" class="block">
                                <span
                                    class="block font-bold text-md m-2 text-gray-700 after:content-['*'] after:ml-0.5 after:text-red-500">Password</span>
                                <input type="password" id="password" wire:model="password"
                                    placeholder="{{ __('password') }}" minlength="8"
                                    class="px-3 rounded-lg py-3 w-full border-gray-600 focus:border-transparent border focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 focus:bg-blue-100 first-letter:invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 invalid:focus:bg-pink-100 peer"
                                    @visibility.window="$el.type = ($el.type == 'password') ? 'text' : 'password' ">
                                <p class="text-xs m-1 text-pink-700 invisible peer-invalid:visible">
                                    {{ __('must-be-8-characters') }}</p>
                            </label>
                        </div>
                    </div>

                    {!! NoCaptcha::renderJs() !!}
                    <x-slot:actions>
                        <x-button label="{{ __('register') }}" class="btn-primary text-white w-full" type="submit" />

                    </x-slot:actions>
                </x-form>
            @endif
            <div class="py-10">
                <p class="text-gray-600">{{ __('already-have-account') }} | <a href="{{ route('login') }}"
                        class="text-secondary hover:underline ">{{ __('login') }}</a></p>

            </div>
        </div>
    </div>

</div>
