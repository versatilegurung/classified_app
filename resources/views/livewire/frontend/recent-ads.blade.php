<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="container mx-auto py-0 md:py-10">
        <div class="w-full bg-white px-4 py-5 md:mt-16">
            <h3 class="font-bold text-2xl md:text-3xl text-primary mb-5 py-5">
                {{ __('recent.ads') }}
            </h3>
            <div id="recent-ads" class="grid grid-cols-1 md:grid-cols-2 gap-5">
                {{-- recent ads list  --}}
                @foreach ($ads as $item)
                    <div class="flex gap-4 items-center">
                        <div class="w-[160px0 bg-secondary">
                            <img src="./storage/ad_images/{{ $adThumbImage }}" alt="{{ $item->title }}"
                                class="object-cover h-[160px] w-[160px] rounded-md">
                        </div>

                        <div class="flex flex-col w-full">
                            <h3 class="font-medium text-md text-black py-2 leading-tight">
                                {{ Str::limit($item->title, 30, '...') }}
                            </h3>
                            <p class="text-xs leading-tight text-gray-500">
                                {{ Str::limit($item->description, 40) }}</p>

                            {{-- location  --}}
                            <div class="flex gap-2 py-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.2" stroke="currentColor" class="w-4 h-4 text-green-900">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                </svg>

                                <a href="{{ route('ad.show', $item->slug) }}">
                                    <p class="text-xs text-gray-500 hover:underline">{{ $item->location }}
                                    </p>
                                </a>
                            </div>

                            {{-- user  --}}
                            <div class="flex gap-1 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.2" stroke="currentColor" class="w-4 h-4 text-black">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                                <p class="text-xs text-gray-500 hover:underline">{{ $item->user->name }}</p>

                            </div>

                            <div class="grid grid-cols-2 gap-2 justify-between items-center py-2">
                                <span class="text-primary font-bold  text-sm">रु. {{ $item->price }}</span>
                                <span>
                                    @if ($item->negotiable)
                                        <span class="text-red-800 text-[10px] font-normal">Negotiable</span>
                                    @endif
                                </span>

                                @if ($item->condition == 'new')
                                    <span class="text-green-600 text-xs">New</span>
                                @else
                                    <span class=" text-secondary text-xs">Used</span>
                                @endif

                                <span class="text-gray-800 text-xs">
                                    {{ $item->created_at->diffForHumans() }}</span>
                            </div>



                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
