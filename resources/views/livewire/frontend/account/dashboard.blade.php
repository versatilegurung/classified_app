<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="mt-16 md:py-10">
            <div class="container md:mx-auto bg-white px-5 py-10 rounded-xl">
                <div class="flex gap-5">

                    {{-- navigation  --}}
                    @include('livewire.frontend.account.account-nav')

                    {{-- dashboard content  --}}
                    <div class="w-full md:w-3/4 text-sm">
                        <p>
                            {{__('namaste')}}, {{ auth()->user()->name }}, <br>{{__('welcome-to-dashboard')}}
                        </p>
                    </div>

                </div>
            </div>
    </div>

</div>
