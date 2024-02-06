<div>
    {{-- Stop trying to control. --}}
    <div>

        <button wire:click="toggleLanguage" class="cursor-pointer focus:outline-none">
            {{ $currentLanguage === 'en' ? 'नेपाली' : 'English' }}
        </button>
    </div>
</div>
