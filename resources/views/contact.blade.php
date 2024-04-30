@extends('layout')
@php $title = 'title.contact'; @endphp
@section('main')

  <div style="background-image: url('/img/pages/contact/banner.jpg')" class="h-52 flex flex-col justify-center items-center bg-cover bg-no-repeat bg-center">
    <h1 class="text-white text-center font-black text-6xl">@lang('contact.banner')</h1>
  </div>

  <div class="xl:grid xl:grid-cols-3 px-default py-8">
      
    <div class="xl:flex xl:flex-col flex flex-col items-center md:grid md:grid-cols-2 gap-4 col-span-1 pb-4 order-2 p-4">

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
        <h4 class="font-medium leading-8">@lang('contact.opening.hours.deliveries.title')</h4>
        <h5>@lang('contact.opening.hours.deliveries.paragraph')</h5>
      </div>

    </div>

    <form action="{{route('contact-send', $locale)}}" method="POST" class="flex flex-col space-y-4 col-span-2 xl:p-0 pb-4 order-1">
      <h2 class="font-semibold">@lang('contact.form.title')</h2>
      @csrf

      <input class="border-2 border-red shadow-lg px-4 py-2 bg-zinc-200 rounded-md" type="text" name="name" placeholder="@lang('contact.form.name')">

      <input class="border-2 border-red shadow-lg px-4 py-2 bg-zinc-200 rounded-md" type="email" name="email" placeholder="@lang('contact.form.email')">

      <input class="border-2 border-red shadow-lg px-4 py-2 bg-zinc-200 rounded-md" type="text" name="phone" placeholder="@lang('contact.form.phone')">

      <textarea class="border-2 border-red shadow-lg px-4 py-2 bg-zinc-200 rounded-md" name="message" placeholder="@lang('contact.form.message')" cols="30" rows="5"></textarea>

      <input class="shadow-lg px-4 py-2 bg-yellow rounded-md hover:text-black hover:cursor-pointer hover:shadow-xl text-center load" type="submit" value="@lang('contact.form.submit')">

      @if(session('success'))
        <div class="alert alert-success text-green-600">
          @lang(session('success'))
        </div>
      @endif

    </form>

  </div>

@endsection
