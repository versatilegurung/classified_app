<div>
        {{-- main nav  --}}
        <div class="flex justify-between items-center py-3 gap-5">
            <div class="flex items-center gap-3 px-3">
                <label for="my-drawer" class="cursor-pointer">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </label>
                <a href="#" class="text-xl md:text-2xl font-bold text-white">
                    {{ env('APP_NAME') }}
                </a>
            </div>         

            {{-- search bar --}}
            <div class="hidden md:flex items-center gap-3">
                <input type="text" class="px-3 py-2 border border-secondary rounded-xl bg-secondary w-[40vw] placeholder-white focus:outline-none text-white"
                    placeholder="Search">
                <button class="text-gray-200 focus:outline-none bg-secondary p-1 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8" />
                        <line x1="21" y1="21" x2="16.65" y2="16.65" />
                    </svg>
                </button>
            </div>
            

            <nav class="hidden w-full xl:flex md:items-center md:justify-between md:w-auto">
                <ul class="flex items gap-5 font-normal text-sm text-white">
                    <li class="mr-3">
                        <a href="#" class="bg-secondary py-2 px-2 rounded-md hover:bg-white hover:text-primary">+ Post Ad Free</a>
                    </li>
                    <li class="mr-3">
                        <a href="#" class="hover:underline">Login</a>
                    </li>
                    <li class="mr-3">
                        <a href="#" class="hover:underline">Register</a>
                    </li>
                    
                </ul>
            </nav>
            
            <div class="flex md:hidden px-4 gap-2 items-center">
                {{-- post ad button  --}}
                <a href="#" class="bg-secondary p-2 text-white text-sm rounded-md hover:bg-white hover:text-primary">+ Post Ad Free</a>
                {{-- post ad button  --}}

                {{-- // account menu  import svg icon--}}
                <label for="my-drawer2">     
                    <x-button icon="o-user" class="btn-ghost text-white" />
                </label> 
                {{-- // account menu--}}
            </div>            
        </div>   
        {{-- main nav  --}}

        {{-- search bar on mobile view --}}
        <div class="flex md:hidden items-center gap-3 bg-white py-5 px-4">
            <input type="text" class="px-4 py-2 border border-secondary rounded-lg bg-secondary w-screen text-white placeholder-white focus:outline-none"
                placeholder="Search">
            <button class="text-gray-200 focus:outline-none bg-secondary p-2 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8" />
                    <line x1="21" y1="21" x2="16.65" y2="16.65" />
                </svg>
            </button>
        </div>
        {{-- search bar on mobile view --}}
        

        {{-- slide sheet menu drawer --}}        

        <x-drawer id="my-drawer" title="Categories" class="bg-blue-50" with-close-button separator>
            <div class="flex flex-col gap-3">
                <a href="#" class="text-lg font-bold text-primary">All Categories</a>
                <a href="#" class="text-lg font-bold text-primary">Cars</a>
                <a href="#" class="text-lg font-bold text-primary">Mobile Phones</a>
                <a href="#" class="text-lg font-bold text-primary">Electronics</a>
                <a href="#" class="text-lg font-bold text-primary">Bikes</a>
                <a href="#" class="text-lg font-bold text-primary">Furniture</a>
                <a href="#" class="text-lg font-bold text-primary">Jobs</a>
                <a href="#" class="text-lg font-bold text-primary">Services</a>
                <a href="#" class="text-lg font-bold text-primary">Properties</a>
                <a href="#" class="text-lg font-bold text-primary">Animals</a>
                <a href="#" class="text-lg font-bold text-primary">Books, Sports & Hobbies</a>
                <a href="#" class="text-lg font-bold text-primary">Fashion & Beauty</a>
                <a href="#" class="text-lg font-bold text-primary">Kids</a>
                <a href="#" class="text-lg font-bold text-primary">Business, Industrial & Agriculture</a>
            </div>
        </x-drawer>
        
        {{-- slide sheet menu drawer --}}

      
</div>
