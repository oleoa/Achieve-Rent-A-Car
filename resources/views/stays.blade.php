@extends('layouts.main')
@php $title = 'title.about'; @endphp
@section('main')

  <div style="background-image: url('/img/pages/stays/2.jpg')" class="h-52 flex flex-col justify-center items-center bg-cover bg-no-repeat bg-center">
    <h1 class="text-white text-center font-black text-6xl">@lang('stays.banner')</h1>
  </div>

  <article class="lg:px-32 p-4">

    <section class="shadow-2xl grid grid-cols-3 gap-4 p-4 rounded-md">
      <div class="flex flex-col gap-4">
        <h2 class="font-bold">Funchal Amazing Apartment</h2>
        <h3>Entire rental unit in Funchal, Portugal</h3>
        <p class="flex gap-2 px-4 py-2 bg-flagYellow rounded-md">
          7 guests
          <i class="fa-solid fa-circle flex items-center" style="font-size: 0.25rem;"></i>
          3 bedrooms
          <i class="fa-solid fa-circle flex items-center" style="font-size: 0.25rem;"></i>
          5 beds
          <i class="fa-solid fa-circle flex items-center" style="font-size: 0.25rem;"></i>
          2 baths
        </p>
        <a target="_blank" href="https://www.airbnb.com/rooms/49396733?adults=1&children=0&infants=0&pets=0&wishlist_item_id=11003373859489&check_in=2024-08-06&check_out=2024-08-09&source_impression_id=p3_1711750108_4h4YTI4FVG3ezbXR&previous_page_section_name=1000" class="hover:bg-white hover:text-flagRed text-white text-3xl px-4 py-2 border-2 border-flagRed rounded-md bg-flagRed flex items-center justify-center gap-2 w-fit">
          <i class="fa-brands fa-airbnb"></i>
          <span class="text-base">
            Check on Airbnb
          </span>
        </a>
        <a target="_blank" href="https://maps.app.goo.gl/sgHvL6c54HetrHrz9" class="hover:bg-white hover:text-flagBlue text-white text-3xl px-4 py-2 border-2 border-flagBlue rounded-md bg-flagBlue flex items-center justify-center gap-2 w-fit">
          <i class="fa-solid fa-map-location-dot"></i>
          <span class="text-base">
            Find on Google Maps
          </span>
        </a>
      </div>
      <div class="col-span-2 grid grid-cols-4 grid-rows-2 gap-4">
        <img class="h-full rounded-md col-span-2 row-span-2" src="https://a0.muscache.com/im/pictures/miso/Hosting-49396733/original/f2c1c289-d3f9-4189-a721-7ae5525d891e.jpeg?im_w=960" alt="Image of the stay">
        <img class="h-full rounded-md" src="https://a0.muscache.com/im/pictures/miso/Hosting-49396733/original/c6ca3076-ba8d-49d5-b11c-3d9f08567c9d.jpeg?im_w=720" alt="Image of the stay">
        <img class="h-full rounded-md" src="https://a0.muscache.com/im/pictures/a5e1b1f0-ce51-4889-9981-4663393e91af.jpg?im_w=720" alt="Image of the stay">
        <img class="h-full rounded-md" src="https://a0.muscache.com/im/pictures/e3ab714a-a6e0-41c6-8c2b-5b0843be9292.jpg?im_w=720" alt="Image of the stay">
        <img class="h-full rounded-md" src="https://a0.muscache.com/im/pictures/fe8493e6-cef5-46af-854b-145efe6880fc.jpg?im_w=720" alt="Image of the stay">
      </div>
    </section>

  </article>

@endsection
