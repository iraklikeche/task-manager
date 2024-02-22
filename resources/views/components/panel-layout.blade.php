<x-layout>
  <section>
    <div class="flex h-screen p-8 gap-16">
      <x-aside />
      <div class="flex flex-col pt-24 w-full px-10">
      
      {{$slot}}
      <x-langButtons />

      </div>
    </div>
</section>
</x-layout>