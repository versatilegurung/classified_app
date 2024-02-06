    <div>
        <div class="container mx-auto py-0 md:py-10">
            <div class="w-full shadow-lg md:w-2/5 mx-auto bg-white px-10 py-5 mt-16 md:mt-16 rounded-xl">                
                <h2 class="font-black text-primary text-2xl py-7 mb-5">{{ __('login') }}</h2>

                <x-form wire:submit.prevent="login">
                    {{-- email--}}
                    <x-input label="{{ __('email') }}" wire:model="email" placeholder="{{ __('email') }}" />
                    {{-- password--}}
                    <x-input type="password" label="{{ __('password') }}" wire:model="password"
                        placeholder="{{ __('password') }}" />
                    
                    <x-slot:actions>
                        <x-button label="{{ __('login') }}" class="btn btn-primary text-white w-full" type="submit" />
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
