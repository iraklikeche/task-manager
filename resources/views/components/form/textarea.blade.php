@props(['name',  'placeholder','value' => ''])
@php
    $dotNotation = str_replace(['[', ']'], ['.', ''], $name);
@endphp
<div class="relative mb-5">

        <textarea name="{{ $name }}" id="{{ $name }}" cols="10" rows="3" required
                class="bg-[#f6f8fa] rounded-xl w-full py-3 px-4 peer
                focus:outline-none
                {{ $errors->has($dotNotation) ? ' border border-red-500 focus:border-red-500 focus:ring-red-500' : 'focus:border-sky-500 focus:ring-1 focus:ring-sky-500' }}"
        >{{$slot ?? old($name)}}
</textarea>
<label for="{{$name}}" class="absolute left-2 top-4 text-gray-600 cursor-text peer-focus:text-xs peer-focus:-top-4 peer-focus:text-gray-600 peer-valid:text-xs peer-valid:-top-4 peer-valid:text-gray-600  transition-all">
        {{$placeholder}}
</label>
      
    
        <x-form.error name="{{$name}}" />
    </div>
    

