<x-panel-layout>
  <div class="flex justify-between items-center mb-6">
    <h1 class="uppercase text-3xl font-semibold pl-2">{{$task->name}}</h1>
    <div class="flex gap-4">
      <a href="{{ route('dashboard.edit',$task->id) }}" class="flex gap-4 items-center py-2 px-6 uppercase border border-[#499af9]
       rounded-xl text-xs font-bold text-[#499af9]
       "
       >
       <x-icons.edit />
       <span>

         Edit task
        </span> 
      </a>
    </div>
  </div>
  <div class=pl-2>
    <h2 class="text-[#6a737d] text-sm font-semibold mb-4">Descrption</h2>
    <p>
      {{$task->description}}
    </p>
    <div class="flex gap-32 mt-16">
      <div class="flex flex-col gap-2">
        <span class="text-[#6a737d] ">Created date</span>
        <span>{{$task->created_at}}</span>
      </div>
      <div class="flex flex-col gap-2">
        <span class="text-[#6a737d] ">Due date</span>
        <span>{{\Carbon\Carbon::parse($task->due_date)->format('Y-m-d')}}</span>
      </div>
    </div>
  </div>
</x-panel-layout>