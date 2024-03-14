{{-- sponsored ads --}}
<?php
    $location = 'bottom';
    $ads = \App\Models\Advertisement::where('status', true)->where('position', $location)->whereDate('start_date', '<=', now())->whereDate('end_date', '>=', now())->limit(1)->get();
    ?>
@if ($ads->count() > 0)
    <div class="p-10">
        @foreach ($ads as $item)
            <div class="container mx-auto max-w-[900px] px-5">
                <a href="{{ $item->url }}" target="_blank">
                    <img src="{{ asset( $item->image) }}" alt="{{ $item->title }}" class="w-full h-auto">
                </a>
            </div>
        @endforeach
    </div>
    
@endif
{{-- sponsored ads --}}