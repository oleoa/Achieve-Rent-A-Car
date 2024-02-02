@extends('layout')
@section('main')

  <main>
  
    <!-- Banner -->
    <div style="background-image: url('/img/titles/contact-min.jpg')" class="h-52 flex flex-col justify-center items-center bg-cover bg-no-repeat bg-center">
      <h1 class="text-white text-center font-black text-6xl">@lang('Contact.Us-Banner-Title')</h1>
    </div>

    <!-- Contact -->
    <div class="xl:px-margin xl:grid xl:grid-cols-3 px-4 py-8">
      
      <!-- Contact Info -->
      <div class="flex flex-col gap-4 col-span-1 pb-4">
        <div class="xl:px-0">
          <div class="flex items-center">
            <h3 class="font-bold">WhatsApp</h3>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 pl-2" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#25d366" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
          </div>
          <h3>+351</h3>
        </div>
        <div class="xl:px-0">
          <div class="flex items-center">
            <h3 class="font-bold">Email</h3>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 pl-2" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#000000" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>
          </div>
          <a href="mailto:info@achieverentacar.com" class="text-flagBlue underline" title="Send Us An Email"><h3>info@achieverentacar.com</h3></a>
        </div>
      </div>
  
      <!-- Contact Form -->
      <form action="{{route('contact-send')}}" method="POST" class="flex flex-col space-y-4 col-span-2 xl:p-0 pb-4">
        @csrf
        <input class="shadow-lg px-4 py-2 bg-zinc-200 rounded-md" type="text" name="name" placeholder="@lang('Contact.Us-Form-Input-Name')">
        <input class="shadow-lg px-4 py-2 bg-zinc-200 rounded-md" type="email" name="email" placeholder="@lang('Contact.Us-Form-Input-Email')">
        <input class="shadow-lg px-4 py-2 bg-zinc-200 rounded-md" type="text" name="phone" placeholder="@lang('Contact.Us-Form-Input-Phone')">
        <textarea class="shadow-lg px-4 py-2 bg-zinc-200 rounded-md" name="message" placeholder="@lang('Contact.Us-Form-Input-Message')" cols="30" rows="5"></textarea>
        <input class="shadow-lg px-4 py-2 bg-zinc-200 rounded-md hover:bg-zinc-10 hover:shadow-xl loaderActivator" type="submit" value="@lang('Contact.Us-Form-Button')">
        @if(session('success'))
          <div class="alert alert-success text-green-600">
            @lang(session('success'))
          </div>
        @endif
      </form>

    </div>

  </main>

@endsection
