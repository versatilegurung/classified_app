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
                <x-form wire:submit.prevent="register" class="py-5 flex gap-3" id="register-form" method="POST">
                    {{-- Full error bag --}}
                    <x-input label="{{ __('name') }}" type="name" wire:model="name"
                        placeholder="{{ __('enter-your-name') }}" required />

                    <x-input label="{{ __('email') }}" type="email" wire:model="email"
                        placeholder="{{ __('enter-your-email') }}" required />

                    <div class="mt-1 relative">
                        <x-input type="{{ $showPassword ? 'text' : 'password' }}" label="{{ __('password') }}"
                            wire:model="password" placeholder="{{ __('password') }}" class="block w-ful pr-12"
                            required />

                    </div>
                    {{-- show hide password  --}}
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
                        <button type="button" wire:click="toggleShowPassword" class="text-gray-900 focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
                            </svg>
                        </button>
                    </div>
                    {{-- show hide password  --}}

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

@push('styles')
    <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.google_site_key') }}">
    </script>
@endpush
