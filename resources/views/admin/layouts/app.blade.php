<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Admin Dashboard</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet" />
        <!-- Scripts -->

        @vite(['resources/css/app.css'])
        @stack('chat')
    </head>
    <body>
        <div class="container">

            @include('toaster.toaster')
            <!-- <input type="checkbox" id="menu_css_toggle"> -->
            <!-- side navbar start  -->
            @include('admin.layouts.navigation')
            <!-- side navbar end  -->
            <!-- =========================================== -->
            <!-- content body start  -->
            <main class="content-body">
                <!-- =========================================== -->
                <!-- top navbar start  -->
                @include('admin.layouts.topNav')
                <!-- =========================================== -->
                <div class="main-page" id="main-page">
                    <!-- breadcrumb area start -->
                    {{ $slot }}

                    <!-- ============================================== -->
                    <!-- main body end  -->
                </div>
                <!-- =========================================== -->
                <!-- footer section start  -->
                <footer>
                    <div>Copyright © 2023, Md Mamunur Rashid. All Right Reserved</div>
                </footer>
                <!-- footer section end  -->
            </main>
            <!-- content body end  -->
        </div>
        <script src="{{asset('assets/backend/js/app.js')}}"></script>
    </body>
</html>
