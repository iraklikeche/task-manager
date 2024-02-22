<x-layout>
  <section>
    <div class="flex h-screen p-8">
      <aside class="flex flex-col bg-[#f6f8fa] px-8 py-4 items-center gap-20 rounded-xl">
        <div>
          
          <img src="{{ asset('images/defaults/avatar.png') }}"/>
        </div>
        <div>
          <ul class="text-[#2f363d] flex flex-col gap-6">
            <li class="flex gap-2 items-center"><x-icons.tasks /> My Tasks</li>
            <li class="flex gap-2 items-center"><x-icons.dueTasks /> Due</li>
            <li class="flex gap-2 items-center"><x-icons.profile /> Profile</li>
            
            
          </ul>
        </div>
        <form method="POST" action="/logout" class="text-xs font-semibold text-[#2f363d] mt-auto flex">
          @csrf
          <x-icons.logout />
          <button >Log Out</button>
        </form>
      </aside>
      <div>
        TABLE
      </div>
    </div>
</section>


</x-layout>