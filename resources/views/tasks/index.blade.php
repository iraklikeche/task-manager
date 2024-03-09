<x-panel-layout>
  
  <div class="flex justify-between items-center mb-6">
    <h1 class="uppercase text-3xl font-semibold pl-2">{{__('tasks.task_heading')}}</h1>
    <div class="flex gap-4">
      <form action="{{ route('tasks.deleteOverdue') }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="text-custom-blue py-3 px-6 uppercase border border-custom-blue
        rounded-xl text-xs font-bold hover:bg-custom-blue hover:text-white transition-colors tracking-wide">
        {{__('tasks.delete_old_tasks')}}        </button>
    </form>
    

      <a href="{{ route('dashboard.create') }}" class="flex gap-4 items-center bg-custom-blue py-2 px-6 uppercase border
       border-custom-blue selection:rounded-xl text-xs font-bold text-white rounded-xl
       hover:bg-[#496cf9] transition-colors tracking-wide"
       >
       <x-icons.add />
       <span>

        {{__('tasks.add_task')}}
        </span>
      </a>
    </div>
  </div>
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead>
              <tr class="text-left text-xs text-black font-semibold uppercase tracking-wider">
                <th scope="col" class="px-10 py-8">
                  {{__('tasks.task_name')}}
                </th>
                <th scope="col" class="px-10 py-8">
                  {{__('tasks.task_description')}}
                </th>
                <th scope="col" class="px-10 py-8">
                  
                  <a class="flex gap-2 items-center" href="{{ route('dashboard', ['sort' => 'created_at', 'order' => request('sort') === 'created_at' && request('order') === 'asc' ? 'desc' : 'asc'] + request()->except('sort', 'order')) }}">
                    <span>{{__('tasks.created_at')}}</span>
                    <x-icons.sort />
                  </a>
                </th>
                <th scope="col" class="px-10 py-8">
                  <a class="flex gap-2 items-center" href="{{ route('dashboard', ['sort' => 'due_date', 'order' => request('sort') === 'due_date' && request('order') === 'asc' ? 'desc' : 'asc'] + request()->except('sort', 'order')) }}">
                    <span>{{__('tasks.due_date')}}</span>
                    <x-icons.sort />
                  </a>
                </th>
                <th scope="col" class="px-10 py-8">
                  {{__('tasks.actions')}}
                </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              @foreach ($tasks as $task)
                
              <tr>
                <td class="px-10 py-4 whitespace-nowrap text-custom-gray truncate max-w-[150px]">
                  {{$task->name}}
                </td>
                <td class="px-10 py-4 whitespace-nowrap text-custom-gray truncate max-w-[250px]">
                  {{$task->description}}
                </td>
                <td class="px-10 py-4 whitespace-nowrap text-custom-gray">
                  {{$task->created_at->format('Y-m-d')}}
                </td>
                <td class="px-10 py-4 whitespace-nowrap {{ \Carbon\Carbon::parse($task->due_date)->isPast() ? 'text-red-500' : 'text-custom-gray' }}">
                  {{ \Carbon\Carbon::parse($task->due_date)->format('Y-m-d') }}
              </td>
              
                <td class="px-10 py-4 whitespace-nowrap text-sm font-medium text-custom-gray-for-links">
                  <a href="{{ route('dashboard.edit',$task->id) }}" class=" hover:text-black underline">{{__('tasks.edit')}}</a>
                  <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class=" hover:text-black underline ml-4">{{__('tasks.delete')}}</button>
                </form>
                  <a href="{{ route('dashboard.show',$task->id)  }}" class=" hover:text-black underline ml-4">{{__('tasks.show')}}</a>
                </td>
              </tr>

              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="mt-10">
      {{$tasks->links()}}
    </div>
  </x-panel-layout>