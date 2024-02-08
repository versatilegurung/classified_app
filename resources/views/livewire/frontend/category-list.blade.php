<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="bg-neutral">
        <div class="container mx-auto px-4 py-10">
            <h3 class="font-bold text-2xl md:text-3xl text-primary py-5 mb-5">
                {{ __('categories') }}
            </h3>
            {{-- <div class="grid grid-cols-3 md:grid-cols-6 py-5 gap-5"> --}}
            <div class="flex flex-wrap gap-3 mb-5">
                @foreach ($categories as $item)
                    <a href="{{ route('ads.category', $item->slug) }}">
                        <div
                            class="bg-secondary hover:bg-primary cursor-pointer px-2 py-1 rounded-md flex gap-3 justify-between">
                            {{-- <div class="flex gap-3 items-center align-self-center text-white"> --}}
                                <div class="grid grid-cols-2 lg:grid-cols-8 items-center text-white">
                                {{-- category icon  --}}
                               <div class="col-span-2 flex gap-2 md:col-span-8">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                                    <path d="M6 6v4h4V6H6Z" />
                                    <path fill-rule="evenodd" d="M5.75 1a.75.75 0 0 0-.75.75V3a2 2 0 0 0-2 2H1.75a.75.75 0 0 0 0 1.5H3v.75H1.75a.75.75 0 0 0 0 1.5H3v.75H1.75a.75.75 0 0 0 0 1.5H3a2 2 0 0 0 2 2v1.25a.75.75 0 0 0 1.5 0V13h.75v1.25a.75.75 0 0 0 1.5 0V13h.75v1.25a.75.75 0 0 0 1.5 0V13a2 2 0 0 0 2-2h1.25a.75.75 0 0 0 0-1.5H13v-.75h1.25a.75.75 0 0 0 0-1.5H13V6.5h1.25a.75.75 0 0 0 0-1.5H13a2 2 0 0 0-2-2V1.75a.75.75 0 0 0-1.5 0V3h-.75V1.75a.75.75 0 0 0-1.5 0V3H6.5V1.75A.75.75 0 0 0 5.75 1ZM11 4.5a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-.5.5H5a.5.5 0 0 1-.5-.5V5a.5.5 0 0 1 .5-.5h6Z" clip-rule="evenodd" />
                                  </svg>
                                  
                                <h4 class="font-normal text-sm leading-tight tracking-tight">{{ $item->name }}</h4>
                               </div>

                            </div>
                            <p class="font-bold text-xs text-primary bg-white px-2 py-1 rounded-sm"> {{ $item->ads_count }}</p>
                        </div>

                    </a>
                @endforeach

            </div>
        </div>
    </div>
</div>
