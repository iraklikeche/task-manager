<x-panel-layout class="pr-64">
  <div class="mx-auto w-96 flex flex-col gap-10">
    <h1 class="uppercase font-semibold text-3xl text-center">{{__('profile.profile')}}</h1>
    
    <form class="flex flex-col gap-10" method="POST" action="{{ route('profile.update') }}" novalidate enctype="multipart/form-data" >
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
        <h2 class="uppercase text-[#2f363d] text-center">{{__('profile.change_password')}}</h2>
        <x-form.input type="password" placeholder="profile.current_password" name="current_password" required/>
        <x-form.input type="password" placeholder="profile.new_password" name="new_password" value="" required/>
        <x-form.input type="password" placeholder="profile.re_password" name="new_password_confirmation" value="" required/>
      </div>
      <div class="flex flex-col gap-4 m-6">
        <h2 class="uppercase text-[#2f363d] text-center mb-6">{{__('profile.change_photo')}}</h2>
        <div class="flex items-center gap-4 relative">
          <img id="img-avatar" src="{{ auth()->user()->profile_image ? Storage::url(auth()->user()->profile_image) : asset('images/defaults/avatar.png') }}" class="w-20" alt="Profile Image" />
          <label class=" inline-block text-custom-blue hover:custom-blue cursor-pointer border border-custom-blue py-3 px-8 rounded-xl uppercase text-xs">
            <span class="text-base leading-normal flex gap-4 whitespace-nowrap"><x-icons.upload />{{__('profile.upload_profile')}}</span>
            <x-form.input type="file" name="avatar" placeholder="" value="{{ old('avatar') }}"  onchange="changeImage(event,'img-avatar')" hidden />
          </label>
          <button onclick="removeImage('avatar')" type="button" id="delete-img-avatar" class="absolute uppercase right-[-35%] hidden">{{__('tasks.delete')}}</button>
        </div>
        <div class="flex items-center gap-4 relative">
  
          <img id="img-cover_image" 
            src="{{ file_exists(public_path('storage/images/cover_image.png')) 
            ? asset('storage/images/cover_image.png') . '?' . now()->timestamp 
            : asset('images/cover.png') }}" 
            class="w-20" />


          <label class="inline-block text-custom-blue hover:custom-blue cursor-pointer border border-custom-blue py-3 px-8 rounded-xl uppercase text-xs">
            <span class="text-base leading-normal flex gap-4"><x-icons.upload />{{__('profile.upload_cover')}}</span>
            <x-form.input type="file" name="cover_image" placeholder="" value="{{ old('avatar') }}" onchange="changeImage(event,'img-cover_image')" hidden />
          </label>
          <button onclick="removeImage('cover_image')" type="button" id="delete-img-cover_image" class="uppercase absolute right-[-35%] hidden">{{__('tasks.delete')}}</button>
        </div>
      </div>
      <button type="submit" class="bg-[#499af9] uppercase font-semibold py-4 rounded-xl mt-4 text-white">{{__('profile.change')}}</button>
    </form>
  </div>
</x-panel-layout>


<script>
  function changeImage(event, name) {
  if (event.target.files && event.target.files[0]) {
    const file = event.target.files[0];
    const imageUrl = URL.createObjectURL(file);

    document.getElementById(name).src = imageUrl;
    document.getElementById(`delete-${name}`).style.display = 'block';


    document.getElementById(name).onload = function() {
      URL.revokeObjectURL(imageUrl);
    };
  }
}

  function removeImage(name) {
  if (name === 'avatar') {
    document.getElementById(`img-${name}`).src = "{{ auth()->user()->profile_image ? Storage::url(auth()->user()->profile_image) : asset('images/defaults/avatar.png') }}";
  }
  
  if (name === "cover_image") {
    document.getElementById(`img-${name}`).src = "{{file_exists(public_path('storage/images/cover_image.png')) ? asset('storage/images/cover_image.png') : asset('/images/cover.png')}}";
  }
  
  const fileInput = document.getElementById(name).value = "";
  document.getElementById(`delete-img-${name}`).style.display = 'none';
}

</script>