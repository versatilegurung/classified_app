<div>
    {{-- The whole world belongs to you. --}}
    <x-drawer id="my-drawer" title="Categories" class="bg-blue-50" with-close-button separator>
        <div class="flex flex-col gap-3">
            <a href="#" class="text-lg font-bold text-primary">All Categories</a>
            @foreach ($categories as $item)
                <div class="flex justify-between items-center">
                    <a href="#" class="text-lg font-bold text-primary">{{ $item->name }}</a>
                    <span class="text-white bg-primary px-2 py-1 rounded-md font-bold text-sm hover:bg-secondary">
                        {{ $item->ads_count }}</span>
                </div>
            @endforeach
        </div>
    </x-drawer>
</div>
