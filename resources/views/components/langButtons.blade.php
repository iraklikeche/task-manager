<div class="mt-auto flex justify-center gap-4">
  <a href="{{ route('localization', 'en') }}" class=" text-xs {{ app()->getLocale() === "en" ? "bg-main-grey text-[#2F363D]" : "text-[#6A737D]"}}">English</a>
  <a href="{{ route('localization', 'ka')}}" class="text-[#6a737d] text-xs {{ app()->getLocale() === "ka" ? "bg-main-grey text-[#2F363D]" : "text-[#6A737D]"}}">ქართული</a>
</div>
