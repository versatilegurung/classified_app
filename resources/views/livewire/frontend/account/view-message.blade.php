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
                        <h2 class="font-normal text-2xl mb-5 pb-5"> {{ __('view-message') }}</h2>

                        {{-- sent messages on grid-cols  --}}
                        <div class="overflow-x-auto">

                            {{-- go back to inbox  --}}

                            <a href="{{ route('account.message') }}"
                                class="hover:underline flex gap-2">{{ __('back-to-inbox') }}
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                                </svg>
                            </a>


                            <div class="grid grid-cols-1 py-4 gap-4 w-full">

                                <div class="flex gap-2 w-full">
                                    <p class="bg-gray-100 w-2/12 p-3">{{ __('sent') }}:</p>
                                    <p class="bg-gray-100 w-6/12 p-3"> {{ $view_message->created_at }}</p>

                                </div>
                                <div class="flex gap-2 w-full">
                                    <p class="bg-gray-100 w-2/12 p-3">{{ __('from') }}:</p>
                                    <p class="bg-gray-100 w-6/12 p-3"> {{ $view_message->sender->name }}</p>

                                </div>
                                <div class="flex gap-2 w-full">
                                    <p class="bg-gray-100 w-2/12 p-3">{{ __('to') }}:</p>
                                    <p class="bg-gray-100 w-6/12 p-3"> {{ $view_message->recipient->name }}</p>
                                </div>
                                <div class="flex gap-2 w-full">
                                    <p class="bg-gray-100 w-2/12 p-3">{{ __('ad') }}:</p>
                                    <p class="bg-gray-100 w-6/12 p-3"> {{ $view_message->ad->title }}</p>

                                </div>

                                <div class="flex gap-2 w-full">
                                    <p class="bg-gray-100 w-2/12 p-3">{{ __('message') }}:</p>
                                    <p class="bg-gray-100 w-10/12 p-3"> {{ $view_message->message }}</p>

                                </div>
                            </div>

                        </div>



                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
