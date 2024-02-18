<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

    <div class="container mx-auto py-0 md:py-10">
        <div class="w-full shadow-lg md:w-2/5 mx-auto bg-white px-10 py-16 md:py-5 mt-16 md:mt-16 rounded-xl">
            @if (!session()->has('message'))
                <form wire:submit.prevent="resetPassword">
                    <input type="hidden" name="token" value=" {{ $token }}">
                    <div class="mb-3 mt-5">
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
                                    class="block font-bold text-xl mb-4 text-gray-700 after:content-['*'] after:ml-0.5 after:text-red-500">{{ __('reset-password') }}</span>
                                <input type="password" id="password" wire:model="password"
                                    placeholder="{{ __('password') }}" minlength="8"
                                    class="px-3 mt-2 rounded-lg py-3 w-full border-gray-600 focus:border-transparent border focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 focus:bg-blue-100 first-letter:invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 invalid:focus:bg-pink-100 peer"
                                    @visibility.window="$el.type = ($el.type == 'password') ? 'text' : 'password' ">
                                <p class="text-xs m-1 text-pink-700 invisible peer-invalid:visible">
                                    {{ __('must-be-8-characters') }}</p>
                            </label>
                        </div>
                    </div>
                    <div class="flex justify-center w-full">
                        <x-button label='Reset Password' class="btn btn-primary text-white w-full" type="submit" />
                    </div>
                </form>
            @else
                <div class="py-5 bg-gray-100 rounded-lg">
                    <div class="text-secondary text-center">
                        {{ session('message') }}
                    </div>
                </div>
                <div class="flex flex-col gap-2 items-center py-10">
                    <p class="text-center text-gray-400"> {{ __('dont-have-account') }} | <a
                            href="{{ route('register') }}"
                            class="text-secondary hover:underline">{{ __('register') }}</a></p>
                    <p>
                        <a href="{{ route('login') }}" class="text-secondary hover:underline">{{ __('login') }}</a>
                    </p>
                </div>
            @endif
        </div>
    </div>

</div>
