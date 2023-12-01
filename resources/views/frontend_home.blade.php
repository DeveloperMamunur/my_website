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
                <!-- ================heroes section start ==================== -->
                @include('include.hero')
                <!-- ================heroes section end ==================== -->

                <!-- ================services section start ==================== -->
                @include('include.services')
                <!-- ================services section end ==================== -->
                <!-- ================about section start ==================== -->
                @include('include.about')
                <!-- ================about section end ==================== -->
                <!-- ================skills section start ==================== -->
                @include('include.skills')
                <!-- ================skills section end ==================== -->
                <!-- ================project section start ==================== -->
                @include('include.project')
                <!-- ================project section end ==================== -->
                <!-- ================work_process section start ==================== -->
                @include('include.work_process')
                <!-- ================work_process section end ==================== -->
                <!-- ================testimonial section start ==================== -->
                @include('include.testimonial')
                <!-- ================testimonial section end ==================== -->
                <!-- ================contact section start ==================== -->
                @include('include.contact')
                <!-- ================contact section end ==================== -->
            </main>
            <!-- ===============main body part end =========== -->
            <!-- =========footer start=================== -->
            @include('include.footer')
            <!-- ===========footer end=================== -->
        </div>
        <!-- ==============section modal start ====================-->
        <!-- ==========hire me modal start============ -->
        @include('include.contact_modal')
    <!-- ==========hire me modal end============ -->

    <!-- ==========service details me modal start============ -->
        @include('include.service_modal')
          <!-- ==========service details me modal end============ -->

          <!-- ==========project modal start============ -->
        @include('include.project_modal')
          <!-- ==========project modal end============ -->

          <!-- ==========project modal live frame start============ -->
        @include('include.project_live')
          <!-- ==========project modal live frame end============ -->

          <!-- ===========javascript file section start============ -->
        @include('include.js_link')

          <!-- ===========javascript file section end============ -->
    </body>
</html>
