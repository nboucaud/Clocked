@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if(strtolower(trim($slot)) === 'infogito')
    <img src="{{ asset('favicons/brand_logo_infogito_1.png') }}" class="logo" alt="Infogito Logo">
@else
    {{ $slot }}
@endif
</a>
</td>
</tr>
