<div>
    {{-- forgot password form  --}}
    <div class="container mx-auto py-0 md:py-10">
        <div class="w-full shadow-lg md:w-2/5 mx-auto bg-white px-10 py-5 mt-16 md:mt-16 rounded-xl">    
            <h2 class="font-black text-primary text-2xl text-center mb-10">Forgot Password</h2>
            <form wire:submit.prevent="forgotPassword">
                <div class="mb-8">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        Email
                    </label>
                    <input wire:model="email"
                        class="shadow bg-gray-200 text-primary placeholder:text-gray-500 appearance-none border rounded-lg w-full py-4 px-3 leading-tight focus:outline-none focus:shadow-outline"
                        id="email" type="email" placeholder="Email">
                    @error('email')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex  justify-center w-full">
                    <x-button label='Send Reset Link' class="btn btn-primary w-full" />
                </div>

            </form>
            <div>


                <div class="flex flex-col gap-2 items-center py-10">
                    <p class="text-center text-gray-400">Don't have an account? <a href="{{ route('register') }}"
                            class="text-secondary hover:underline">Register</a></p>
                    <p>
                        <a href="{{ route('login') }}" class="text-secondary hover:underline">Login</a>
                    </p>

                </div>
            </div>
        </div>
    </div>
