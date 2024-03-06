<footer class="w-full xl:px-margin px-4 bg-flagRed min-h-footer flex flex-col justify-center items-start gap-4 py-4">

  <!-- Links -->
  <div class="hidden gap-4 text-white justify-center items-center">

    <!-- Instagram -->
    <a title="@lang('Footer-Social-Instagram.Title')" href="https://www.instagram.com/achieverentacar/" target="_blank">
      <i class="fab fa-instagram text-4xl hover:text-white"></i>
    </a>

    <!-- Youtube -->
    <a title="Click here to visit us on Youtube" href="https://www.youtube.com/@achieverentacar" target="_blank">
      <i class="fab fa-youtube text-4xl hover:text-white"></i>
    </a>

  </div>

  <!-- Separator -->
  <div class="bg-flagYellow w-full h-1 rounded"></div>

  <!-- Legal -->
  <p class="text-white flex xl:flex-row flex-col gap-1">
    <a title="@lang('Footer-Legal-Terms.Title')" href="{{route('terms', $locale)}}">@lang('Footer-Legal-Terms')</a>
    <a title="@lang('Footer-Legal-Privacy.Title')" href="{{route('privacy', $locale)}}">@lang('Footer-Legal-Privacy')</a>
  </p>

  <!-- Reserved -->
  <div class="flex xl:flex-row flex-col gap-1">
    <p class="text-white">@lang('Footer-@')</p>
    <p class="text-white">@lang('Footer-Reserved')</p>
  </div>

</footer>
