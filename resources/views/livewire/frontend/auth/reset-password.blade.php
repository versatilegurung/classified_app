<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

    <div class="container mx-auto py-0 md:py-10">
        <div class="w-full shadow-lg md:w-2/5 mx-auto bg-white px-10 py-16 md:py-5 mt-16 md:mt-16 rounded-xl">
            <h2 class="font-black py-5 text-xl">Reset Password</h2>
            @if (!session()->has('message'))
                <form wire:submit.prevent="resetPassword">
                    <input type="hidden" name="token" value=" {{ $token }}">
                    <div class="mb-8 mt-5">
                        <x-input wire:model="password" type="password" placeholder="{{ __('your-new-password') }}" />
                    </div>
                    <div class="flex  justify-center w-full">
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
