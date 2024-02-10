<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="">
        @if ($is_sold)
            <button disabled class="bg-red-500 text-white text-xs px-2 py-2 rounded-lg ">{{ __('sold') }}</button>
        @else
            <button
                class="text-xs bg-primary hover:bg-warning hover:text-black tracking-tighter text-white rounded-lg px-3 py-2"
                wire:click="markAsSold">Mark as
                Sold</button>
        @endif
    </div>
</div>
