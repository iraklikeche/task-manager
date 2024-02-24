<x-panel-layout>

  <div class="flex justify-between items-center mb-6">
    <h1 class="uppercase text-3xl font-semibold pl-2">Your tasks</h1>
    <div class="flex gap-4">
      <button class="text-[#499af9] py-2 px-6 uppercase border border-[#499af9]
       rounded-xl text-xs font-bold hover:bg-[#499af9] hover:text-white transition-colors tracking-wide"
       >
       delete old tasks
      </button>

      <a href="{{ route('dashboard.create') }}" class="flex gap-4 items-center bg-[#499af9] py-2 px-6 uppercase border
       border-[#499af9] rounded-xl text-xs font-bold text-white
       hover:bg-[#496cf9] transition-colors tracking-wide"
       >
       <x-icons.add />
       <span>

         Add task
        </span>
      </a>
    </div>
  </div>
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden  sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead>
            <tr>
              <th scope="col" class=" px-2 py-3 text-left text-xs text-black uppercase tracking-wider">
                Task name
              </th>
              <th scope="col" class="px-2 py-3 text-left text-xs text-black font-semibold uppercase tracking-wider">
                Description
              </th>
              <th scope="col" class="px-2 py-3 text-left text-xs text-black font-semibold uppercase tracking-wider">
                Created at
              </th>
              <th scope="col" class="px-2 py-3 text-left text-xs text-black font-semibold uppercase tracking-wider">
                Due Date
              </th>
              <th scope="col" class="px-2 py-3 text-left text-xs text-black font-semibold uppercase tracking-wider">
                Actions
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($tasks as $task)
              
            <tr>
              <td class="px-2 py-4 whitespace-nowrap text-[#6a737d]">
                {{$task->name}}
              </td>
              <td class="px-2 py-4 whitespace-nowrap text-[#6a737d]">
                {{$task->description}}
              </td>
              <td class="px-2 py-4 whitespace-nowrap text-[#6a737d]">
                {{$task->created_at}}
              </td>
              <td class="px-2 py-4 whitespace-nowrap text-[#6a737d]">
                {{$task->due_date}}    
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                <a href="{{ route('dashboard.edit',$task->id) }}" class="text-[#2f363d] hover:text-black underline">Edit</a>
                {{-- To Do Delete functionality. I'll keep it as it is so far, if it's okay --}}
                <a href="#" class="text-[#2f363d] hover:text-black underline ml-4">Delete</a>
                <a href="{{ route('dashboard.show',$task->id)  }}" class="text-[#2f363d] hover:text-black underline ml-4">Show</a>
              </td>
            </tr>
            @endforeach

          </tbody>
        </table>
      </div>
     
    </div>
  </div>
 
</x-panel-layout>