<div>
    {{-- dashboard nav  --}}

        <div class="w-hidden">
            <div class="flex flex-col gap-1">
                <div class="bg-gray-100 hover:bg-gray-400 hover:text-white px-2 py-1"><a href="{{ route('dashboard')}}">{{__('dashboard')}}</a></div>
                <div class="bg-gray-100 hover:bg-gray-400 hover:text-white px-2 py-1"><a href="{{route('post.ad')}}">{{__('postad')}}</a></div>
                <div class="bg-gray-100 hover:bg-gray-400 hover:text-white px-2 py-1"><a href="">{{__('listed-ads')}}</a></div>
                <div class="bg-gray-100 hover:bg-gray-400 hover:text-white px-2 py-1"><a href="">{{__('message')}}</a></div>
                <div class="bg-gray-100 hover:bg-gray-400 hover:text-white px-2 py-1"><a href="">{{__('settings')}}</a></div>
                <div class="bg-gray-100 hover:bg-gray-400 hover:text-white px-2 py-1"><a href="{{ route('logout')}}">{{__('logout')}}</a></div>

            </div>
    </div>
</div>