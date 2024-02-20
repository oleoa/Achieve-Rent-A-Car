<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <!-- Head -->
    <head>

        <!-- Author (Me) -->
        <meta name="author" content="Leonardo Abreu de Paulo, leonardo.abreu.de.paulo@gmail.com">

        <!-- Needed Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Description For Search Engine Optimization -->
        <meta name="description" content="@lang('Meta-Description')">

        <!-- Languages For Search Engine Optimization -->
        <link rel="alternate" href="https://achieverentacar.com/" hreflang="x-default"/>
        <link rel="alternate" href="https://achieverentacar.com/en" hreflang="en"/>
        <link rel="alternate" href="https://achieverentacar.com/en/about" hreflang="en"/>
        <link rel="alternate" href="https://achieverentacar.com/en/faq" hreflang="en"/>
        <link rel="alternate" href="https://achieverentacar.com/en/contact" hreflang="en"/>
        <link rel="alternate" href="https://achieverentacar.com/en/terms" hreflang="en"/>
        <link rel="alternate" href="https://achieverentacar.com/en/privacy" hreflang="en"/>
        <link rel="alternate" href="https://achieverentacar.com/pt" hreflang="pt"/>
        <link rel="alternate" href="https://achieverentacar.com/pt/about" hreflang="pt"/>
        <link rel="alternate" href="https://achieverentacar.com/pt/faq" hreflang="pt"/>
        <link rel="alternate" href="https://achieverentacar.com/pt/contact" hreflang="pt"/>
        <link rel="alternate" href="https://achieverentacar.com/pt/terms" hreflang="pt"/>
        <link rel="alternate" href="https://achieverentacar.com/pt/privacy" hreflang="pt"/>
        
        <!-- Canonical Pages For Search Engine Optimization -->
        <link rel="canonical" href="https://achieverentacar.com/en"/>

        <!-- Open Graph / Facebook -->
        <meta property="og:title" content="@lang('Meta-Facebook-Title')"/>
        <meta property="og:description" content="@lang('Meta-Facebook-Description')"/>
        <meta property="og:type" content="website"/>
        <meta property="og:site_name" content="Achieve Rent a Car"/>
        <meta property="og:url" content="https://achieverentacar.com/en"/>
        <meta property="og:image" content="https://achieverentacar.com/img/logos/logo.png"/>

        <!-- Twitter -->
        <meta name="twitter:card" content="summary"/>
        <meta name="twitter:site" content="Achieve Rent A Car"/>
        <meta name="twitter:title" content="@lang('Meta-Twitter-Title')"/>
        <meta name="twitter:description" content="@lang('Meta-Twitter-Description')"/>
        <meta name="twitter:creator" content="@o_leo_a"/>
        <meta name="twitter:image" content="http://achieverentacar.com/img/logos/logo.png"/>

        <!-- Resources (CSS and JS) -->
        @vite(['resources/css/app.css', 'resources/js/client.js'])

        <!-- Page Title -->
        <title>@lang($title)</title>

    </head>

    <!-- Body -->
    <body class="min-h-screen grid grid-rows-1">

        <!-- Header Content -->
        <nav class="fixed top-0 left-0 w-full flex flex-col">

            <!-- Info if the user is in the local site -->
            <x-local-site :locale="$locale"/>

            <!-- Discounts -->
            <x-discounts :discount="$discount" :locale="$locale"/>

            <!-- Navbar -->
            <x-navbar :menu="$menu"/>

            <!-- Sidebar -->
            <x-sidebar :menu="$menu"/>

        </nav>

        <!-- Loader -->
        <x-loader/>

        <!-- Main Content -->
        <main class="pt-navbar row-span-1">

            @yield('main')

        </main>

        <!-- Whatsapp button -->
        <x-whatsapp/>

        <!-- Footer -->
        <x-footer :locale="$locale"/>

    </body>

</html>
