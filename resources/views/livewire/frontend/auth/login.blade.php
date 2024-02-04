    <div>
        <div class="flex flex-cols h-[100vh] w-full md:w-1/3 mx-auto items-center justify-center px-10">
            <div class="bg-white shadow-lg rounded-2xl p-10 w-full">
                <h2 class="font-black text-primary text-2xl text-center">Login</h2>

                <form wire:submit.prevent="login">
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
                    <div class="mb-8">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                            Password
                        </label>
                        <input wire:model="password"
                            class="shadow  bg-gray-200 text-primary placeholder:text-gray-500 appearance-none border border-red rounded-lg w-full py-4 px-3 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                            id="password" type="password" placeholder="Password">
                        @error('password')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex  justify-center w-full">

                        <x-button label='Sign In' class="btn btn-primary w-full" />
                    </div>
                    <div>
                        <p class="text-center my-5">Or</p>
                        <div class="flex justify-center items-center gap-5">
                            <a href="#"
                                class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Google</a>
                            <a href="#"
                                class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Facebook</a>
                        </div>

                        <div class="flex flex-col gap-2 items-center py-10">
                            <p class="text-center">Don't have an account? <a href="{{ route('register') }}"
                                    class="text-secondary hover:underline">Register</a></p>
                            <p>
                                <a href="{{ route('forgot-password') }}" class="text-secondary hover:underline">Forgot
                                    Password?</a>
                            </p>

                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
