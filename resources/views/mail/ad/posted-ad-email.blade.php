<x-mail::message>
# New Ad posted

Hi Admin,
New Ad is posted, please review it.

Title: {{ $ad->title }}<br>
Description: {{ $ad->description }}<br>
Price: {{__('ad-currency')}}.{{ $ad->price }}<br>
Category: {{ $ad->category->name }}<br>
User: {{ $ad->user->name }}<br>

<x-mail::button :url="route('dashboard')">
    Review Ad
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
