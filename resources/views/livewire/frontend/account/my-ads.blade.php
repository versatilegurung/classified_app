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
                    <div class="bg-white rounded-xl py-10 px-5 md:px-10 container md:mx-auto h-full">

                        <h2 class="font-normal text-2xl mb-5 pb-5"> {{ __('your-ads') }}</h2>

                        <div>
                            {{-- show session message --}}
                            @if (session()->has('message'))
                                <div class="text-black text-md py-10">
                                    {{ session('message') }}
                                </div>
                            @endif

                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            @if ($myads->isEmpty())
                                <div class="text-gray-500text-lg py-10">
                                    {{ __('no-ads-found') }}
                                </div>
                            @endif
                            @foreach ($myads as $item)
                                <div
                                    class="grid grid-cols-2 md:grid-cols-4 gap-3 justify-between items-center py-4 bg-gray-100 px-4 rounded-lg">
                                    <div>
                                        @php
                                            $adImages = App\Models\AdImage::where('ad_id', $item->id)
                                                ->limit(1)
                                                ->get();
                                        @endphp
                                        @if ($adImages->isEmpty())
                                            <img src="{{ asset('storage/page_images/no-image-placeholder.png') }}"
                                                alt="{{ $item->title }}"
                                                class="object-cover h-[80px] w-full rounded-md">
                                        @else
                                            @foreach ($adImages as $adImage)
                                                <img src="/storage/{{ $adImage->image }}" alt="{{ $item->title }}"
                                                    class="object-cover h-[80px] w-full rounded-md">
                                            @endforeach
                                        @endif
                                    </div>
                                    <div class="col-span-2 gap-1 flex-col leading-tight">
                                        <a href="{{ route('ad.show', $item->slug) }}"
                                            class="hover:underline text-sm tracking-tight">
                                            {{ Str::limit($item->title, 30) }}
                                        </a>
                                        @if ($item->published_at)
                                            <p class="text-xs text-green-700">Published:
                                                {{ $item->publised_at->diffForHumans() }}</p>
                                        @endif
                                        <p class="text-green-700 text-sm font-bold py-2">{{ __('ad.currency') }}
                                            {{ $item->price }}
                                        </p>
                                    </div>
                                    <div class="col-span-2 md:col-span-1">
                                        {{-- check if ad is published or not --}}
                                        @if ($item->published || $item->is_sold)
                                            <div class="flex gap-2 md:flex-col items-center">
                                                {{-- is_sold --}}
                                                @livewire('frontend.account.mark-as-sold', ['adId' => $item->id])
                                            </div>
                                        @elseif(!$item->published && !$item->is_sold)
                                            <p class="text-sm text-center text-orange-500 leading-tight cursor-pointer"
                                                title="Administrator is reviewing your ad.">Under Review
                                            </p>
                                        @endif
                                    </div>

                                </div>
                            @endforeach
                        </div>
                    </div>
                    {{-- {{ $myads->links() }} --}}


                </div>
            </div>
        </div>

    </div>
