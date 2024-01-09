@extends('layout')
@section('main')
  <main class="xl:px-margin xl:grid xl:grid-cols-3">
    <h1 class="font-bold col-span-3 pb-6 xl:text-start text-center">@lang('Contact Us')</h1>
    <div class="flex flex-col gap-4 col-span-1">
      <div class="xl:px-0 px-4">
        <h3 class="font-bold">@lang('Mobile Number')</h3>
        <h3>+351968178195</h3>
      </div>
      <div class="xl:px-0 px-4">
        <h3 class="font-bold">@lang('Email')</h3>
        <a href="mailto:info@achieverentacar.com"><h3>info@achieverentacar.com</h3></a>
      </div>
    </div>
    <form action="" class="flex flex-col space-y-4 col-span-2 xl:p-0 p-4">
      <input class="shadow-lg px-4 py-2 bg-zinc-200 rounded-md" type="text" name="name" placeholder="Name">
      <input class="shadow-lg px-4 py-2 bg-zinc-200 rounded-md" type="email" name="email" placeholder="Email">
      <textarea class="shadow-lg px-4 py-2 bg-zinc-200 rounded-md" name="message" placeholder="Message" cols="30" rows="5"></textarea>
      <input class="shadow-lg px-4 py-2 bg-zinc-200 rounded-md hover:bg-zinc-10 hover:shadow-xl" type="submit" value="@lang('Send')">
    </form>
  </main>
@endsection
