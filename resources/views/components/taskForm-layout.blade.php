@props(['name', 'heading'])
 <x-panel-layout class="pr-64">
   {{$slot}}
   <form action="{{ route('tasks.store') }}" method="POST" class="flex flex-col gap-10">
    @csrf
    <x-form.input type="text" placeholder="Task name in English" name="name_en" value="{{ old('name_en') }}"  />
    <x-form.input type="text" placeholder="Task name in Georgian" name="name_ge" value="{{ old('name_ge') }}"  />
    <x-form.textarea type="text" placeholder="Description in English" name="description_en">
        {{ old('description_en') }}
    </x-form.textarea>
    <x-form.textarea type="text" placeholder="Description in Georgian" name="description_ge">
        {{ old('description_ge') }}
    </x-form.textarea>
    <x-form.input type="date" name="due_date" value="{{ old('due_date') }}" placeholder=""/>
    <button type="submit" class="bg-[#499af9] uppercase font-semibold py-4 rounded-xl mt-4 text-white">
        Create Task
    </button>
  </form>
</x-panel-layout>
