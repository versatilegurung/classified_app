<x-mail::message>
# Reset your password

Please click the link below to reset your password.

<x-mail::button :url="route('reset.password', $token)">
    Reset Password
</x-mail::button>


Or copy and paste the link below into your browser
    

If you did not request a password reset, no further action is required.

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
