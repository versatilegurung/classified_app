<div>
    {{-- register form --}}
    <div class="flex flex-cols-2 h-[100vh] w-full md:w-2/3 mx-auto items-center justify-center px-10">

        <div class="w-full py-10  bg-white rounded-2xl p-10">
            <h3 class="font-bold text-2xl md:text-3xl text-primary mb-5">Register</h3>
            <form action="" method="post">
                <div class="flex flex-col gap-7">
                    <div class="flex flex-col gap-3">
                        <label for="name" class="text-gray-600">Name</label>
                        <input type="text" name="name" id="name"
                            class="shadow bg-gray-200 text-primary placeholder:text-gray-500 appearance-none border rounded-lg w-full py-4 px-3 leading-tight focus:outline-none focus:shadow-outlin"
                            placeholder="Enter your name">
                    </div>
                    <div class="flex flex-col gap-3">
                        <label for="email" class="text-gray-600">Email</label>
                        <input type="email" name="email" id="email"
                            class="shadow bg-gray-200 text-primary placeholder:text-gray-500 appearance-none border rounded-lg w-full py-4 px-3 leading-tight focus:outline-none focus:shadow-outlin"
                            placeholder="Enter your email">
                    </div>
                    <div class="flex flex-col gap-3">
                        <label for="password" class="text-gray-600">Password</label>
                        <input type="password" name="password" id="password"
                            class="shadow bg-gray-200 text-primary placeholder:text-gray-500 appearance-none border rounded-lg w-full py-4 px-3 leading-tight focus:outline-none focus:shadow-outlin"
                            placeholder="Enter your password">
                    </div>
                    <div class="flex flex-col gap-3">
                        <label for="password_confirmation" class="text-gray-600">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            class="shadow bg-gray-200 text-primary placeholder:text-gray-500 appearance-none border rounded-lg w-full py-4 px-3 leading-tight focus:outline-none focus:shadow-outlin"
                            placeholder="Confirm your password">
                    </div>
                    <div class="flex flex-col gap-3">

                        <x-button label="Register" class="btn btn-primary" />
                    </div>
                    <div>
                        <p class="text-gray-600">Already have an account? <a href="{{ route('login') }}"
                                class="text-primary">Login</a></p>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
