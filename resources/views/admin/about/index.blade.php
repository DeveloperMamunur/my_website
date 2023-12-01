<x-admin-layout>
    <section class="breadcrumb_area">
        <ul class="breadcrumb">
            <li>
                <a href="{{route('admin.dashboard')}}">Home</a>
            </li>
            <li>
                <span>About</span>
            </li>
        </ul>
        @if ($about->count() < 1)
            <div class="breadcrumb_end">
                <a class="butn butn_secondary butn_sm" href="{{route('admin.about.create')}}">
                    <span class="material-symbols-outlined">
                        add
                    </span>
                    <span>About</span>
                </a>
            </div>
        @elseif ($about->count() > 0)
            @foreach ($about as $item)
                @if ($item->id === 1)
                    <div class="breadcrumb_end">
                        <a class="butn butn_secondary butn_sm" href="{{route('admin.about.edit', $item->id )}}">
                            <span class="material-symbols-outlined">
                                edit
                            </span>
                            <span>Edit</span>
                        </a>
                    </div>
                @endif
            @endforeach
        @endif
    </section>
    <!-- breadcrumb area end -->
    <!-- main body start  -->
    <section class="main-body">
        <!-- ================================================= -->
        <!-- Content Area start  -->
        <div class="content">
            <div class="main-cards">
                <table class="table table_striped table_left" style="max-width: 1200px">
                    <thead>
                        <th>Name</th>
                        <th>:</th>
                        <th>Description</th>
                    </thead>
                    <tbody>
                        @foreach ($about as $item)
                            <tr>
                                <td>Name</td>
                                <td>:</td>
                                <td>{{ $item->name}}</td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td>:</td>
                                <td>{{ $item->description}}</td>
                            </tr>
                            <tr>
                                <td>Image</td>
                                <td>:</td>
                                <td><img src="{{ asset($item->image) }}" width="100px" /></td>
                            </tr>
                            <tr>
                                <td>Icon 1</td>
                                <td>:</td>
                                <td>{{ $item->icon1 }}</td>
                            </tr>
                            <tr>
                                <td>Link 1</td>
                                <td>:</td>
                                <td>{{ $item->link1 }}</td>
                            </tr>
                            <tr>
                                <td>Icon 1</td>
                                <td>:</td>
                                <td>{{ $item->icon2 }}</td>
                            </tr>
                            <tr>
                                <td>Link 1</td>
                                <td>:</td>
                                <td>{{ $item->link2 }}</td>
                            </tr>
                            <tr>
                                <td>Icon 1</td>
                                <td>:</td>
                                <td>{{ $item->icon3 }}</td>
                            </tr>
                            <tr>
                                <td>Link 1</td>
                                <td>:</td>
                                <td>{{ $item->link3 }}</td>
                            </tr>
                            <tr>
                                <td>Icon 1</td>
                                <td>:</td>
                                <td>{{ $item->icon4 }}</td>
                            </tr>
                            <tr>
                                <td>Link 1</td>
                                <td>:</td>
                                <td>{{ $item->link4 }}</td>
                            </tr>
                            <tr>
                                <td>Icon 1</td>
                                <td>:</td>
                                <td>{{ $item->icon5 }}</td>
                            </tr>
                            <tr>
                                <td>Link 1</td>
                                <td>:</td>
                                <td>{{ $item->link5 }}</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>:</td>
                                <td>{{ $item->status == 1 ? 'Publish': 'Unpublish' }}</td>
                            </tr>
                            <tr>
                                <td>Action</td>
                                <td>:</td>
                                <td>
                                    <a href="{{route('admin.about.edit', $item->id )}}" class="edit">Edit</a>
                                    {{-- <form action="{{ route('admin.about.destroy', $item->id )}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="butn butn_danger butn_md delete">Delete</button>
                                    </form> --}}
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
