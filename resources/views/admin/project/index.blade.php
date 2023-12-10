<x-admin-layout>
    <section class="breadcrumb_area">
        <ul class="breadcrumb">
            <li>
                <a href="{{route('admin.dashboard')}}">Home</a>
            </li>
            <li>
                <span>Project</span>
            </li>
        </ul>
        <div class="breadcrumb_end">
            <button class="butn butn_secondary butn_sm" onclick="document.getElementById('project_cat').style.display='flex'">
                <span class="material-symbols-outlined">
                    add
                </span>
                <span>Category</span>
            </button>
            <a class="butn butn_secondary butn_sm" href="{{route('admin.project.create')}}">
                <span class="material-symbols-outlined">
                    add
                </span>
                <span>Project</span>
            </a>
        </div>
    </section>
    <!-- breadcrumb area end -->
    <!-- main body start  -->
    <section class="main-body">
        <!-- ================================================= -->
        <!-- Content Area start  -->
        <div class="content">
            <div class="main-cards">
                <table class="table">
                    <thead>
                        <th>Sl No</th>
                        <th>Title</th>
                        <th>category</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>project_link</th>
                        <th>Status</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @php
                            $x = 1;
                        @endphp
                        @foreach ($projects as $project)
                        <tr class="center">
                            <td>{{ $x++ }}</td>
                            <td>{{ $project->title }}</td>
                            @foreach ($project_cats as $cat)
                                @if ($cat->id == $project->category_id)
                                    <td>{{ $cat->name }}</td>
                                @endif
                            @endforeach
                            <td>{{ $project->description }}</td>
                            <td><img src="{{ asset($project->image) }}" width="100px" /></td>
                            <td>{{ $project->project_link }}</td>
                            <td>{{ $project->status == 1 ? 'Publish': 'Unpublish' }}</td>
                            <td class="action">
                                <a href="{{route('admin.project.edit', $project->id )}}" class="butn butn_warning butn_md">Edit</a>
                                <form action="{{ route('admin.project.destroy', $project->id )}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="butn butn_danger butn_md delete">Delete</button>
                                </form>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
                <div class="pagination pg_body">
                    {{$projects->links('vendor.pagination.default')}}
                </div>
            </div>
        </div>
        <!-- Content Area end  -->
    </section>

    <div id="project_cat" class="modal">

        <div class="modal_container">
            <span onclick="document.getElementById('project_cat').style.display='none'"
              class="close" title="Close Modal">&times;</span>
          <div class="modal_header">
              <h5>Create Project Category</h5>
          </div>
          <div class="modal_body">
            <form action="{{route('admin.project.category.store')}}" method="POST" class="form">
                @csrf
                <div class="form_group">
                    <label for="name" class="label_modal modal_label">Category Name</label>
                    <input type="text" name="name" class="form_control" id="name" placeholder="Enter Project name">
                </div>
                <div class="form_group">
                    <label for="status" class="label_modal modal_label">Status</label>
                    <select name="status" id="status" class="form_select">
                        <option value="">--select Status---</option>
                        <option value="1">Publish</option>
                        <option value="2">Unpublish</option>
                    </select>
                </div>
                <button type="submit" class="butn butn_success">Submit</button>
            </form>
          </div>
        </div>
      </div>
</x-admin-layout>
