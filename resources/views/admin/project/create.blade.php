<x-admin-layout>
    <section class="breadcrumb_area">
        <ul class="breadcrumb">
            <li>
                <a href="{{route('admin.dashboard')}}">Home</a>
            </li>
            <li>
                <a href="{{route('admin.project.index')}}">Project</a>
            </li>
            <li>
                <span>Create</span>
            </li>
        </ul>
        <div class="breadcrumb_end">
            <a href="{{route('admin.project.index')}}" class="butn butn_secondary butn_sm">
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
            <form action="{{route('admin.project.store')}}" method="POST" class="form" enctype="multipart/form-data">
                @csrf
                <div class="form_group">
                    <label for="title" class="label">Title</label>
                    <input type="text" name="title" class="form_control" id="title" placeholder="Enter Project title">
                    @error('title')
                        <div class="error">{{$message}}</div>
                    @enderror
                </div>
                <div class="form_group">
                    <label for="category_id" class="label">Category</label>
                    <select name="category_id" id="category_id" class="form_select">
                        <option value="">--Select Category---</option>
                        @foreach ($project_cats as $cat)
                            <option value="{{$cat->id}}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="error">{{$message}}</div>
                    @enderror
                    {{-- <input type="text" name="category" class="form_control" id="category" placeholder="Enter Project category"> --}}
                </div>
                <div class="form_group">
                    <label for="description" class="label">Description</label>
                    <input type="text" name="description" class="form_control" id="description" placeholder="Enter Project description">
                    @error('description')
                        <div class="error">{{$message}}</div>
                    @enderror
                </div>
                <div class="form_group">
                    <label for="project_link" class="label">Project Link</label>
                    <input type="text" name="project_link" class="form_control" id="project_link" placeholder="Enter Project project_link">
                    @error('project_link')
                        <div class="error">{{$message}}</div>
                    @enderror
                </div>
                <div class="form_group">
                    <label for="image" class="label">Image</label>
                    <input type="file" name="image" class="form_control" id="image" placeholder="Enter Project image">
                    @error('image')
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
                    @error('status')
                        <div class="error">{{$message}}</div>
                    @enderror
                </div>
                <button type="submit" class="butn butn_success">Submit</button>
            </form>
        </div>
        <!-- Content Area end  -->
    </section>
</x-admin-layout>
