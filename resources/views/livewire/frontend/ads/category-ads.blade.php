<div>
    <div class="mt-16 py-12">
        <div class="container mx-auto bg-white rounded-2xl px-10 py-10">
            <h2 class="text-xl font-bold text-primary mb-3">
                Category: <span class="text-secondary">{{ $category->name }}</span>
            </h2>
            <hr>
            <div class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-6 py-10 gap-5">
                @foreach ($ads as $item)
                    <div>
                        @php
                            $adImages = App\Models\AdImage::where('ad_id', $item->id)
                                ->limit(1)
                                ->get();
                        @endphp
                        @if ($adImages->isEmpty())
                            <div class="bg-gray-200">
                                <img src="{{ asset('storage/page_images/no-image-placeholder.png') }}"
                                    alt="{{ $item->title }}" class="object-cover rounded-md">
                            </div>
                        @else
                            @foreach ($adImages as $adImage)
                                <div class="bg-gray-200">
                                <a href="{{ route('ad.show', $item->slug)}}">

                                    <img src="/storage/{{ $adImage->image }}" alt="{{ $item->title }}"
                                        class="object-cover rounded-md">
                                </a>
                                </div>
                            @endforeach
                        @endif
                        <div>
                            <h2 class="text-sm font-bold py-2 leading-tight">
                                <a href="{{ route('ad.show', $item->slug)}}">
                                    {{ Str::limit($item->title, 30) }}
                                </a>
                            </h2>
                            <p class="font-thin text-sm leading-tight">{{ Str::limit($item->description, 40) }}</p>
                            <p class="font-bold">{{ __('ad.currency') }}. {{ $item->price }}</p>

                        </div>
                    </div>
                @endforeach

            </div>
        </div>


    </div>
</div>
