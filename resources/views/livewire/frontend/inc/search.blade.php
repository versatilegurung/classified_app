<div>
    {{-- search bar --}}
    <div class="hidden md:flex items-center gap-2">
        <input wire:model.live="searchTerm" type="text"
            class="px-3 py-3 border border-secondary rounded-md bg-secondary w-[40vw] placeholder-white focus:outline-none text-white"
            placeholder="{{ __('search') }}">

        {{-- <x-button type="submit" class="text-gray-200 border-none focus:outline-none bg-gray-900 rounded-md">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="8" />
                <line x1="21" y1="21" x2="16.65" y2="16.65" />
            </svg>
        </x-button> --}}

    </div>
    {{-- search bar --}}

    {{-- search result --}}
    <div class="absolute bg-primary/70 transition-opacity w-[40vw]">
        @if (sizeof($results) > 0)
            @foreach ($results as $item)
                <div
                    class="text-white text-medium flex hover:bg-primary justify-start items-center cursor-pointer py-2 px-3 w-full">
                    @php
                        $adImages = App\Models\AdImage::where('ad_id', $item->id)
                            ->limit(1)
                            ->get();
                    @endphp
                    <a href="{{ route('ad.show', $item->slug) }}">
                        @if ($adImages->isEmpty())
                            <div class="w-[150px] md:w-[180px]">
                                <img src="{{ asset('storage/page_images/no-image-placeholder.png') }}"
                                    alt="{{ $item->title }}" class="object-cover w-8 h-8 rounded-md">
                            </div>
                        @else
                            @foreach ($adImages as $adImage)
                                <div class="w-[150px] md:w-[180px]">
                                    <img src="/storage/{{ $adImage->image }}" alt="{{ $item->title }}"
                                        class="object-cover h-8 w-8 rounded-md">
                                </div>
                            @endforeach
                        @endif
                        <p><a href="{{ route('ad.show', $item->slug) }}">
                                {{ $item->title }}</a></p>
                        <p class="text-sm mx-5 text-gray-500"> {{ $item->created_at->diffForHumans() }}</p>

                </div>
            @endforeach
        @endif
    </div>


</div>
