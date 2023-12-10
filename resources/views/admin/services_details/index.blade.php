<x-admin-layout>
    <section class="breadcrumb_area">
        <ul class="breadcrumb">
            <li>
                <a href="{{route('admin.dashboard')}}">Home</a>
            </li>
            <li>
                <a href="{{route('admin.services.index')}}">Services</a>
            </li>
            <li>
                <span>Details</span>
            </li>
        </ul>
        <div class="breadcrumb_end">
            <a class="butn butn_secondary butn_sm" href="{{route('admin.services.details.create')}}">
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
                        <th>Service Title</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @php
                            $x = 1;
                        @endphp
                        @foreach ($ser_details as $item)
                            <tr class="center">
                                <td>{{ $x++ }}</td>
                                @foreach ($services as $service)
                                    @if ($item->service_id == $service->id)
                                        <td> {{ $service->title }}</td>
                                    @endif
                                @endforeach
                                <td>{{ $item->description }}</td>
                                <td>{{ $item->status == 1 ? 'Publish': 'Unpublish' }}</td>
                                <td class="action">
                                    <a href="{{route('admin.services.details.edit', $item->id )}}" class="butn butn_warning butn_md">Edit</a>
                                    <form action="{{ route('admin.services.details.destroy', $item->id )}}" method="POST">
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
                    {{$ser_details->links('vendor.pagination.default')}}
                </div>
            </div>
        </div>
        <!-- Content Area end  -->
    </section>
</x-admin-layout>
