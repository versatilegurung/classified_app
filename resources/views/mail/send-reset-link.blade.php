<x-mail::message>
# Reset your password

Please click the link below to reset your password.

<x-mail:button :url="route('reset.password', $token)">
    Reset Password
</x-mail:button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>