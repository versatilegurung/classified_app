<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="container mx-auto py-0 md:py-10">
        <div class="w-full bg-white px-4 py-5 md:mt-16">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div class="col-span-1 md:col-span-1">
                    <div class="flex items">
                        <img src="/storage/ad_images/{{ $ad->images }}" alt="{{ $ad->title }}"
                            class="object-cover h-[300px] w-full rounded-md">
                    </div>
                </div>
                <div class="col-span-1 md:col-span-1">
                    <h3 class="font-bold text-2xl md:text-3xl text-primary mb-5">{{ $ad->title }}</h3>
                    <p class="text-gray-600">{{ $ad->description }}</p>
                    <div class="flex justify-between items-center py-2 md:py-3 gap-5">
                        <p class="text-sm">
                            <span class=" text-gray">Location: </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
