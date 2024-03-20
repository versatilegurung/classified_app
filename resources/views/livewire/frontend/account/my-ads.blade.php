<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="mt-16 md:py-10">
        <div class="container md:mx-auto md:px-5 md:py-10 md:rounded-xl">
            <div class="grid grid-cols-1 md:grid-cols-9 gap-4">

                {{-- navigation  --}}
                <div class="col-span-2 hidden md:block">

                    @include('livewire.frontend.account.account-nav')
                </div>

                {{-- dashboard content  --}}
                <div class="col-span-7">
                    <div class="bg-white rounded-xl py-10 px-10 container md:mx-auto h-full">
                        <h2 class="font-normal text-2xl mb-5 pb-5"> {{ __('your-ads') }}</h2>

                        {{-- show session message --}}
                        @if (session()->has('message'))
                            <div class="text-green-800 text-md">
                                {{ session('message') }}
                            </div>
                        @endif

                        @if ($myads->isEmpty())
                            <div class="text-secondary text-lg">
                                {{ __('no-ads-found') }}
                            </div>
                        @endif

                        {{-- list all ads by user  --}}
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-3 justify-between items-center">

                            @foreach ($myads as $item)
                                <div class="flex gap-2 mb-4">
                                    @php
                                        $adImages = App\Models\AdImage::where('ad_id', $item->id)
                                            ->limit(1)
                                            ->get();
                                    @endphp
                                    @if ($adImages->isEmpty())
                                        <img src="{{ asset('page_images/no-image-placeholder.png') }}"
                                            alt="{{ $item->title }}"
                                            class="object-cover h-[100px] w-[100px] rounded-md">
                                    @else
                                        @foreach ($adImages as $adImage)
                                            <img src="{{ asset($adImage->image) }}" alt="{{ $item->title }}"
                                                class="object-cover h-[100px] w-[100px] rounded-md">
                                        @endforeach
                                    @endif

                                    <div>
                                        <a href="{{ route('ad.show', $item->slug) }}"
                                            class="hover:underline text-sm tracking-tight">
                                            {{ Str::limit($item->title, 30) }}
                                        </a>
                                        <p class="text-green-700 text-sm font-bold">{{ __('ad.currency') }}
                                            {{ $item->price }}
                                        </p>
                                        <p>
                                            {{-- if publised_at is empty --}}
                                            @if ($item->published == null)
                                                <span class="text-red-500 text-xs">{{ __('under-review') }}</span>
                                            @else
                                                <button
                                                    class="text-xs bg-primary hover:bg-warning hover:text-black tracking-tighter text-white rounded-lg px-3 py-2"
                                                    wire:click="markAsSold">Mark as
                                                    Sold</button>
                                            @endif
                                        </p>
                                        
                                        <div class="flex gap-2 py-1">
                                            <p class="text-xs text-gray-500 underline hover:no-underline cursor-pointer">
                                                <a href="{{route('edit.ad', $item->id)}}">Edit Ad</a>
                                            </p> 
                                            <p class="text-xs text-gray-400">{{ $item->created_at->diffForHumans() }}
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div> {{-- cols-col-span-7 close --}}
                </div>
            </div>
        </div>
    </div>
</div>
