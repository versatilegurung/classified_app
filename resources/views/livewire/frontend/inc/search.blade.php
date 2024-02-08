<div>
    {{-- search bar--}}
    <div class="hidden md:flex items-center gap-2">
        <input wire:model="query" wire:change="updatedSearchTerm" type="text"
            class="px-3 py-3 border border-secondary rounded-md bg-secondary w-[40vw] placeholder-white focus:outline-none text-white"
            placeholder="{{ __('search') }}">

        <x-button type="submit" class="text-gray-200 border-none focus:outline-none bg-gray-900 rounded-md">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="8" />
                <line x1="21" y1="21" x2="16.65" y2="16.65" />
            </svg>
        </x-button>

    </div>
    {{-- search bar--}}

    {{-- {{ search result}} --}}
{{-- 
            @foreach($results as $result)
            <li>{{ $result->title }}</li>
        @endforeach --}}


</div>
