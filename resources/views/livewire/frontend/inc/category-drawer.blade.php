<div>
    {{-- The whole world belongs to you. --}}
    <x-drawer id="my-drawer" title="Categories" class="bg-blue-50" with-close-button separator>
        <div class="flex flex-col gap-3">
            @foreach ($categories as $item)
                <div class="flex justify-start items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                        <path d="M6 6v4h4V6H6Z" />
                        <path fill-rule="evenodd" d="M5.75 1a.75.75 0 0 0-.75.75V3a2 2 0 0 0-2 2H1.75a.75.75 0 0 0 0 1.5H3v.75H1.75a.75.75 0 0 0 0 1.5H3v.75H1.75a.75.75 0 0 0 0 1.5H3a2 2 0 0 0 2 2v1.25a.75.75 0 0 0 1.5 0V13h.75v1.25a.75.75 0 0 0 1.5 0V13h.75v1.25a.75.75 0 0 0 1.5 0V13a2 2 0 0 0 2-2h1.25a.75.75 0 0 0 0-1.5H13v-.75h1.25a.75.75 0 0 0 0-1.5H13V6.5h1.25a.75.75 0 0 0 0-1.5H13a2 2 0 0 0-2-2V1.75a.75.75 0 0 0-1.5 0V3h-.75V1.75a.75.75 0 0 0-1.5 0V3H6.5V1.75A.75.75 0 0 0 5.75 1ZM11 4.5a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-.5.5H5a.5.5 0 0 1-.5-.5V5a.5.5 0 0 1 .5-.5h6Z" clip-rule="evenodd" />
                      </svg>
                      
                    <a href="{{route('ads.category', $item->slug)}}" class="text-sm font-normal text-primary">{{ $item->name }}</a>
                    <span class="text-white bg-primary px-2 py-1 rounded-md font-bold text-sm hover:bg-secondary">
                        {{ $item->ads_count }}</span>
                </div>
            @endforeach
        </div>
    </x-drawer>

    
</div>
