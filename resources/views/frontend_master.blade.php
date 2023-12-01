<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Md Mamunur Rashid</title>
        <link rel="icon" type="image/x-icon" href="{{asset('favicon.ico')}}">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="{{asset('assets/frontend/fonts/icomoon/style.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

        <!-- Styles -->
        @vite(['resources/css/frontend/app.scss'])
    </head>
    <body>
        <div class="body">
            <!-- ===============heading part start =========== -->
            @include('include.header')
            @include('toaster.toaster')
            <!-- ===============heading part start =========== -->
            <!-- ===============main body part start =========== -->
            <main>

                @yield('content')
            </main>
            <!-- ===============main body part end =========== -->
            <!-- =========footer start=================== -->
            @include('include.footer')
            <!-- ===========footer end=================== -->
        </div>


          <!-- ===========javascript file section start============ -->
        @include('include.js_link')

          <!-- ===========javascript file section end============ -->
    </body>
</html>
