<div>
    {{-- forgot password form  --}}
    <div class="container mx-auto py-0 md:py-10">
        <div class="w-full shadow-lg md:w-2/5 mx-auto bg-white px-10 py-16 md:py-5 mt-16 md:mt-16 rounded-xl">
            <h2 class="font-black text-primary text-2xl text-center mb-10">Forgot Password</h2>

            @if (!session()->has('message'))
                <form wire:submit.prevent="forgotPassword">
                    <div class="mb-8">
                        <x-input label="{{ __('email') }}" wire:model="email" type="email" placeholder="Email" />
                    </div>
                    <div class="flex  justify-center w-full">
                        <x-button label='Send Reset Link' class="btn btn-primary text-white w-full" type="submit" />
                    </div>
                </form>
            @else
                <div class="py-5 bg-gray-100 rounded-lg">
                    <div class="text-secondary text-center">
                        {{ session('message') }}
                    </div>

                </div>
            @endif
            <div>
                <div class="flex flex-col gap-2 items-center py-10">
                    <p class="text-center text-gray-400"> {{ __('dont-have-account') }} | <a
                            href="{{ route('register') }}"
                            class="text-secondary hover:underline">{{ __('register') }}</a></p>
                    <p>
                        <a href="{{ route('login') }}" class="text-secondary hover:underline">{{ __('login') }}</a>
                    </p>

                </div>
            </div>


        </div>

    </div>
