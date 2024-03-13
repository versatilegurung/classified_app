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

                        <h2 class="font-normal text-2xl mb-5 pb-5"> {{ __('message-inbox') }}</h2>

                        @php
                            $headers = [
                                ['key' => 'ad.title', 'label' => 'Ad Title', 'class' => 'text-black text-[11pt]'],
                                ['key' => 'sender.name', 'label' => 'From', 'class' => 'text-black text-[11pt]'],
                                ['key' => 'created_at', 'label' => 'Date Time', 'class' => 'text-black text-[11pt]'],
                                ['key' => 'action', 'label' => 'Action', 'class' => 'text-black text-[11pt]'],
                            ];
                        @endphp

                        {{-- Notice `with-pagination` --}}
                        <x-table :headers="$headers" :rows="$messages" link="/account/view/{id}" with-pagination>
                            {{-- Special `actions` slot --}}
                            @scope('actions', $message)
                                <x-button icon="o-trash" wire:click="deleteMessage({{ $message->id }})" spinner
                                    class="btn-sm" />
                            @endscope
                        </x-table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
