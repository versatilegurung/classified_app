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
                        <div class="overflow-x-auto font-normal">
                            <table class="table-auto w-full">
                                <thead class="bg-gray-900 text-white">
                                    <tr>
                                        <th class="font-medium py-3 text-left px-4">{{ __('to') }}</th>
                                        <th class="font-medium py-3 text-left px-4">{{ __('ad-title') }}</th>
                                        <th class="font-medium py-3 text-left px-4">{{ __('date-time') }}</th>
                                        <th class="font-medium py-3 px-4">{{ __('action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($messages as $message)
                                        <tr class="{{ $loop->iteration % 2 == 0 ? 'bg-gray-100' : 'bg-gray-200' }}">
                                            <td class="py-5 px-4 text-left font-thin text-normal">
                                                {{ $message->recipient->name }}</td>
                                            <td class="py-5 px-4 text-left">
                                                <a href="{{ route('account.view-message', $message->id) }}"
                                                    class="hover:underline text-normal font-thin">{{ $message->ad->title }}</a>
                                            </td>
                                            <td class="py-5 px-4 text-left font-thin">{{ $message->created_at }}</td>
                                            </td>
                                            <td class="py-5 px-4 text-left">
                                                <div class="flex gap-2 items-center justify-center">
                                                    <a href="{{ route('account.view-message', $message->id) }}"
                                                        class="hover:underline cursor-pointer py-3 px-2 text-sm text-primary"
                                                        title="{{ __('view') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                        </svg>
                                                    </a>
                                                    <a href="{{ route('account.view-message', $message->id) }}"
                                                        class="hover:underline text-red-700"
                                                        title="{{ __('delete') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>

                        <div class="py-5">
                            {{-- pagination --}}
                            {{ $messages->links() }}
                        </div>



                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
