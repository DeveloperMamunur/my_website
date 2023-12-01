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
                <span>Edit</span>
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
                <h3>Edit Service</h3>
            </div>
            <form action="{{route('admin.project.update', $project->id)}}" method="post" class="form" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form_group">
                    <label for="title" class="label">Title</label>
                    <input type="text" value="{{$project->title}}" name="title" class="form_control" id="title" placeholder="Enter Project title">
                    @error('title')
                        <div class="error">{{$message}}</div>
                    @enderror
                </div>
                <div class="form_group">
                    <label for="category_id" class="label">Category</label>
                    <select name="category_id" id="category_id" class="form_select">
                        <option value="">--Select Category---</option>
                        @foreach ($project_cats as $cat)
                            <option value="{{$cat->id}}" {{$project->category_id == $cat->id ? 'selected':''}}>{{ $cat->name }}</option>

                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="error">{{$message}}</div>
                    @enderror
                </div>
                <div class="form_group">
                    <label for="description" class="label">Description</label>
                    <input type="text" value="{{$project->description}}" name="description" class="form_control" id="description" placeholder="Enter Project description">
                    @error('description')
                        <div class="error">{{$message}}</div>
                    @enderror
                </div>
                <div class="form_group">
                    <label for="project_link" class="label">Project Link</label>
                    <input type="text" value="{{$project->project_link}}" name="project_link" class="form_control" id="project_link" placeholder="Enter Project project_link">
                    @error('project_link')
                        <div class="error">{{$message}}</div>
                    @enderror
                </div>
                <div class="form_group">
                    <label for="image" class="label">Image</label>
                    <input type="file" name="image" class="form_control" id="image" placeholder="Enter Project image">
                    <img src="{{asset($project->image)}}" width="200px" height="auto" style="margin-top: 15px;" alt="">
                </div>
                <div class="form_group">
                    <label for="status" class="label">Status</label>
                    <select name="status" id="status" class="form_select">
                        <option value="">--select Status---</option>
                        <option value="1" {{$project->status ==1 ? 'selected':'' }}>Publish</option>
                        <option value="2" {{$project->status ==2 ? 'selected':'' }}>>Unpublish</option>
                    </select>
                    @error('status')
                        <div class="error">{{$message}}</div>
                    @enderror
                </div>
                <button type="submit" class="butn butn_success">Update</button>
            </form>
        </div>
        <!-- Content Area end  -->
    </section>
</x-admin-layout>
