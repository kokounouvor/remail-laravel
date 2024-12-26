@props(['url'])
<tr>
    <td class="header">
        <a href="{{$url}}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
            <img src="https://fintou.com/landing/img/logo/icon.png" class="logo" alt="FINTOU">
            @else
            <img src="https://fintou.com/landing/img/logo/icon.png" class="logo" alt="FINTOU">
            @endif
        </a>
    </td>
</tr>