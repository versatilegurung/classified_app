<x-mail::message>
# Password updated

Your password has been updated successfully.

<x-mail::button :url="route('dashboard')">
    Go to my dashboard
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
