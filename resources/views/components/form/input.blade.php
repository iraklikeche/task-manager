{{-- @props(['name', 'type' => 'text', 'placeholder', 'value' => '', 'class' => '', 'readonly' => false])
@php
    $dotNotation = str_replace(['[', ']'], ['.', ''], $name);
@endphp

<div class="relative">
        <input name="{{ $name }}" type="{{ $type }}" id="{{ $name }}" value="{{ $value }}"
        @class([
                'bg-[#f6f8fa] rounded-xl w-full py-4 px-4 placeholder:text-[#959da5] focus:outline-none','peer',
                'border border-red-500 focus:border-red-500 focus:ring-red-500' => $errors->has($dotNotation),
                'focus:border-sky-500 focus:ring-1 focus:ring-sky-500' => !$errors->has($dotNotation),
                $class
            ])
             {{ $readonly ? 'readonly' : '' }} required
         />
        <label for="{{$name}}" class="absolute left-2 top-4 text-gray-600 cursor-text peer-focus:text-xs peer-focus:-top-4 peer-focus:text-gray-600  peer-valid:text-xs peer-valid:-top-4 peer-valid:text-gray-600   transition-all">
                {{$placeholder}}
        </label>

        <x-form.error name="{{$name}}"  />

</div>
        
 --}}

     
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
