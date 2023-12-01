<x-admin-layout>
    <section class="breadcrumb_area">
        <ul class="breadcrumb">
            <li>
                <a href="{{route('dashboard')}}">Home</a>
            </li>
            <li>
                <a href="{{route('services.index')}}">Services</a>
            </li>
            <li>
                <span>Create</span>
            </li>
        </ul>
        <div class="breadcrumb_end">
            <a href="{{route('services.index')}}" class="butn butn_secondary butn_sm">
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
            <form action="{{route('services.store')}}" method="POST" class="form">
                @csrf
                <div class="form_group">
                    <label for="title" class="label">Title</label>
                    <input type="text" name="title" class="form_control" id="title" placeholder="Enter service title">
                </div>
                <div class="form_group">
                    <label for="sort_desc" class="label">Sort Description</label>
                    <input type="text" name="sort_desc" class="form_control" id="sort_desc" placeholder="Enter Services sort_desc">
                </div>
                <div class="form_group">
                    <label for="icon" class="label">Icon</label>
                    <input type="text" name="icon" class="form_control" id="icon" placeholder="Enter Services icon">
                </div>
                <div class="form_group">
                    <label for="color" class="label">Color</label>
                    <input type="text" name="color" class="form_control" id="color" placeholder="Enter Services Color">
                </div>
                <div class="form_group">
                    <label for="status" class="label">Status</label>
                    <select name="status" id="status" class="form_control">
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
