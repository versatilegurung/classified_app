<div>
    {{-- Do your work, then step back. --}}
    <div class="container mx-auto py-0 md:py-16">
        <div class="w-full shadow-lg md:w-3/5 lg:w-2/5 mx-auto bg-white px-10 py-16 md:py-5 mt-16 md:mt-16 rounded-xl">
            <h3 class="font-bold text-lg text-secondary">{{ __('please-verify-your-email') }}</h3>

            <p class="py-10">{{ __('verify-your-email') }}</p>
            <hr>
            <div class="py-5 flex gap-4 items-center">
                <button class="hover:bg-warning rounded-lg bg-gray-200 px-2 py-2 tracking-tight" id="resend-verification"
                    wire:click="resendVerificationEmail">Resend Verification</button>

            </div>
        </div>
    </div>

</div>
