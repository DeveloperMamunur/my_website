<x-admin-layout>
    <section class="breadcrumb_area">
        <ul class="breadcrumb">
            <li>
                <a href="{{route('admin.dashboard')}}">Home</a>
            </li>
            <li>
                <span>Users</span>
            </li>
        </ul>
        <div class="breadcrumb_end">
            {{-- <a class="butn butn_secondary butn_sm" href="{{route('admin.project.create')}}">
                <span class="material-symbols-outlined">
                    add
                </span>
                <span>Project</span>
            </a> --}}
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
                        <th>Name</th>
                        <th>Email</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @php
                            $x = 1;
                        @endphp
                        @foreach ($users as $user)
                        <tr class="center">
                            <td>{{ $x++ }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if ($user->image)
                                    <img src="{{ asset($user->image) }}" width="100px" />
                                @else
                                    <img src="{{ asset('assets/backend/images/avatar.jpg') }}" width="100px" class="profile_img" />
                                @endif
                            </td>
                            <td>{{ $user->status == 1 ? 'Active': 'Block' }}</td>
                            <td class="action">
                                @if ($user->status == 1)
                                    <form action="{{route('admin.user.block', $user->id )}}" method="POST">
                                        @csrf
                                        @method('put')
                                        <button type="submit" class="butn butn_info butn_sm delete">click to Block</button>
                                    </form>
                                 @else
                                    <form action="{{route('admin.user.unblock', $user->id )}}" method="POST">
                                        @csrf
                                        @method('put')
                                        <button type="submit" class="butn butn_info butn_md delete">click to Active</button>
                                    </form>
                                @endif
                                <a href="{{route('admin.user.show',$user->id)}}" class="butn butn_info butn_sm butn_eye">
                                    <span class="material-symbols-outlined ">
                                        visibility
                                    </span>
                                    View
                                </a>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
                <div class="pagination pg_body">
                    {{$users->links('vendor.pagination.default')}}
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
