<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="container mx-auto py-0 md:py-16">
        <div class="w-full shadow-lg md:w-4/5 lg:w-3/5 mx-auto bg-white px-10 py-16 md:py-5 mt-16 md:mt-16 rounded-xl">
            <h3 class="font-bold text-2xl md:text-3xl text-primary pt-5">
                {{ __('contact-us') }}
            </h3>
            <p class="py-2 text-gray-400">
                {{ __('contact-us-desc') }}
            </p>
            @if (!($message = Session::get('message')))
                <x-form wire:submit="sendMessage" class="w-full flex gap-5">
                    <x-honeypot />
                    <x-errors title="Oops!" description="Please, fix them." icon="o-face-frown" />

                    <x-input name="myField" type="hidden" />
                    <x-input label="{{ __('name') }}" wire:model="name" placeholder="{{ __('your-name') }}" />
                    <x-input label="E-mail" wire:model="email" placeholder="{{ __('email') }}" />
                    <span class="font-bold text-[11pt] tracking-wide mb-[-10px] ">Message</span>
                    <x-textarea wire:model="message" placeholder="Message ..." hint="Max 1000 chars" rows="5"
                        inline />
                    <x-slot:actions>
                        <x-button label="{{ __('send-message') }}" class="btn-primary text-white" type="submit"
                            spinner="save2" />
                    </x-slot:actions>
                </x-form>
            @else
                <div class="rounded-md text-green-600">
                    {{ $message }}
                </div>
                <div class="py-5">
                    <a href="{{ route('home') }}" class="underline">Back to Homepage</a>
                </div>
            @endif

        </div>
    </div>
</div>
