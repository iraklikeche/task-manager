@props(['name', 'heading'])
 <x-panel-layout class="pr-64">
   {{$slot}}
   <form action="{{ route('tasks.store') }}" method="POST" class="flex flex-col gap-10">
    @csrf
    <x-form.input type="text" placeholder="Task name in English" name="name.en" value="{{ old('name.en') }}"  />
    <x-form.input type="text" placeholder="Task name in Georgian" name="name.ge" value="{{ old('name.ge') }}"  />
    <x-form.textarea type="text" placeholder="Description in English" name="description.en">
        {{ old('description.en') }}
    </x-form.textarea>
    <x-form.textarea type="text" placeholder="Description in Georgian" name="description.ge">
        {{ old('description.ge') }}
    </x-form.textarea>
    <x-form.input type="date" name="due_date" value="{{ old('due_date') }}" placeholder=""/>
    <button type="submit" class="bg-[#499af9] uppercase font-semibold py-4 rounded-xl mt-4 text-white">
        Create Task
    </button>
  </form>
</x-panel-layout>
