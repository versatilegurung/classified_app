<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

    <div class="mt-16 py-10">
        @foreach ($ads as $item)
        {{$item->title}}
            
        @endforeach
    </div>
</div>
