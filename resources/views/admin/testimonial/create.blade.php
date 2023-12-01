<x-admin-layout>
    <section class="breadcrumb_area">
        <ul class="breadcrumb">
            <li>
                <a href="{{route('admin.dashboard')}}">Home</a>
            </li>
            <li>
                <a href="{{route('admin.testimonial.index')}}">Project</a>
            </li>
            <li>
                <span>Create</span>
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
    <!-- breadcrumb area end -->
    <!-- main body start  -->
    <section class="main-body">
        <!-- ================================================= -->
        <!-- Content Area start  -->
        <div class="content main-container">
            <div class="heading">
                <h3>Create Service</h3>
            </div>
            <form action="{{route('admin.testimonial.store')}}" method="POST" class="form" enctype="multipart/form-data">
                @csrf
                <div class="form_group">
                    <label for="name" class="label">Name</label>
                    <input type="text" name="name" class="form_control" id="name" placeholder="Enter Project name">
                    @error('name')
                        <div class="error">{{$message}}</div>
                    @enderror
                </div>
                <div class="form_group">
                    <label for="location" class="label">Location</label>
                    <input type="text" name="location" class="form_control" id="location" placeholder="Enter Project location">
                    @error('location')
                        <div class="error">{{$message}}</div>
                    @enderror
                </div>
                <div class="form_group">
                    <label for="description" class="label">Description</label>
                    <input type="text" name="description" class="form_control" id="description" placeholder="Enter Project description">
                    @error('description')
                        <div class="error">{{$message}}</div>
                    @enderror
                </div>
                <div class="form_group">
                    <label for="status" class="label">Status</label>
                    <select name="status" id="status" class="form_select">
                        <option value="">--select Status---</option>
                        <option value="1">Publish</option>
                        <option value="2">Unpublish</option>
                    </select>
                </div>
                <button type="submit" class="butn butn_success">Submit</button>
            </form>
        </div>
        <!-- Content Area end  -->
    </section>
</x-admin-layout>
