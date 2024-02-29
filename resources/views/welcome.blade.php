<x-layout>
    <div class="flex items-center gap-48 h-screen py-10 px-12">
        <div class="inline-block h-full w-1/2">
            <img id="img-cover_image" src="{{file_exists(public_path('storage/images/cover_image.png')) ? asset('storage/images/cover_image.png') : asset('storage/images/cover.png')}}" class="inline-block h-full w-full"/>  

        </div>
  
        <div class="grid grid-cols-1 grid-rows-3 h-full items-center">
            <div class=" flex gap-32 mb-4 mt-auto">
                <div class="">      

                    <h2 class="font-bold text-xl uppercase">{{ __('auth.welcome_back') }}</h2>
                    <p class="text-xs text-[#6a737d]">{{ __('auth.enter_details') }}</p>
                </div>
                <img src="{{ asset('images/defaults/smile.png') }}" alt=""/>
            </div>
            <form method="POST" action="/login" class="flex flex-col gap-4" novalidate>
                @csrf
                
                {{-- <x-form.input type="email" placeholder="Type your email" name="email" value="{{ old('email') }}" required /> --}}
                <x-form.input type="email"  placeholder="auth.email_placeholder" name="email" value="{{ old('email') }}" required />
                
                <div x-data="{ showPassword: false }" class="relative">
                    <x-form.input x-bind:type="showPassword ? 'text' : 'password'" placeholder="auth.password_placeholder" name="password" required />
                    <span x-on:click="showPassword = !showPassword" style="cursor: pointer;" class='absolute top-[30%] right-[5%]'>
                        <x-icons.show />
                    </span>
                </div>
       
                <div class="w-full">
                    <button class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-4 rounded-xl focus:outline-none focus:shadow-outline" type="submit">
                        {{ __('auth.login') }}
                    </button>
                </div>
            </form>
           
  
            <x-langButtons />


        </div>
    </div>   
  </x-layout>