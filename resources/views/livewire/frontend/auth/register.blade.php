<div>
    {{-- register form --}}
    <div class="container mx-auto py-0 md:py-10">
        <div class="w-full shadow-lg md:w-2/5 mx-auto bg-white px-10 py-5 mt-16 md:mt-16 rounded-xl">
            {{-- <div class="flex flex-cols-2 h-[100vh] w-full md:w-2/3 mx-auto items-center justify-center px-10">
        <div class="w-full py-10  bg-white rounded-2xl p-10"> --}}
            <h3 class="font-bold text-2xl md:text-3xl text-primary mt-5 mb-3">{{ __('register') }}</h3>


            <x-form wire:submit.prevent="register" class="py-5 flex gap-3">
                {{-- Full error bag --}}
                <x-input label="{{ __('name') }}" type="name" wire:model="name"
                    placeholder="{{ __('enter-your-name') }}" />

                <x-input label="{{ __('email') }}" type="email" wire:model="email"
                    placeholder="{{ __('enter-your-email') }}" />

                <x-input type="password" label="{{ __('password') }}" wire:model="password"
                    placeholder="{{ __('password') }}" />

                <x-input type="password" label="{{ __('confirm-password') }}" wire:model="passwordConfirmation"
                    placeholder="{{ __('confirm-password') }}" />

                {{-- //message  --}}
                <div>
                    @if (session()->has('message'))
                        <div class="text-success">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
                <x-slot:actions>
                    <x-button label="{{ __('register') }}" class="btn-primary text-white w-full" type="submit" />
                </x-slot:actions>
            </x-form>

            <div class="py-10">
                <p class="text-gray-600">{{ __('already-have-account') }} | <a href="{{ route('login') }}"
                        class="text-secondary hover:underline ">{{ __('login') }}</a></p>

            </div>
        </div>
    </div>
</div>
