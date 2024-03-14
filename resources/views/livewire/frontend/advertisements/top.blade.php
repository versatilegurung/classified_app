<div class="mt-16 pt-5 md:pt-10">
    <?php
    $location = 'top';

    // Example code to display ads in a Blade view
    $ads = \App\Models\Advertisement::where('position', $location)->whereDate('start_date', '<=', now())->whereDate('end_date', '>=', now())->limit(1)->get();
    ?>

    @foreach ($ads as $item)
        <div class="container mx-auto max-w-[800px] px-5">
            <a href="{{ $item->url }}" target="_blank">
                <img src="{{ asset( $item->image) }}" alt="{{ $item->title }}" class="w-full h-auto">
            </a>
        </div>
        
    @endforeach        
  
    
</div>