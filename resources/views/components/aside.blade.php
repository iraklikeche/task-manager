<aside class="flex flex-col bg-[#f6f8fa] px-8 py-4 items-center gap-20 rounded-xl">
  <div>
    <img src="{{ auth()->user()->profile_image ? Storage::url(auth()->user()->profile_image) : asset('images/defaults/avatar.png') }}" class="w-20" alt="Profile Image" />
  </div>
  <div>
    <ul class="text-[#2f363d] flex flex-col gap-6">
      <a href="{{route('dashboard')}}">
        <li class="flex gap-2 items-center"><x-icons.tasks /><span class="whitespace-nowrap"> My tasks</span></li>
      </a>
      <a href="{{ route('dashboard', ['due' => 'true']) }}">
        <li class="flex gap-2 items-center"><x-icons.dueTasks /><span> Due</span></li>
      </a>
      <a href="{{ route('dashboard.profile') }}" >
        <li class="flex gap-2 items-center"><x-icons.profile /> <span>Profile</span></li>
      </a>
    </ul>
  </div>
  <form method="POST" action="{{route('logout')}}" class="text-xs font-semibold text-[#2f363d] mt-auto flex" novalidate>
    @csrf
    <x-icons.logout />
    <button >Log Out</button>
  </form>
</aside>