<x-panel-layout>
  <div class="flex justify-between items-center mb-6">
    <h1 class="uppercase text-3xl font-semibold pl-2">Your tasks</h1>
    <div class="flex gap-4">
      <button class="text-custom-blue py-2 px-6 uppercase border border-custom-blue
       rounded-xl text-xs font-bold hover:bg-custom-blue hover:text-white transition-colors tracking-wide"
       >
       delete old tasks
      </button>

      <a href="{{ route('dashboard.create') }}" class="flex gap-4 items-center bg-custom-blue py-2 px-6 uppercase border
       border-custom-blue selection:rounded-xl text-xs font-bold text-white
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
            <tr class="text-left text-xs text-black font-semibold uppercase tracking-wider">
              <th scope="col" class=" px-2 py-3 ">
                Task name
              </th>
              <th scope="col" class="px-2 py-3 ">
                Description
              </th>
              <th scope="col" class="px-2 py-3 ">
                Created at
              </th>
              <th scope="col" class="px-2 py-3 ">
                Due Date
              </th>
              <th scope="col" class="px-2 py-3 ">
                Actions
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($tasks as $task)
              
            <tr>
              <td class="px-2 py-4 whitespace-nowrap text-custom-gray truncate max-w-[150px]">
                {{$task->name}}
              </td>
              <td class="px-2 py-4 whitespace-nowrap text-custom-gray truncate max-w-[250px]">
                {{$task->description}}
              </td>
              <td class="px-2 py-4 whitespace-nowrap text-custom-gray">
                {{$task->created_at->format('Y-m-d')}}
              </td>
              <td class="px-2 py-4 whitespace-nowrap text-custom-gray">
                {{$task->due_date}} 
              </td>
              <td class="px-2 py-4 whitespace-nowrap text-sm font-medium text-custom-gray-for-links">
                <a href="{{ route('dashboard.edit',$task->id) }}" class=" hover:text-black underline">Edit</a>
                {{-- To Do Delete functionality. I'll keep it as it is so far, if it's okay --}}
                <a href="#" class=" hover:text-black underline ml-4">Delete</a>
                <a href="{{ route('dashboard.show',$task->id)  }}" class=" hover:text-black underline ml-4">Show</a>
              </td>
            </tr>
            @endforeach

          </tbody>
        </table>
      </div>
     
    </div>
  </div>
 
</x-panel-layout>