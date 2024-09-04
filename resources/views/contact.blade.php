@extends('layout')
@php $title = 'title.contact'; @endphp
@section('main')

  <div style="background-image: url('/img/pages/contact/banner.jpg')" class="h-52 flex flex-col justify-center items-center bg-cover bg-no-repeat bg-center">
    <h1 class="text-white text-center font-black text-6xl">@lang('contact.banner')</h1>
  </div>
      
  <div class="grid grid-cols-2 gap-4 order-2 px-default py-4 items-center justify-center justify-items-center">

    <div class="flex flex-col gap-4 w-full">

      <div class="xl:px-0">
        <div class="flex items-center gap-2">
          <h3 class="font-bold">WhatsApp</h3>
          <i class="fa-brands fa-whatsapp text-3xl" style="color: #25d366;"></i>
        </div>
        <h3>+351 938 342 970</h3>
      </div>

      <div class="xl:px-0">
        <div class="flex items-center gap-2">
          <h3 class="font-bold">Email</h3>
          <i class="fa-solid fa-envelope text-3xl"></i>
        </div>
        <a target="_blank" href="mailto:info@achieverentacar.com" class="text-red underline" title="Send Us An Email">
          <h3>info@achieverentacar.com</h3>
        </a>
      </div>

    </div>

    <div class="xl:px-0 w-full">
      <h3 class="font-bold leading-10">@lang('contact.opening.hours.title')</h3>
      <h4 class="font-medium leading-8">@lang('contact.opening.hours.commercial.title')</h4>
      <h5>@lang('contact.opening.hours.commercial.paragraph')</h5>
      <br/>
      <h4 class="font-medium leading-8">@lang('contact.opening.hours.deliveries.title')</h4>
      <h5>@lang('contact.opening.hours.deliveries.paragraph')</h5>
    </div>

  </div>

@endsection
