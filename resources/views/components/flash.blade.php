@if (session()->has('success'))
<div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="absolute top-4 left-1/2 -translate-x-1/2 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
  <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
    <x-icons.success />
  </div>
  <div class="ms-3 text-sm font-normal">{{ session('success') }}</div>
</div>
@endif


@if (session()->has('danger'))
<div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="absolute top-4 left-1/2 -translate-x-1/2 flex items-center w-full max-w-xs px-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
<div id="toast-warning" class="flex items-center w-full max-w-xs p-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
  <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-orange-500 bg-orange-100 rounded-lg dark:bg-orange-700 dark:text-orange-200">
    <x-icons.danger />
    </div>  
    <div class="ms-3 text-sm font-normal">{{session('danger')}}</div>
  </div>
</div>
  @endif


  @if (session()->has('delete'))
  <div x-data="{ show: true }"  x-show="show" class="absolute top-4 left-1/2 -translate-x-1/2 flex items-center w-full max-w-xs px-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
  <div id="toast-danger" class="flex items-center w-full max-w-xs p-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
    <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
      <x-icons.delete />
      </div>
      <div class="ms-3 text-sm font-normal">Item has been deleted.</div>
      
    </div>
  </div>  
    @endif
