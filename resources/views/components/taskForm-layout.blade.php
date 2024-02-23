@props(['name', 'heading'])
<x-panel-layout class="pr-64">
  {{$slot}}
  <div class="mx-auto w-96 flex flex-col gap-10">
    <h1 class="uppercase font-semibold text-3xl text-center">{{$heading}}</h1>
    
    <form class="flex flex-col gap-10">
      @csrf
      <x-form.input type="text" placeholder="Task name in English" name="task" value="{{ old('task') }}"  />
      <x-form.input type="text" placeholder="Task name in Georgian" name="taskge" value="{{ old('taskge') }}"  />
      <x-form.textarea  type="text" placeholder="Description name in English" name="description" >{{ old('taskge') }}</x-form.textarea>
      <x-form.textarea  type="text" placeholder="Description name in Georgian" name="descriptionge" >{{ old('taskge') }}</x-form.textarea>
      <x-form.input type="date"  name="date" value="{{ old('date') }}" placeholder=""  />
      <button type="submit" class="bg-[#499af9] uppercase font-semibold py-4 rounded-xl mt-4 text-white">{{$name}}</button>
    </form>
  </div>
</x-panel-layout>
