
@props(['name', 'type' => 'text', 'placeholder'])

<input name="{{ $name }}" type="{{ $type }}" id="{{ $name }}" placeholder="{{ $placeholder }}"
        class="bg-[#f6f8fa] rounded-xl w-full py-3 px-4 
        focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
"   />

