    <div>
        <div class="container mx-auto py-0 md:py-10">
            <div class="w-full shadow-lg md:w-2/5 mx-auto bg-white px-10 py-5 mt-16 md:mt-16 rounded-xl">
                {{-- <div class="flex flex-cols h-[100vh] w-full md:w-1/3 mx-auto items-center justify-center px-10">
            <div class="bg-white shadow-lg rounded-2xl p-10 w-full"> --}}
                <h2 class="font-black text-primary text-2xl text-center">{{ __('login') }}</h2>

                <x-form wire:submit="login">
                    {{-- Full error bag --}}
                    <x-input label="{{ __('email') }}" wire:model="email" placeholder="{{ __('email') }}" />
                    <div>
                        @error('email')
                            <span class="text-error">{{ $message }}</span>
                        @enderror
                    </div>
                    {{-- Notice `omit-error` --}}
                    <x-input type="password" label="{{ __('password') }}" wire:model="password"
                        placeholder="{{ __('password') }}" />
                    <div>
                        @error('email')
                            <span class="text-error">{{ $message }}</span>
                        @enderror
                    </div>
                    <x-slot:actions>
                        <x-button label="{{ __('login') }}" class="btn-primary text-white w-full" type="submit" />
                    </x-slot:actions>
                </x-form>
                {{-- social logins  --}}
                {{-- <div id="social-logins">
                    <p class="text-center my-5">Or</p>
                    <div class="flex justify-center items-center gap-5">
                        <a href="#"
                            class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Google</a>
                        <a href="#"
                            class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Facebook</a>
                    </div>
                </div> --}}
                {{-- social logins  --}}

                <div class="flex flex-col gap-2 items-center py-10">
                    <p class="text-center">{{ __('dont-have-account') }} | <a href="{{ route('register') }}"
                            class="text-secondary hover:underline">{{ __('register') }}</a></p>
                    <p>
                        <a href="{{ route('forgot-password') }}"
                            class="text-secondary hover:underline">{{ __('forgot-password') }}</a>
                    </p>

                </div>
            </div>
        </div>

    </div>
