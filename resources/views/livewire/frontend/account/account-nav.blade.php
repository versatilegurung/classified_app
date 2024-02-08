<div>
    {{-- dashboard nav  --}}

        <div class="w-hidden">
            <div class="flex flex-col gap-1">
                <div class="bg-gray-100 hover:bg-gray-400 hover:text-white px-2 py-1"><a href="{{ route('dashboard')}}">Dashboard</a></div>
                <div class="bg-gray-100 hover:bg-gray-400 hover:text-white px-2 py-1"><a href="">Profile</a></div>
                <div class="bg-gray-100 hover:bg-gray-400 hover:text-white px-2 py-1"><a href="">Post Ad</a></div>
                <div class="bg-gray-100 hover:bg-gray-400 hover:text-white px-2 py-1"><a href="">Listed Ads</a></div>
                <div class="bg-gray-100 hover:bg-gray-400 hover:text-white px-2 py-1"><a href="">Message</a></div>
                <div class="bg-gray-100 hover:bg-gray-400 hover:text-white px-2 py-1"><a href="">Settings</a></div>
                <div class="bg-gray-100 hover:bg-gray-400 hover:text-white px-2 py-1"><a href="{{ route('logout')}}">Logout</a></div>

            </div>
    </div>


     {{-- NAVBAR mobile only --}}
     <x-nav sticky class="lg:hidden">
        <x-slot:brand class="flex gap-2 items-center">
            <x-icon name="o-square-3-stack-3d" class="text-primary" />
            <div>App</div>
        </x-slot:brand>
        <x-slot:actions>
            <label for="main-drawer" class="lg:hidden mr-3">
                <x-icon name="o-bars-3" class="cursor-pointer" />
            </label>
        </x-slot:actions>
    </x-nav>
 
</div>