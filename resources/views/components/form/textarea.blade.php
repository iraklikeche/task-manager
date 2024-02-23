@props(['name', 'type' => 'text', 'placeholder','value' => ''])
<div>
        <textarea name="{{ $name }}" type="{{ $type }}" id="{{ $name }}" cols="10" rows="3" placeholder="{{ $placeholder }}" value="{{ $value }}"
                class="bg-[#f6f8fa] rounded-xl w-full py-3 px-4 
                focus:outline-none
                {{ $errors->has($name) ? ' border border-red-500 focus:border-red-500 focus:ring-red-500' : 'focus:border-sky-500 focus:ring-1 focus:ring-sky-500' }}"
                "  
         ></textarea>

        <x-form.error name="{{$name}}" />
</div>
        

