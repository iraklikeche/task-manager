<x-panel-layout>
  <div class="flex justify-center flex-col">
    <h1 class="uppercase font-bold text-3xl">Create Task</h1>
    
    <div class="max-w-md">
      <form class="flex flex-col">
        @csrf
        <x-form.input type="text" placeholder="Task name in English" name="task" value="{{ old('task') }}"  />
        <x-form.input type="text" placeholder="Task name in Georgian" name="taskge" value="{{ old('taskge') }}"  />
        <x-form.input type="date"  name="date" value="{{ old('date') }}" placeholder=""  />  
      </form>
    </div>
  </div>
</x-panel-layout>