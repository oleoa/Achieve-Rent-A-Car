@extends('layout')
@php $title = 'title.about'; @endphp
@section('main')

  <div style="background-image: url('/img/pages/stays/2.jpg')" class="h-52 flex flex-col justify-center items-center bg-cover bg-no-repeat bg-center">
    <h1 class="text-white text-center font-black xl:text-6xl xl:block hidden">@lang('stays.banner')</h1>
    <h1 class="text-white text-center font-black xl:hidden">@lang('stays.banner.phone')</h1>
  </div>

  <article class="px-default py-4">

    <section class="shadow-2xl flex flex-col xl:flex-row gap-4 p-4 rounded-md">

      <div class="flex flex-col gap-4 min-w-max">
        <h2 class="font-bold xl:text-3xl text-xl">@lang('stays.ap.1.title')</h2>
        <h3 class="xl:text-2xl text-base">@lang('stays.ap.1.description')</h3>
        <p class="flex items-center xl:gap-2 gap-1 px-4 py-2 bg-flagYellow rounded-md w-fit">
          @lang('stays.ap.1.guests')
          <i class="fa-solid fa-circle flex items-center" style="font-size: 0.25rem;"></i>
          @lang('stays.ap.1.bedrooms')
          <i class="fa-solid fa-circle flex items-center" style="font-size: 0.25rem;"></i>
          @lang('stays.ap.1.beds')
          <i class="fa-solid fa-circle flex items-center" style="font-size: 0.25rem;"></i>
          @lang('stays.ap.1.baths')
        </p>
        <a target="_blank" href="https://www.airbnb.com/rooms/49396733?adults=1&children=0&infants=0&pets=0&wishlist_item_id=11003373859489&check_in=2024-08-06&check_out=2024-08-09&source_impression_id=p3_1711750108_4h4YTI4FVG3ezbXR&previous_page_section_name=1000" class="hover:bg-white hover:text-flagRed text-white text-3xl px-4 py-2 border-2 border-flagRed rounded-md bg-flagRed flex items-center justify-center gap-2 w-fit">
          <i class="fa-brands fa-airbnb"></i>
          <span class="text-base">
            @lang('stays.ap.check.airbnb')
          </span>
        </a>
        <a target="_blank" href="https://maps.app.goo.gl/sgHvL6c54HetrHrz9" class="hover:bg-white hover:text-flagBlue text-white text-3xl px-4 py-2 border-2 border-flagBlue rounded-md bg-flagBlue flex items-center justify-center gap-2 w-fit">
          <i class="fa-solid fa-map-location-dot"></i>
          <span class="text-base">
            @lang('stays.ap.find.map')
          </span>
        </a>
      </div>

      <div class="grid xl:grid-cols-4 grid-cols-2 xl:grid-rows-2 gap-4">
        <img class="object-cover xl:h-full rounded-md col-span-2 xl:row-span-2" src="https://a0.muscache.com/im/pictures/miso/Hosting-49396733/original/f2c1c289-d3f9-4189-a721-7ae5525d891e.jpeg?im_w=960" alt="Image of the stay">
        <img class="object-cover xl:h-full rounded-md" src="https://a0.muscache.com/im/pictures/miso/Hosting-49396733/original/c6ca3076-ba8d-49d5-b11c-3d9f08567c9d.jpeg?im_w=720" alt="Image of the stay">
        <img class="object-cover xl:h-full rounded-md" src="https://a0.muscache.com/im/pictures/a5e1b1f0-ce51-4889-9981-4663393e91af.jpg?im_w=720" alt="Image of the stay">
        <img class="object-cover xl:h-full rounded-md" src="https://a0.muscache.com/im/pictures/e3ab714a-a6e0-41c6-8c2b-5b0843be9292.jpg?im_w=720" alt="Image of the stay">
        <img class="object-cover xl:h-full rounded-md" src="https://a0.muscache.com/im/pictures/fe8493e6-cef5-46af-854b-145efe6880fc.jpg?im_w=720" alt="Image of the stay">
      </div>

    </section>

  </article>

@endsection
