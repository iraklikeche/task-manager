@props(['name'])
@php
    $dotNotation = str_replace(['[', ']'], ['.', ''], $name);
@endphp
@error($dotNotation)
    <p class="text-red-500 text-xs">{{$message}}</p>
@enderror

