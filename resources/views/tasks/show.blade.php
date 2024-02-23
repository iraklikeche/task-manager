<x-panel-layout>
  <div class="flex justify-between items-center mb-6">
    <h1 class="uppercase text-3xl font-semibold pl-2">Task title</h1>
    <div class="flex gap-4">
      <button class="flex gap-4 items-center py-2 px-6 uppercase border border-[#499af9]
       rounded-xl text-xs font-bold text-[#499af9]
       "
       >
       <x-icons.edit />
       <span>

         Edit task
        </span> 
      </button>
    </div>
  </div>
  <div class=pl-2>
    <h2 class="text-[#6a737d] text-sm font-semibold mb-4">Descrption</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam voluptatem eum dignissimos,
        culpa necessitatibus enim ad est illum quisquam et dicta eos
        cupiditate doloribus quae in iure voluptatum dolorem perspiciatis!
        Natus sequi at facilis repudiandae suscipit dolore labore id quae ab, quaerat
        facere ducimus minus eveniet ad, eius, quo fugiat sint rerum iusto? Sit aperiam earum,
        voluptatum accusamus cum dolorem?
    </p>
    <div class="flex gap-32 mt-16">
      <div class="flex flex-col gap-2">
        <span class="text-[#6a737d] ">Created date</span>
        <span>Date</span>
      </div>
      <div class="flex flex-col gap-2">
        <span class="text-[#6a737d] ">Due date</span>
        <span>Date</span>
      </div>
    </div>
  </div>
</x-panel-layout>