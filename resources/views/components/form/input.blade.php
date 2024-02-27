@props(['name', 'type' => 'text', 'placeholder', 'value' => '', 'class' => ''])

@php
    $dotNotation = str_replace(['[', ']'], ['.', ''], $name);
@endphp

<div>
        <input name="{{ $name }}" type="{{ $type }}" id="{{ $name }}" placeholder="{{ $placeholder }}" value="{{ $value }}"
        @class([
                'bg-[#f6f8fa] rounded-xl w-full py-3 px-4 placeholder:text-[#959da5] focus:outline-none',
                'border border-red-500 focus:border-red-500 focus:ring-red-500' => $errors->has($dotNotation),
                'focus:border-sky-500 focus:ring-1 focus:ring-sky-500' => !$errors->has($dotNotation),
                $class
            ])
         />

        <x-form.error name="{{$name}}"  />

</div>
        

