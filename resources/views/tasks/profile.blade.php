<x-panel-layout class="pr-64">
  <div class="mx-auto w-96 flex flex-col gap-10">
    <h1 class="uppercase font-semibold text-3xl text-center">Profile</h1>
    
    <form class="flex flex-col gap-10" method="POST" action="{{ route('user.updatePassword') }}">
      @csrf
      <x-form.input type="text" placeholder="Name@redberry.ge" name="email" value="{{ old('email') }}" value="{{ auth()->user()->email }}" />

      <div class="flex flex-col gap-4">
        <h2 class="uppercase text-[#2f363d] text-center">Change Password</h2>
        <x-form.input type="password" placeholder="Current Password" name="current_password"   value="" />
        <x-form.input type="password" placeholder="new Password" name="new_password" value="" />
        <x-form.input type="password" placeholder="Retype new Password" name="new_password_confirmation" value=""  />
      </div>
      <div class="flex flex-col gap-4 m-6">
        <h2 class="uppercase text-[#2f363d] text-center mb-6">Change Photos</h2>
        <div class="flex items-center gap-4">
          <img src="{{ asset('images/defaults/avatar.png') }}" class="w-24"/>

          <label class="inline-block text-blue-600 hover:text-blue-500 cursor-pointer border border-custom-blue py-2 px-4 rounded-xl uppercase text-xs">
            <span class=" text-base leading-normal">Upload Profile</span>
            <x-form.input type="file" name="profile-photo" placeholder="" value="{{ old('profilePhoto') }}" class="hidden" />
          </label>
          <a href="#" class="uppercase">Delete</a>
        </div>
        <div class="flex items-center gap-4">
          <img src="{{ asset('images/defaults/bg.png') }}" class="w-28 h-16"/>

          <label class="inline-block text-blue-600 hover:text-blue-500 cursor-pointer border border-custom-blue py-2 px-4 rounded-xl uppercase text-xs">
            <span class="text-base leading-normal">Upload Profile</span>
            <x-form.input type="file" name="avatar" placeholder="" value="{{ old('avatar') }}" class="hidden" />
          </label>
          <a href="#" class="uppercase">Delete</a>
        </div>    
      </div>
      <button type="submit" class="bg-[#499af9] uppercase font-semibold py-4 rounded-xl mt-4 text-white">Change</button>
    </form>
  </div>
</x-panel-layout>
