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
                        <h2 class="font-normal text-2xl mb-5 pb-5"> {{ __('sent-message') }}</h2>

                        {{-- sent messages on grid-cols  --}}
                        <div class="overflow-x-auto">
                            <table class="table-auto w-full">
                                <thead class="bg-gray-700 text-white">
                                    <tr>
                                        <th class="px-4 py-2">{{ __('to') }}</th>
                                        <th class="px-4 py-2">{{ __('ad-title') }}</th>
                                        <th class="px-4 py-2">{{ __('date') }}</th>
                                        <th class="px-4 py-2">{{ __('action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr></tr>
                                    <tr></tr>
                                    <tr></tr>
                                    <tr></tr>
                                </tbody>
                            </table>
                        </div>



                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
