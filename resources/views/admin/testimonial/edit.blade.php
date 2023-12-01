<x-admin-layout>
    <section class="breadcrumb_area">
        <ul class="breadcrumb">
            <li>
                <a href="{{route('admin.dashboard')}}">Home</a>
            </li>
            <li>
                <a href="{{route('admin.testimonial.index')}}">Testimonial</a>
            </li>
            <li>
                <span>Edit</span>
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
                <h3>Edit Service</h3>
            </div>
            <form action="{{route('admin.testimonial.update', $testimonial->id)}}" method="post" class="form" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form_group">
                    <label for="name" class="label">Name</label>
                    <input type="text" value="{{$testimonial->name}}" name="name" class="form_control" id="name" placeholder="Enter Project name">
                </div>
                <div class="form_group">
                    <label for="location" class="label">Project Link</label>
                    <input type="text" value="{{$testimonial->location}}" name="location" class="form_control" id="location" placeholder="Enter Project location">
                </div>
                <div class="form_group">
                    <label for="description" class="label">Description</label>
                    <input type="text" value="{{$testimonial->description}}" name="description" class="form_control" id="description" placeholder="Enter Project description">
                </div>
                <div class="form_group">
                    <label for="status" class="label">Status</label>
                    <select name="status" id="status" class="form_select">
                        <option value="">--select Status---</option>
                        <option value="1" {{$testimonial->status ==1 ? 'selected':'' }}>Publish</option>
                        <option value="2" {{$testimonial->status ==2 ? 'selected':'' }}>>Unpublish</option>
                    </select>
                </div>
                <button type="submit" class="butn butn_success">Update</button>
            </form>
        </div>
        <!-- Content Area end  -->
    </section>
</x-admin-layout>
