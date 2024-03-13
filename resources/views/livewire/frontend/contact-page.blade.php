<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="bg-neutral">
        <div class="container mx-auto px-4 py-16 lg:py-24">
            <h3 class="font-bold text-2xl md:text-3xl text-primary py-5 mb-5">
                {{ __('contact-us') }}
            </h3>
            <div class="flex flex-wrap gap-3 mb-5">

                {{-- contact form  --}}
                <div class="w-full md:w-1/2">
                    <form wire:submit.prevent="submitForm">
                        @csrf
                        <div class="flex flex-wrap gap-5">
                            <div class="w-full md:w-1/2">
                                <input wire:model="name" type="text" label="{{ __('name') }}" class="w-full py-2 px-3 rounded-md" placeholder="{{__('your-name')}}" />
                            </div>
                            <div class="w-full md:w-1/2">
                                <input wire:model="email" type="email" label="{{ __('email') }}"  class="w-full py-2 px-3 rounded-md" placeholder="{{__('email')}}" />
                            </div>
                            <div class="w-full">
                                <input wire:model="subject" type="text" label="{{ __('subject') }}" class="w-full py-2 px-3 rounded-md" placeholder="{{__('subject')}}"  />
                            </div>
                            <div class="w-full">
                                <textarea wire:model="message" label="{{ __('message') }}"  class="w-full py-2 px-3 rounded-md" cols="5" ></textarea>
                            </div>
                            <div class="w-full">
                                <button>{{ __('send') }}</button>
                            </div>
                        </div>
                    </form>
                {{-- contact form  --}}
             
            </div>
        </div>
    </div>
</div>
