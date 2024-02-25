@props(['name',  'placeholder','value' => ''])
@php
    $dotNotation = str_replace(['[', ']'], ['.', ''], $name);
@endphp
<div>

        <textarea name="{{ $name }}" id="{{ $name }}" cols="10" rows="3" placeholder="{{ $placeholder }}"
                class="bg-[#f6f8fa] rounded-xl w-full py-3 px-4 
                focus:outline-none
                {{ $errors->has($dotNotation) ? ' border border-red-500 focus:border-red-500 focus:ring-red-500' : 'focus:border-sky-500 focus:ring-1 focus:ring-sky-500' }}"
        >{{$slot ?? old($name)}}
</textarea>
      
    
        <x-form.error name="{{$name}}" />
    </div>
    

