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
        <div class="breadcrumb_end">
            <a href="{{route('admin.user.index')}}" class="butn butn_secondary butn_sm">
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
        <div class="content">
            <div class="main-cards">
                <table class="table table_striped table_left" style="max-width: 1200px">
                    <thead>
                        <th>Name</th>
                        <th>:</th>
                        <th>Description</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Id No</td>
                            <td>:</td>
                            <td>{{ $user->id}}</td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td>{{ $user->name}}</td>
                        </tr>
                        <tr>
                            <td>Email Address</td>
                            <td>:</td>
                            <td>{{ $user->email}}</td>
                        </tr>
                        <tr>
                            <td>Phone No.</td>
                            <td>:</td>
                            <td>{{ $user->phone }}</td>
                        </tr>
                        <tr>
                            <td>Photo</td>
                            <td>:</td>
                            <td>
                                @if ($user->image)
                                    <img src="{{ asset($user->image) }}" width="100px" />
                                @else
                                    No Image
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>:</td>
                            <td>{{ $user->address }}</td>
                        </tr>
                        <tr>
                            <td>City</td>
                            <td>:</td>
                            <td>{{ $user->city }}</td>
                        </tr>
                        <tr>
                            <td>Country</td>
                            <td>:</td>
                            <td>{{ $user->country }}</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>:</td>
                            <td>{{ $user->status == 1 ? 'active': 'block' }}</td>
                        </tr>

                        <tr>
                            <td>Action</td>
                            <td>:</td>
                            <td>
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
                                {{-- <a href="{{route('admin.about.edit', $item->id )}}" class="edit">Edit</a> --}}
                                {{-- <form action="{{ route('admin.about.destroy', $item->id )}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="butn butn_danger butn_md delete">Delete</button>
                                </form> --}}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Content Area end  -->
    </section>
</x-admin-layout>
