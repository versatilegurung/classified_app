<div>
    
    <div class="container mx-auto py-0 md:py-10 mt-16 ">
        <div class="w-full bg-white p-8 md:mt-16 rounded-xl">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-9 gap-7">
                
                    <div class="col-span-1 md:col-span-1 lg:col-span-2 items">                       
                        {{-- get photo gallery with ad id --}}
                        @livewire('frontend.ad.photo-gallery', ['ad_id' => $ad->id])  
                        <div class="py-2">
                            <hr class="mb-3">
                            <span class="text-sm text-gray-500">{{__('posted.at')}} {{ $ad->created_at->diffForHumans() }}</span>
                            <div class="flex justify-between py-5">
                                <div>
                                    <p>
                                        {{ $ad->user->name}}
                                    </p>
                                </div>
                                <div>
                                    <p class="font-bold text-lg">{{__('ad.currency')}}. {{$ad->price}}</p>
                                </div>
                            </div>
                            
                        </div>                          
                    </div>
                    
                
                <div class="col-span-1 md:col-span-1 lg:col-span-5">
                    <h3 class="font-bold text-2xl md:text-3xl text-primary mb-5">{{ $ad->title }} <span class="font-normal text-sm text-gray-400">({{$ad->category->name}})</span> </h3>
                    <p class="text-secondary">{{ $ad->description }}</p>
                    <div class="flex justify-between items-center py-2 md:py-3 gap-5">
                        <p class="text-sm">
                            <span class=" text-gray-500">Location: {{ $ad->location}} </span>
                        </p>
                        <p class="text-sm">
                            
                    </div>
                </div>

                <div class="col-span-1 md:col-span-2 bg-primary">
                    <p>Similar Ads</p>
                </div>
            </div>
        </div>
    </div>
</div>
