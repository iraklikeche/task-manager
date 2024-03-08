<div class="{{ $customClasses ?? 'mt-auto flex justify-end items-center gap-4' }}">
  <a href="{{ route('localization', 'en') }}"  class="text-[14px] {{ app()->getLocale() === "en" ? "bg-[#f6f8fa] rounded-xl px-4 py-3 text-[#2F363D]" : "text-[#6A737D]"}}">English</a>
  <a href="{{ route('localization', 'ka')}}" class="text-[14px] {{ app()->getLocale() === "ka" ? "bg-[#f6f8fa] px-4 py-3 rounded-xl text-[#2F363D]" : "text-[#6A737D]"}}">ქართული</a>
</div>
