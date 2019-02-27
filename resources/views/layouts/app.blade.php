<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <title>{{config('app.name', 'Contoso University')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{asset('css/custom.css')}}" rel="stylesheet">
        <!-- Scripts -->
        <script src="{{asset('js/app.js')}}"></script>
    </head>
    <body onload="hideSuffix();">
        @include('inc/navbar')
        <div class="container py-4">
            @include('inc.messages')
            @yield('content')
        </div>
        @yield('script')
    </body>
</html>
