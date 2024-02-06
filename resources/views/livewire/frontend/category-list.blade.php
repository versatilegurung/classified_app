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
                    <a href="{{ $item->id }}">
                        <div
                            class="bg-secondary hover:bg-primary cursor-pointer p-3 rounded-md flex gap-3 justify-between">
                            <div class="flex gap-3 items-center align-self-center text-white">
                                {{-- category icon  --}}
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 0 0 2.25-2.25V6.75a2.25 2.25 0 0 0-2.25-2.25H6.75A2.25 2.25 0 0 0 4.5 6.75v10.5a2.25 2.25 0 0 0 2.25 2.25Zm.75-12h9v9h-9v-9Z" />
                                </svg>
                                <h4 class="font-bold leading-tight tracking-tight">{{ $item->name }}</h4>

                            </div>
                            <p class="font-bold text-primary bg-white px-2 py-1 rounded-md"> {{ $item->ads_count }}</p>
                        </div>

                    </a>
                @endforeach

            </div>
        </div>
    </div>
</div>
