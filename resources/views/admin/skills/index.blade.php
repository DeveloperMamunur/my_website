<x-admin-layout>
    <section class="breadcrumb_area">
        <ul class="breadcrumb">
            <li>
                <a href="{{route('admin.dashboard')}}">Home</a>
            </li>
            <li>
                <span>Skills</span>
            </li>
        </ul>
        <div class="breadcrumb_end">
            <a class="butn butn_secondary butn_sm" href="{{route('admin.skills.create')}}">
                <span class="material-symbols-outlined">
                    add
                </span>
                <span>Add</span>
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
                        <th>Name</th>
                        <th>Second Name</th>
                        <th>Category</th>
                        <th>Value</th>
                        <th>Order</th>
                        <th>Color</th>
                        <th>Second Color</th>
                        <th>Status</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @php
                            $x = 1;
                        @endphp
                        @foreach ($skills as $skill)
                        <tr class="center">
                            <td>{{ $x++ }}</td>
                            <td>{{ $skill->name }}</td>
                            <td>{{ $skill->sec_name }}</td>
                            <td>{{ $skill->category }}</td>
                            <td>{{ $skill->value }}</td>
                            <td>{{ $skill->order }}</td>
                            <td>{{ $skill->color }}</td>
                            <td>{{ $skill->color_sec }}</td>
                            <td>{{ $skill->status == 1 ? 'Publish': 'Unpublish' }}</td>
                            <td class="action">
                                <a href="{{route('admin.skills.edit', $skill->id )}}" class="butn butn_warning butn_md">Edit</a>
                                <form action="{{ route('admin.skills.destroy', $skill->id )}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="butn butn_danger butn_md delete">Delete</button>
                                </form>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Content Area end  -->
    </section>
</x-admin-layout>
