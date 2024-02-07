<div>
    {{-- dashboard nav  --}}

        <div class="w-hidden md:w-1/4">
            <div class="flex flex-col gap-4">
                <div><a href="{{ route('dashboard')}}" class="hover:underline hover:text-secondary">Dashboard</a></div>
                <div><a href="" class="hover:underline hover:text-secondary">Profile</a></div>
                <div><a href="" class="hover:underline hover:text-secondary">Post Ad</a></div>
                <div><a href="" class="hover:underline hover:text-secondary">Listed Ads</a></div>
                <div><a href="" class="hover:underline hover:text-secondary">Message</a></div>
                <div><a href="" class="hover:underline hover:text-secondary">Settings</a></div>
                <div><a href="{{ route('logout')}}" class="hover:underline hover:text-secondary">Logout</a></div>

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