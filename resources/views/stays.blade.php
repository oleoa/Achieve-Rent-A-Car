@extends('layout')
@php $title = 'title.stays'; @endphp
@section('main')

  <div style="background-image: url('/img/pages/stays/banner.jpg')" class="h-52 flex flex-col justify-center items-center bg-cover bg-no-repeat bg-center">
    <h1 class="text-white text-center font-black xl:text-6xl xl:block hidden">@lang('stays.banner')</h1>
    <h1 class="text-white text-center font-black xl:hidden">@lang('stays.banner.phone')</h1>
  </div>

  <article class="px-default py-4">

    <section class="shadow-2xl flex flex-col xl:flex-row gap-4 p-4 rounded-md">

      <div class="flex flex-col gap-4 xl:min-w-max">

        <h2 class="font-bold xl:text-3xl text-xl">@lang('stays.ap.1.title')</h2>
        <h3 class="xl:text-2xl text-lg">@lang('stays.ap.1.description')</h3>

        <div class="items-center gap-2 px-4 py-2 bg-yellow rounded-md xl:flex hidden">
          @lang('stays.ap.1.guests')
          <i class="fa-solid fa-circle flex items-center" style="font-size: 0.25rem;"></i>
          @lang('stays.ap.1.bedrooms')
          <i class="fa-solid fa-circle flex items-center" style="font-size: 0.25rem;"></i>
          @lang('stays.ap.1.beds')
          <i class="fa-solid fa-circle flex items-center" style="font-size: 0.25rem;"></i>
          @lang('stays.ap.1.baths')
        </div>

        <div class="grid grid-cols-2 gap-4 xl:hidden">
          <span class="rounded-md bg-yellow p-2">@lang('stays.ap.1.guests')</span>
          <span class="rounded-md bg-yellow p-2">@lang('stays.ap.1.bedrooms')</span>
          <span class="rounded-md bg-yellow p-2">@lang('stays.ap.1.beds')</span>
          <span class="rounded-md bg-yellow p-2">@lang('stays.ap.1.baths')</span>
        </div>

        <a target="_blank" href="https://www.airbnb.com/rooms/49396733?adults=1&children=0&infants=0&pets=0&wishlist_item_id=11003373859489&check_in=2024-08-06&check_out=2024-08-09&source_impression_id=p3_1711750108_4h4YTI4FVG3ezbXR&previous_page_section_name=1000" class="hover:bg-white hover:text-red text-white text-3xl px-4 py-2 border-2 border-red rounded-md bg-red flex items-center justify-center gap-2 w-fit">
          <i class="fa-brands fa-airbnb"></i>
          <span class="text-base">
            @lang('stays.ap.check.airbnb')
          </span>
        </a>
        <a target="_blank" href="https://maps.app.goo.gl/sgHvL6c54HetrHrz9" class="hover:bg-white hover:text-blue text-white text-3xl px-4 py-2 border-2 border-blue rounded-md bg-blue flex items-center justify-center gap-2 w-fit">
          <i class="fa-solid fa-map-location-dot"></i>
          <span class="text-base">
            @lang('stays.ap.find.map')
          </span>
        </a>
      </div>

      <div class="grid xl:grid-cols-4 grid-cols-2 xl:grid-rows-2 gap-4">
        <img class="object-cover xl:h-full rounded-md col-span-2 xl:row-span-2" src="{{asset('/img/pages/stays/1.jpg')}}" alt="Image of the stay">
        <img class="object-cover xl:h-full rounded-md" src="{{asset('/img/pages/stays/2.jpg')}}" alt="Image of the stay">
        <img class="object-cover xl:h-full rounded-md" src="{{asset('/img/pages/stays/3.jpg')}}" alt="Image of the stay">
        <img class="object-cover xl:h-full rounded-md" src="{{asset('/img/pages/stays/4.jpg')}}" alt="Image of the stay">
        <img class="object-cover xl:h-full rounded-md" src="{{asset('/img/pages/stays/5.jpg')}}" alt="Image of the stay">
      </div>

    </section>

  </article>

@endsection
