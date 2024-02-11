<div>
    @if ($unreadCount)
        <div class="absolute top-0 right-0 bg-red-500 text-white rounded-full w-5 h-5 flex items-center justify-center">
            <p class="text-xs">{{ $unreadCount }}</p>
        </div>
    @endif
</div>
