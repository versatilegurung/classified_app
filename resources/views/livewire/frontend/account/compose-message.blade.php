<div>
    <div class="flex">
        @if (Auth::check())
            <button wire:click="$toggle('composeBox')"
                class="text-sm cursor-pointer bg-secondary px-3 py-2 text-white rounded-md hover:bg-black hover:text-white w-full text-center"
                title="{{ __('chitwanbuyandsell') }}">{{ __('ad.contact_seller') }}</button>
        @else
            <a href="{{ route('login') }}"
                class="text-sm cursor-pointer bg-secondary px-3 py-2 text-white rounded-md hover:bg-black hover:text-white w-full text-center"
                title="{{ __('chitwanbuyandsell') }}">{{ __('ad.contact_seller') }}</a>
        @endif
    </div>
    <x-modal wire:model="composeBox" title="Send Message" subtitle="To Seller" separator>
        <div>

            <form wire:submit="sendMessage" class="grid grid-cols-1 gap-4">
                <label for="seller-name">{{ __('seller-name') }}</label>
                <input id="seller-name" class="bg-gray-200 text-gray-400 py-3 px-3 rounded-lg w-full"
                    value="{{ $ad->user->name }}" wire:readonly>





                {{-- session message  --}}
                @if (session()->has('message'))
                    <p class="px-2 py-2 text-red-700"> {{ session('message') }}</p>
                @else
                    <label for="message-text">{{ __('message') }}
                        <span class="text-red-600">*</span>
                    </label>
                    <textarea id="message-text" wire:model="message" placeholder="{{ __('message') }}"
                        class="px-3 py-4 border rounded-lg  border-primary" rows="5"></textarea>
                    <div class="flex gap-3 mx-auto">
                        <button @click="$wire.composeBox = false"
                            class="bg-gray-300 p-4 rounded-lg hover:bg-gray-900 hover:text-white"
                            type="submit">{{ __('close') }}</button>

                        <button wire:click="sendMessage"
                            class="btn-primary bg-primary hover:bg-warning px-4 py-4 text-white hover:text-primary cursor-pointer rounded-lg">{{ __('send-message') }}</button>

                    </div>
                @endif
                {{-- session message  --}}


            </form>

        </div>

    </x-modal>
</div>
