@extends('layouts.dashboard')
@section('main')

    <div class="py-4 space-y-4 p-4">

        <!-- Title -->
        <div class="flex items-center justify-between gap-4">

            <!-- Title -->
            <h1 class="">@lang('Views')</h1>

            <!-- Delete All Button -->
            <form action="{{route('dashboard.views.delete')}}" method="POST">
                @method('DELETE')
                @csrf
                <input type="submit" class="hover:text-white cursor-pointer text-red-500 hover:bg-red-500 px-4 py-2 rounded-lg border-2  border-red-500" value="Delete All">
            </form>

        </div>

        <!-- Filters -->
        <div class="w-full flex flex-col gap-4">
            
            <!-- Range -->
            <div class="p-2 w-full bg-neutral-800 rounded flex gap-2">
                <a class="px-4 py-2 {{$filters['range'] == 'today' ? 'border-2 border-blue-500' : ''}} bg-neutral-700 hover:bg-neutral-600 hover:text-white rounded" href="{{route('dashboard.'.$current.'.list', array_replace($filters, array('range' => 'today')))}}">Today</a>
                <a class="px-4 py-2 {{$filters['range'] == 'week' ? 'border-2 border-blue-500' : ''}} bg-neutral-700 hover:bg-neutral-600 hover:text-white rounded" href="{{route('dashboard.'.$current.'.list', array_replace($filters, array('range' => 'week')))}}">Week</a>
                <a class="px-4 py-2 {{$filters['range'] == 'motnh' ? 'border-2 border-blue-500' : ''}} bg-neutral-700 hover:bg-neutral-600 hover:text-white rounded" href="{{route('dashboard.'.$current.'.list', array_replace($filters, array('range' => 'motnh')))}}">Month</a>
                <a class="px-4 py-2 {{$filters['range'] == 'year' ? 'border-2 border-blue-500' : ''}} bg-neutral-700 hover:bg-neutral-600 hover:text-white rounded" href="{{route('dashboard.'.$current.'.list', array_replace($filters, array('range' => 'year')))}}">Year</a>
                <a class="px-4 py-2 {{$filters['range'] == 'all' ? 'border-2 border-blue-500' : ''}} bg-neutral-700 hover:bg-neutral-600 hover:text-white rounded" href="{{route('dashboard.'.$current.'.list', array_replace($filters, array('range' => 'all')))}}">All</a>
            </div>

            <!-- Language -->
            <div class="p-2 w-full bg-neutral-800 rounded flex gap-2">
                <a class="px-4 py-2 {{$filters['language'] == 'en' ? 'border-2 border-blue-500' : ''}} bg-neutral-700 hover:bg-neutral-600 hover:text-white rounded" href="{{route('dashboard.'.$current.'.list', array_replace($filters, array('language' => 'en')))}}">English</a>
                <a class="px-4 py-2 {{$filters['language'] == 'pt' ? 'border-2 border-blue-500' : ''}} bg-neutral-700 hover:bg-neutral-600 hover:text-white rounded" href="{{route('dashboard.'.$current.'.list', array_replace($filters, array('language' => 'pt')))}}">Portuguese</a>
                <a class="px-4 py-2 {{$filters['language'] == 'all' ? 'border-2 border-blue-500' : ''}} bg-neutral-700 hover:bg-neutral-600 hover:text-white rounded" href="{{route('dashboard.'.$current.'.list', array_replace($filters, array('language' => 'all')))}}">All</a>
            </div>
            
            <!-- Device -->
            <div class="p-2 w-full bg-neutral-800 rounded flex gap-2">
                <a class="px-4 py-2 {{$filters['device'] == '0' ? 'border-2 border-blue-500' : ''}} bg-neutral-700 hover:bg-neutral-600 hover:text-white rounded" href="{{route('dashboard.'.$current.'.list', array_replace($filters, array('device' => '0')))}}">Computer</a>
                <a class="px-4 py-2 {{$filters['device'] == '1' ? 'border-2 border-blue-500' : ''}} bg-neutral-700 hover:bg-neutral-600 hover:text-white rounded" href="{{route('dashboard.'.$current.'.list', array_replace($filters, array('device' => '1')))}}">Moblie</a>
                <a class="px-4 py-2 {{$filters['device'] == 'all' ? 'border-2 border-blue-500' : ''}} bg-neutral-700 hover:bg-neutral-600 hover:text-white rounded" href="{{route('dashboard.'.$current.'.list', array_replace($filters, array('device' => 'all')))}}">All</a>
            </div>

        </div>

        <!-- Total -->
        <div class="bg-neutral-800 rounded p-4 flex gap-4 items-center justify-start">
            <h2>Total</h2>
            <h3>{{$views['total']}} Views</h3>
            <h3>{{$views['percentage']}}% Of All</h3>
        </div>

        <!-- Pages -->
        <div class="grid xl:grid-cols-3 gap-4">

            <!-- Home -->
            <div class="bg-neutral-700 text-center rounded flex flex-col gap-4 pb-4">
                <h2 class="bg-neutral-800 rounded-t py-2">Home</h2>
                <h3 class="flex justify-between px-4"><span>Views</span><span>{{$views['home']['total']}}</span></h3>
                <h3 class="flex justify-between px-4"><span>Percentage</span><span>{{$views['home']['percentage']}}%</span></h3>
            </div>

            <!-- Fleet -->
            <div class="bg-neutral-700 text-center rounded flex flex-col gap-4 pb-4">
                <h2 class="bg-neutral-800 rounded-t py-2">Fleet</h2>
                <h3 class="flex justify-between px-4"><span>Views</span><span>{{$views['fleet']['total']}}</span></h3>
                <h3 class="flex justify-between px-4"><span>Percentage</span><span>{{$views['fleet']['percentage']}}%</span></h3>
            </div>

            <!-- About Us -->
            <div class="bg-neutral-700 text-center rounded flex flex-col gap-4 pb-4">
                <h2 class="bg-neutral-800 rounded-t py-2">About Us</h2>
                <h3 class="flex justify-between px-4"><span>Views</span><span>{{$views['about']['total']}}</span></h3>
                <h3 class="flex justify-between px-4"><span>Percentage</span><span>{{$views['about']['percentage']}}%</span></h3>
            </div>

            <!-- Car Seats -->
            <div class="bg-neutral-700 text-center rounded flex flex-col gap-4 pb-4">
                <h2 class="bg-neutral-800 rounded-t py-2">Car Seats</h2>
                <h3 class="flex justify-between px-4"><span>Views</span><span>{{$views['seats']['total']}}</span></h3>
                <h3 class="flex justify-between px-4"><span>Percentage</span><span>{{$views['seats']['percentage']}}%</span></h3>
            </div>

            <!-- FAQ -->
            <div class="bg-neutral-700 text-center rounded flex flex-col gap-4 pb-4">
                <h2 class="bg-neutral-800 rounded-t py-2">FAQ</h2>
                <h3 class="flex justify-between px-4"><span>Views</span><span>{{$views['faq']['total']}}</span></h3>
                <h3 class="flex justify-between px-4"><span>Percentage</span><span>{{$views['faq']['percentage']}}%</span></h3>
            </div>

            <!-- Contact Us -->
            <div class="bg-neutral-700 text-center rounded flex flex-col gap-4 pb-4">
                <h2 class="bg-neutral-800 rounded-t py-2">Contact Us</h2>
                <h3 class="flex justify-between px-4"><span>Views</span><span>{{$views['contact']['total']}}</span></h3>
                <h3 class="flex justify-between px-4"><span>Percentage</span><span>{{$views['contact']['percentage']}}%</span></h3>
            </div>            

        </div>

    </div>
    
@endsection
