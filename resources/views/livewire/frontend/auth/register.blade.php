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
                            wire:model="password" placeholder="{{ __('password') }}" class="block w-ful pr-12" required/>

                        <div class="absolute inset-y-0 right-0 pr-3 pt-7 flex items-center hover:text-warning"
                            title="{{ __('show-password') }}">
                            <a wire:click="toggleShowPassword" wire:keydown.window.prevent.enter="toggleShowPassword"
                                x-data="{ pressing: false }" @mousedown="pressing = true" @mouseup="pressing = false"
                                @mouseleave="pressing = false">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                 
                    {!! NoCaptcha::renderJs() !!}
                    <x-slot:actions>                      
                        <x-button label="{{ __('register') }}" class="btn-primary text-white w-full" type="submit"/>                               
        
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
<script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.google_site_key') }}"></script>

@endpush