{{-- <x-taskForm-layout name="Edit Task" heading="Edit Task" :task="$task" operation="edit"/> --}}
@props(['task', 'name', 'heading'])
<x-panel-layout class="pr-64">

   {{-- Adjust action to point to the update route --}}
   <form action="{{ route('tasks.update', $task->id) }}" method="POST" class="flex flex-col gap-10">
    @csrf
    @method('PUT') {{-- HTTP method spoofing for updating --}}
    <x-form.input type="text" placeholder="Task name in English" name="name.en" value="{{ old('name.en', $task->name) }}"  />
    <x-form.input type="text" placeholder="Task name in Georgian" name="name.ge" value="{{ old('name.ge', $task->name) }}"  />
    <x-form.textarea type="text" placeholder="Description in English" name="description.en">
        {{ old('description.en', $task->description) }}
    </x-form.textarea>
    <x-form.textarea type="text" placeholder="Description in Georgian" name="description.ge">
        {{ old('description.ge', $task->description) }}
    </x-form.textarea>
    <x-form.input type="date" name="due_date" value="{{ old('due_date', $task->due_date) }}" placeholder=""/>
    <button type="submit" class="bg-[#499af9] uppercase font-semibold py-4 rounded-xl mt-4 text-white">
        Update Task
    </button>
  </form>
   </div>
</x-panel-layout>