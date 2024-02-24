@props(['name', 'type' => 'text', 'placeholder','value' => ''])
<div>
        <input name="{{ $name }}" type="{{ $type }}" id="{{ $name }}" placeholder="{{ $placeholder }}" value="{{ $value }}"
                class="bg-[#f6f8fa] rounded-xl w-full py-3 px-4 placeholder:text-[#959da5]
                focus:outline-none
                {{ $errors->has($name) ? ' border border-red-500 focus:border-red-500 focus:ring-red-500' : 'focus:border-sky-500 focus:ring-1 focus:ring-sky-500' }}"
                "  
         />

        <x-form.error name="{{$name}}" />
</div>
        
