<x-layout>

    <div class="flex items-center gap-48 h-screen py-10 px-12">
        <div class="inline-block h-full w-1/2">
            <img src="{{ asset('images/defaults/bg.png') }}" class="inline-block h-full w-full"/>
        </div>

        <div class="grid grid-cols-1 grid-rows-3 h-full items-center">
            <div class=" flex gap-32 mb-4 mt-auto">
                <div class="">      
                    <h2 class="font-bold text-xl uppercase">Welcome Back!</h2>
                    <p class="text-xs text-[#6a737d]">Please enter your details</p>
                </div>
                <img src="{{ asset('images/defaults/smile.png') }}" alt=""/>
            </div>
            <form method="POST" action="#" class="flex flex-col gap-4">
                @csrf
                
                <x-form.input type="text" placeholder="Type your email" name="email"  />
                <x-form.input type="password" placeholder="Write your Password" name="password" />
                <div class="w-full">
                    <button class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-4 rounded-xl focus:outline-none focus:shadow-outline" type="submit">
                        LOG IN
                    </button>
                </div>
            </form>

            <div class="mt-auto flex justify-center gap-4">
                <button>English</button>
                <button>ქართული</button>
            </div>
      
        </div>
        {{-- <div class="w-1/2 flex flex-col h-full justify-center">
            <div class=" flex gap-32 mb-10">
                <div class="">      
                    <h2 class="font-bold text-xl uppercase">Welcome Back!</h2>
                    <p class="text-xs text-[#6a737d]">Please enter your details</p>
                </div>
                <img src="{{ asset('images/defaults/smile.png') }}" alt=""/>
            </div>
            <form method="POST" action="#" class="flex flex-col gap-4 w-1/2">
                @csrf
                
                <x-form.input type="text" placeholder="Type your email" name="email" />
                <x-form.input type="password" placeholder="Write your Password" name="password" />
                <div class="">
                    <button class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-4 rounded-xl focus:outline-none focus:shadow-outline" type="submit">
                        LOG IN
                    </button>
                </div>
            </form>

            <div class="grow">
                <button>English</button>
                <button>ქართული</button>
            </div>
      
        </div> --}}
    </div>   



</x-layout>