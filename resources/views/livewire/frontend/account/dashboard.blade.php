<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="mt-16 md:py-10">
            <div class="container md:mx-auto px-5 py-10 rounded-xl">
                <div class="grid grid-cols-1 md:grid-cols-9 gap-4">

                    {{-- navigation  --}}
                    <div class="col-span-2">
                        @include('livewire.frontend.account.account-nav')
                    </div>

                    {{-- dashboard content  --}}
                    <div class="col-span-7">
                        <div class="bg-white rounded-xl py-10 px-5 container md:mx-auto h-full">
                            <p>
                                {{__('namaste')}}, {{ auth()->user()->name }}, <br>{{__('welcome-to-dashboard')}}
                            </p>
                        </div>
                    </div>

                </div>
            </div>
    </div>

</div>
