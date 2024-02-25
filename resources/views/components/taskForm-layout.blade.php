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
  <h1 class="uppercase font-semibold text-3xl text-center">{{$heading}}</h1>

 <form action="{{$formAction}}" method="POST" class="flex flex-col gap-10">
  @csrf
  @if($formMethod === 'PUT')
      @method('PUT')
  @endif


  <x-form.input type="text" placeholder="Task name in English" name="name[en]" value="{{ old('name.en', $task->name ?? '') }}"
  /> 

  <x-form.input type="text" placeholder="Task name in Georgian" name="name[ge]" value="{{ old('name.ge', $task->name ?? '') }}"
  />


  <x-form.textarea placeholder="Description in English" name="description[en]" >
    {{ $task->description ?? ""}} 
  </x-form.textarea>

  <x-form.textarea placeholder="Description in Georgian" name="description[ge]">
    {{ $task->description ?? ""}}
  </x-form.textarea>
  <x-form.input type="date" name="due_date" value="{{ old('due_date', isset($task->due_date) ? \Carbon\Carbon::parse($task->due_date)->format('Y-m-d') : '') }}" placeholder=""/>
  <button type="submit" class="bg-[#499af9] uppercase font-semibold py-4 rounded-xl mt-4 text-white">
      {{$formMethod === 'PUT' ? 'Update Task' : 'Create Task'}}
  </button>
</form>
 </div>
</x-panel-layout>
