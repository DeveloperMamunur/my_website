<x-admin-layout>
    <section class="breadcrumb_area">
        <ul class="breadcrumb">
            <li>
                <a href="{{route('admin.dashboard')}}">Home</a>
            </li>
            <li>
                <span>Work Process</span>
            </li>
        </ul>
        <div class="breadcrumb_end">
            <a class="butn butn_secondary butn_sm" href="{{route('admin.wprocess.create')}}">
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
                        <th>Step</th>
                        <th>Sort Description</th>
                        <th>Status</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @php
                            $x = 1;
                        @endphp
                        @foreach ($wprocesses as $wprocess)
                        <tr class="center">
                            <td>{{ $x++ }}</td>
                            <td>{{ $wprocess->step }}</td>
                            <td>{{ $wprocess->sort_desc }}</td>
                            <td>{{ $wprocess->status == 1 ? 'Publish': 'Unpublish' }}</td>
                            <td class="action">
                                <a href="{{route('admin.wprocess.edit', $wprocess->id )}}" class="butn butn_warning butn_md">Edit</a>
                                <form action="{{ route('admin.wprocess.destroy', $wprocess->id )}}" method="POST">
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
