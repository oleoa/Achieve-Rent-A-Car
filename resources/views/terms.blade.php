@extends('layouts.main')
@php $title = 'title.terms'; @endphp
@section('main')

  <article class="text-start xl:px-64 px-4 py-4 space-y-4">
      
    <h3>
      @lang('terms.title')
    </h3>

    <h4>
      @lang('terms.subtitle')
    </h4>

    <h5>
      @lang('terms.1.title')
    </h5>

    <ul>
      @for ($i = 1; $i <= 9; $i++)
        <li>@lang('terms.1.'.$i)</li>
      @endfor
    </ul>

    <h5>
      @lang('terms.2.title')
    </h5>
    
    <ul>
      @for ($i = 1; $i <= 4; $i++)
        <li>@lang('terms.2.'.$i)</li>
      @endfor
    </ul>

    <h5>
      @lang('terms.2.paragraph')
    </h5>

    <ul>
      @for ($i = 5; $i <= 14; $i++)
        <li>@lang('terms.2.'.$i)</li>
      @endfor
    </ul>

    <h5>
      @lang('terms.3.title')
    </h5>

    <ul>
      @for ($i = 1; $i <= 2; $i++)
        <li>@lang('terms.3.'.$i)</li>
      @endfor
    </ul>

    <h5>
      @lang('terms.3.paragraph')
    </h5>

    <h5>
      @lang('terms.4')
    </h5>

    <h5>
      @lang('terms.5')
    </h5>

    <h5>
      @lang('terms.6')
    </h5>
    
    <h5>
      @lang('terms.7')
    </h5>

    <h5>
      @lang('terms.8')
    </h5>

    <h5>
      @lang('terms.9.title')
    </h5>

    <ul>
      @for ($i = 1; $i <= 8; $i++)
        <li>@lang('terms.9.'.$i)</li>
      @endfor
    </ul>

    <h5>
      @lang('terms.9.subtitle')
    </h5>

    <ul>
      @for ($i = 9; $i <= 19; $i++)
        <li>@lang('terms.9.'.$i)</li>
      @endfor
      <ul class="ps-6">
        @for ($i = 1; $i <= 3; $i++)
          <li>@lang('terms.9.19.'.$i)</li>
        @endfor
      </ul>
      @for ($i = 20; $i <= 21; $i++)
        <li>@lang('terms.9.'.$i)</li>
      @endfor
    </ul>

    <h5>
      @lang('terms.9.paragraph')
    </h5>

    <h5>
      @lang('terms.10')
    </h5>

    <h5>
      @lang('terms.11.title')
    </h5>

    <ul>
      @for ($i = 1; $i <= 7; $i++)
        <li>@lang('terms.11.'.$i)</li>
      @endfor
      <ul class="ps-6">
        @for ($i = 1; $i <= 4; $i++)
          <li>@lang('terms.11.7.'.$i)</li>
        @endfor
      </ul>
      @for ($i = 8; $i <= 10; $i++)
        <li>@lang('terms.11.'.$i)</li>
      @endfor
    </ul>

    <h5>
      @lang('terms.11.paragraph')
    </h5>

    <h5>
      @lang('terms.12')
    </h5>

    <h5>
      @lang('terms.13')
    </h5>

    <h5>
      @lang('terms.14')
    </h5>

    <h5>
      @lang('terms.15')
    </h5>

    <h5>
      @lang('terms.16')
    </h5>

    <h5>
      @lang('terms.17')
    </h5>

  </article>

@endsection
