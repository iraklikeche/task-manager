@props(['name', 'type' => 'text', 'placeholder', 'value' => '', 'class' => '', 'readonly' => false,'applyMinHeight' => false])
@php
    $dotNotation = str_replace(['[', ']'], ['.', ''], $name);

@endphp

<div class="relative" x-data="{ inputValue: '{{ $type === 'email' ? old('email', $value) : $value }}' }">
        <input 
            x-model="inputValue"
            {{$attributes}}
            name="{{ $name }}" 
            type="{{ $type }}" 
            id="{{ $name }}" 
            value="{{ old($name, $value) }}"
            @class([
                'bg-[#f6f8fa] rounded-xl w-full py-4 px-4 placeholder:text-[#959da5] focus:outline-none','peer',
                'border border-red-500 focus:border-red-500 focus:ring-red-500' => $errors->has($dotNotation),
                'focus:border-sky-500 focus:ring-1 focus:ring-sky-500' => !$errors->has($dotNotation),
                $class
            ])
            {{ $readonly ? 'readonly' : '' }}
        />

        <label 
            for="{{$name}}"  
            class="absolute left-3 top-4 text-gray-600 cursor-text peer-focus:text-xs   peer-focus:-top-4 peer-focus:text-gray-600 transition-all"
            :class="{ '-top-4 text-xs': inputValue, 'top-4': !inputValue }" 
        >
            {{ __($placeholder) }}
        </label>

    <div class="mt-2 min-h-5">
        <x-form.error name="{{ $name }}" />
    </div>

</div>
    