@extends('layouts.main')
@section('main')

    <div class="xl:px-margin px-4 py-4 flex flex-col gap-4">

        <!-- Title -->
        <h1>@lang('Terms-Title')</h1>

        <!-- Introduction -->
        <p>@lang('Terms-Introduction')</p>

        <!-- Section 1 -->
            <h4 class="font-medium">@lang('Terms-Section.1-Title')</h4>
            <ul>
                @for($i = 1; $i <= 9; $i++)
                    <li>@lang('Terms-Section.1-Ul.1-Li.'.$i)</li>
                @endfor
            </ul>
        <!-- End Section 1 -->

        <!-- Section 2 -->
            <h4 class="font-medium">@lang('Terms-Section.2-Title')</h4>
            <ul>
                @for($i = 1; $i <= 4; $i++)
                    <li>@lang('Terms-Section.2-Ul.1-Li.'.$i)</li>
                @endfor
            </ul>
            <p>@lang('Terms-Section.2-P.1')</p>
            <p>@lang('Terms-Section.2-P.2')</p>
            <ul>
                @for($i = 1; $i <= 10; $i++)
                    <li>@lang('Terms-Section.2-Ul.2-Li.'.$i)</li>
                @endfor
            </ul>
            <p>@lang('Terms-Section.2-P.3')</p>
        <!-- End Section 2 -->

        <!-- Section 3 -->
            <h4 class="font-medium">@lang('Terms-Section.3-Title')</h4>
            <p>@lang('Terms-Section.3-P.1')</p>
            <ul>
                @for($i = 1; $i <= 3; $i++)
                    <li>@lang('Terms-Section.3-Ul.1-Li.'.$i)</li>
                @endfor
            </ul>
            <p>@lang('Terms-Section.3-P.2')</p>
        <!-- End Section 3 -->

        <!-- Section 4 -->
            <h4 class="font-medium">@lang('Terms-Section.4-Title')</h4>
            <p>@lang('Terms-Section.4-P.1')</p>
            <p>@lang('Terms-Section.4-P.2')</p>
            <p>@lang('Terms-Section.4-P.3')</p>
            <p>@lang('Terms-Section.4-P.4')</p>
        <!-- End Section 4 -->

        <!-- Section 5 -->
            <h4 class="font-medium">@lang('Terms-Section.5-Title')</h4>
            <p>@lang('Terms-Section.5-P.1')</p>
        <!-- End Section 5 -->

        <!-- Section 6 -->
            <h4 class="font-medium">@lang('Terms-Section.6-Title')</h4>
            <p>@lang('Terms-Section.6-P.1')</p>
        <!-- End Section 6 -->

        <!-- Section 7 -->
            <h4 class="font-medium">@lang('Terms-Section.7-Title')</h4>
        <!-- End Section 7 -->

        <!-- Section 8 -->
            <h4 class="font-medium">@lang('Terms-Section.8-Title')</h4>
        <!-- End Section 8 -->

        <!-- Section 9 -->
            <h4 class="font-medium">@lang('Terms-Section.9-Title')</h4>
            <ul>
                @for($i = 1; $i <= 6; $i++)
                    <li>@lang('Terms-Section.9-Ul.1-Li.'.$i)</li>
                @endfor
            </ul>
            <p>@lang('Terms-Section.9-P.1')</p>
            <ul>
                @for($i = 1; $i <= 12; $i++)
                    <li>@lang('Terms-Section.9-Ul.2-Li.'.$i)</li>
                    @if($i == 11)
                        <ul class="ps-6">
                            @for($j = 1; $j <= 3; $j++)
                                <li>@lang('Terms-Section.9-Ul.2-Li.11-Ul.1-Li.'.$j)</li>
                            @endfor
                        </ul>
                    @endif
                @endfor
            </ul>
            <p>@lang('Terms-Section.9-P.2')</p>
            <p>@lang('Terms-Section.9-P.3')</p>
        <!-- End Section 9 -->

        <!-- Section 10 -->
            <h4 class="font-medium">@lang('Terms-Section.10-Title')</h4>
        <!-- End Section 10 -->

        <!-- Section 11 -->
            <h4 class="font-medium">@lang('Terms-Section.11-Title')</h4>
            <ul>
                @for($i = 1; $i <= 10; $i++)
                    <li>@lang('Terms-Section.11-Ul.1-Li.'.$i)</li>
                    @if($i == 7)
                        <ul class="ps-6">
                            @for($j = 1; $j <= 4; $j++)
                                <li>@lang('Terms-Section.11-Ul.1-Li.7-Ul.1-Li.'.$j)</li>
                            @endfor
                        </ul>
                    @endif
                @endfor
            </ul>
            <p>@lang('Terms-Section.11-P.1')</p>
        <!-- End Section 11 -->

        <!-- Section 12 -->
            <h4 class="font-medium">@lang('Terms-Section.12-Title')</h4>
            <p>@lang('Terms-Section.12-P.1')</p>
            <p>@lang('Terms-Section.12-P.2')</p>
        <!-- End Section 12 -->

        <!-- Section 13 -->
            <h4 class="font-medium">@lang('Terms-Section.13-Title')</h4>
        <!-- End Section 13 -->

        <!-- Section 14 -->
            <h4 class="font-medium">@lang('Terms-Section.14-Title')</h4>
        <!-- End Section 14 -->

        <!-- Section 15 -->
            <h4 class="font-medium">@lang('Terms-Section.15-Title')</h4>
        <!-- End Section 15 -->

        <!-- Section 16 -->
            <h4 class="font-medium">@lang('Terms-Section.16-Title')</h4>
            <p>@lang('Terms-Section.16-P.1')</p>
        <!-- End Section 16 -->

        <!-- Section 17 -->
            <h4 class="font-medium">@lang('Terms-Section.17-Title')</h4>
        <!-- End Section 17 -->

    </div>

@endsection
