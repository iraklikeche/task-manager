@props(['name'])
@php
    $dotNotation = str_replace(['[', ']'], ['.', ''], $name);
@endphp
@error($dotNotation)
<div class="mt-2">
    <p class="text-red-500 text-xs">{{$message}}</p>
</div>
@enderror

