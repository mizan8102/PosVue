<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'UTC') }}</title>


        <!--Dashboard Link-->
 <!-- Favicon-->
 <link rel="icon" href="{{ asset('assets/favicon.ico') }}" type="image/x-icon">

 <!-- Google Fonts -->
 <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

 <!-- Bootstrap Core Css -->
 <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

 <!-- Waves Effect Css -->
 <link href="{{ asset('assets/plugins/node-waves/waves.css') }}" rel="stylesheet" />

 <!-- Animation Css -->
 <link href="{{ asset('assets/plugins/animate-css/animate.css') }}" rel="stylesheet" />

 <!-- Custom Css -->
 <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

 <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
 <link href="{{ asset('assets/css/themes/all-themes.css') }}" rel="stylesheet" />
        <!--End Dashboard Link-->
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
        <!-- Scripts -->
        @routes
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased theme-red">

        @inertia

        @env ('local')
            <script src="http://localhost:3000/browser-sync/browser-sync-client.js"></script>
        @endenv

      
    </body>
</html>
