<div>
    {{-- google recaptcha v2  --}}
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}" data-action="{{ $action }}"></div>
    
</div>
