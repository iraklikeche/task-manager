<x-layout>
  <section>
    <div class="flex h-screen p-8 gap-16">
      <aside class="flex flex-col bg-[#f6f8fa] px-8 py-4 items-center gap-20 rounded-xl">
        <div>
          <img src="{{ asset('images/defaults/avatar.png') }}"/>
        </div>
        <div>
          <ul class="text-[#2f363d] flex flex-col gap-6">
            <li class="flex gap-2 items-center"><x-icons.tasks /><span class="whitespace-nowrap"> My tasks</span></li>
            <li class="flex gap-2 items-center"><x-icons.dueTasks /><span> Due</span></li>
            <li class="flex gap-2 items-center"><x-icons.profile /> <span>Profile</span></li>
          </ul>
        </div>
        <form method="POST" action="/logout" class="text-xs font-semibold text-[#2f363d] mt-auto flex">
          @csrf
          <x-icons.logout />
          <button >Log Out</button>
        </form>
      </aside>
      <div class="flex flex-col pt-24 w-full px-10">
        <div class="flex justify-between items-center mb-6">
          <h1 class="uppercase text-3xl font-semibold">Your tasks</h1>
          <div class="flex gap-4">
            <button class="text-[#499af9] py-2 px-6 uppercase border border-[#499af9]
             rounded-xl text-xs font-bold hover:bg-[#499af9] hover:text-white transition-colors tracking-wide"
             >
             delete old tasks
            </button>

            <button class="flex gap-4 items-center bg-[#499af9] py-2 px-6 uppercase border
             border-[#499af9] rounded-xl text-xs font-bold text-white
             hover:bg-[#496cf9] transition-colors tracking-wide"
             >
             <x-icons.add />
             <span>

               Add task
              </span>
            </button>
          </div>
        </div>
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden  sm:rounded-lg">
              <table class="min-w-full divide-y divide-gray-200">
                <thead>
                  <tr>
                    <th scope="col" class=" px-6 py-3 text-left text-xs text-black uppercase tracking-wider">
                      Task name
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs text-black font-semibold uppercase tracking-wider">
                      Description
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs text-black font-semibold uppercase tracking-wider">
                      Created at
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs text-black font-semibold uppercase tracking-wider">
                      Due Date
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs text-black font-semibold uppercase tracking-wider">
                      Actions
                    </th>
                  </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-[#6a737d]">
                      Call Jim and ask about the quote
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-[#6a737d]">
                      Systematic characterization and documentation
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-[#6a737d]">
                      23/06/2013
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-[#6a737d]">
                      23/06/2013
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                      <a href="#" class="text-[#2f363d] hover:text-black underline">Edit</a>
                      <a href="#" class="text-[#2f363d] hover:text-black underline ml-4">Delete</a>
                      <a href="#" class="text-[#2f363d] hover:text-black underline ml-4">Show</a>
                    </td>
                  </tr>

                </tbody>
              </table>
            </div>
           
          </div>
        </div>
        <div class="mt-auto flex justify-end gap-4">
          <button>English</button>
          <button>ქართული</button>
      </div>
      </div>
      
    
    </div>
</section>



</x-layout>