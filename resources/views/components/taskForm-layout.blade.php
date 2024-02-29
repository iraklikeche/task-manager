 @props([
  'name',
  'heading',
  'formAction' => route('tasks.store'),
  'formMethod' => 'POST',
  'task' => null,
])

<x-panel-layout class="pr-64">
 {{$slot}}
 <div class="mx-auto w-96 flex flex-col gap-10">
  <h1 class="uppercase font-semibold text-3xl text-center">{{ __('tasks.create_task') }}</h1>

 <form action="{{$formAction}}" method="POST" class="flex flex-col gap-10" novalidate>
  @csrf
  @if($formMethod === 'PUT')
      @method('PUT')
  @endif


  <x-form.input required type="text" placeholder="tasks.task_name_en" name="name[en]" value="{{ old('name.en', $task->name ?? '') }}"
  /> 

  <x-form.input required type="text" placeholder="tasks.task_name_ge" name="name[ge]" value="{{ old('name.ge', $task->name ?? '') }}"
  />


  <x-form.textarea placeholder="tasks.task_description_en" name="description[en]" required>
    {{ $task->description ?? ""}} 
  </x-form.textarea>

  <x-form.textarea placeholder="tasks.task_description_ge" name="description[ge]" required>
    {{ $task->description ?? ""}}
  </x-form.textarea>
  <x-form.input type="date" name="due_date" value="{{ old('due_date', isset($task->due_date) ? \Carbon\Carbon::parse($task->due_date)->format('Y-m-d') : '') }}" placeholder=""/>
  <button type="submit" class="bg-[#499af9] uppercase font-semibold py-4 rounded-xl mt-4 text-white">
      {{$formMethod === 'PUT' ? __('tasks.update_task') : __('tasks.create_task')  }}
  </button>
</form>
 </div>
</x-panel-layout>
