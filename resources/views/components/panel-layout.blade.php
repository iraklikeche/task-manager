<x-layout>
  <section>
    <div class="flex h-screen p-8 gap-16">
      <x-aside />
      <div {{ $attributes->merge(['class' => 'flex flex-col pt-20 w-full px-10']) }}>
      {{$slot}}

      </div>
    </div>
</section>
</x-layout>