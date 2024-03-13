@props(['url'])
<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
                <img src="{{ asset('page_images/cbs_logo.png') }}" class="logo" alt="{{ __('chitwanbuyandsell') }}">
            @else
                {{ $slot }}
            @endif
        </a>
    </td>
</tr>
