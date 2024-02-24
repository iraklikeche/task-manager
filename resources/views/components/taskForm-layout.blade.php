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


{{-- 
  @props(['task' => null, 'name', 'heading', 'operation'])
 <x-panel-layout class="pr-64">
   {{$slot}}
   <div class="mx-auto w-96 flex flex-col gap-10">
    <h1 class="uppercase font-semibold text-3xl text-center">{{$heading}}</h1>

    <form action="{{ $operation === 'edit' ? route('tasks.update', $task->id) : route('tasks.store') }}" method="POST" class="flex flex-col gap-10">

    @csrf
    @if($operation === 'edit')
    @method('PUT')
    @endif

    <x-form.input type="text" placeholder="Task name in English" name="name.en"  value="{{ $operation === 'edit' ? old('name.en', $task->name) : old('name.en') }}"   />
    <x-form.input type="text" placeholder="Task name in Georgian" name="name.ge" value="{{ $operation === 'edit' ? old('name.ge', $task->name) : old('name.ge') }}" />
    <x-form.textarea name="description.en" placeholder="Description in English" :value="$operation === 'edit' ? old('description.en', $task->description) : old('description.en')" />
    <x-form.textarea name="description.en" placeholder="Description in Georgian" :value="$operation === 'edit' ? old('description.ka', $task->description) : old('description.ka')" />

      
    <x-form.input type="date" name="due_date" value="{{ $operation === 'edit' ? old('due_date', \Carbon\Carbon::parse($task->due_date)->format('Y-m-d')) : old('due_date') }}"
      placeholder=""/>
    <button type="submit" class="bg-[#499af9] uppercase font-semibold py-4 rounded-xl mt-4 text-white">
        Create Task
    </button>
  </form>
   </div>
    --}}