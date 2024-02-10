<div>
    {{-- search bar --}}
    <div class="hidden md:flex items-center gap-2">
        <input wire:model.live="searchTerm" type="text" id="SearchTerm"
            class="px-5 py-3 border border-secondary rounded-md bg-secondary w-[40vw] placeholder-white focus:outline-none text-white"
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
    <div class="hidden md:flex md:flex-col absolute bg-white transition-opacity w-[40vw]">

        @if (sizeof($results) > 0)
            @foreach ($results as $item)
                <div class="text-primary text-medium hover:bg-primary hover:text-white cursor-pointer py-2 px-3 w-full">
                    <div class="flex  items-center ">
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
                                    <div class="mr-3 w-12">
                                        <img src="/storage/{{ $adImage->image }}" alt="{{ $item->title }}"
                                            class="object-cover h-12 w-12 rounded-md">
                                    </div>
                                @endforeach
                            @endif
                            <a href="{{ route('ad.show', $item->slug) }}">
                                <p class="text-sm font-thin">
                                    {{ $item->title }}</p>
                            </a>
                            <p class="text-xs mx-5 text-gray-400"> {{ $item->created_at->diffForHumans() }}</p>
                    </div>
                </div>
            @endforeach
        @elseif (strlen($searchTerm) > 2)
            <div class="text-primary hover:text-white text-medium hover:bg-primary cursor-pointer py-5 px-3 w-full">
                <p>No Result Found.</p>
            </div>
        @endif

    </div>


</div>
