<x-admin-layout>
    <section class="breadcrumb_area">
        <ul class="breadcrumb">
            <li>
                <a href="{{route('admin.dashboard')}}">Home</a>
            </li>
            <li>
                <span>Profile</span>
            </li>
        </ul>
        <div class="breadcrumb_end">
            <a href="{{route('admin.testimonial.index')}}" class="butn butn_secondary butn_sm">
                <span class="material-symbols-outlined">
                    west
                </span>
                <span>back</span>
            </a>
        </div>
    </section>

    <section class="main-body">
        <!-- ================================================= -->
        <!-- Content Area start  -->
        <div class="content main-container profile">
            @include('admin.profile.partials.update-profile-image-form')
        </div>

        <div class="content main-container profile" style="margin-top: 20px;">
            @include('admin.profile.partials.update-profile-information-form')
        </div>

        <div class="content main-container profile" style="margin-top: 20px;">
            @include('admin.profile.partials.update-phone-number-form')
        </div>

        <div class="content main-container profile" style="margin-top: 20px;">
            @include('admin.profile.partials.update-address-form')
        </div>

        <div class="content main-container profile" style="margin-top: 20px;">
            @include('admin.profile.partials.update-password-form')
        </div>
    </div>
</x-admin-layout>
