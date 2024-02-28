<x-panel-layout class="pr-64">
  <div class="mx-auto w-96 flex flex-col gap-10">
    <h1 class="uppercase font-semibold text-3xl text-center">Profile</h1>
    
    <form class="flex flex-col gap-10" method="POST" action="{{ route('user.update_password') }}" enctype="multipart/form-data" >
      @csrf
      <div class="relative">
        <input name="email" type="text" id="email" placeholder="email"
               value="{{ auth()->user()->email }}" 
               class="peer bg-[#f6f8fa] rounded-xl w-full py-4 px-4 placeholder:text-[#959da5] focus:outline-none"
               readonly />
               
        <label for="email" class="absolute left-2 cursor-text transition-all text-xs -top-4 text-gray-600">
            Email
        </label>
    
        <x-form.error name="email" />
    </div>

      <div class="flex flex-col gap-8">
        <h2 class="uppercase text-[#2f363d] text-center">Change Password</h2>
        <x-form.input type="password" placeholder="Current Password" name="current_password"   value="" />
        <x-form.input type="password" placeholder="new Password" name="new_password" value="" />
        <x-form.input type="password" placeholder="Retype new Password" name="new_password_confirmation" value="" />
      </div>
      <div class="flex flex-col gap-4 m-6">
        <h2 class="uppercase text-[#2f363d] text-center mb-6">Change Photos</h2>
        <div class="flex items-center gap-4">
          <img src="{{ auth()->user()->profile_image ? Storage::url(auth()->user()->profile_image) : asset('images/defaults/avatar.png') }}" class="w-20" alt="Profile Image" />
          <label class="inline-block text-custom-blue hover:custom-blue cursor-pointer border border-custom-blue py-3 px-8 rounded-xl uppercase text-xs">
            <span class="text-base leading-normal flex gap-4"><x-icons.upload /> Upload Profile</span>
            <x-form.input type="file" name="avatar" placeholder="" value="{{ old('avatar') }}" class="hidden" />
          </label>
          {{-- I will uncomment when start working on delete feature --}}
          {{-- <a href="#" class="uppercase">Delete</a> --}}
        </div>
        <div class="flex items-center gap-4">
          <img src="{{ auth()->user()->cover_image ? Storage::url(auth()->user()->cover_image) : asset('images/defaults/bg.png') }}" class="w-20" alt="Profile Image" />
          <label class="inline-block text-custom-blue hover:custom-blue cursor-pointer border border-custom-blue py-3 px-8 rounded-xl uppercase text-xs">
            <span class="text-base leading-normal flex gap-4"><x-icons.upload /> Upload Profile</span>
            <x-form.input type="file" name="cover" placeholder="" value="{{ old('avatar') }}" class="hidden" />
          </label>
          {{-- I will uncomment when start working on delete feature --}}
          {{-- <a href="#" class="uppercase">Delete</a> --}}
        </div>    
      </div>
      <button type="submit" class="bg-[#499af9] uppercase font-semibold py-4 rounded-xl mt-4 text-white">Change</button>
    </form>
  </div>
</x-panel-layout>
