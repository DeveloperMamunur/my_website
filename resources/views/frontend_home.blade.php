@extends('frontend_master')
@section('content')

<!-- ===============main body part start =========== -->
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

            <!-- ===============main body part end =========== -->

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
@endsection
