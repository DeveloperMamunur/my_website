<x-admin-layout>
    <section class="breadcrumb_area">
        <ul class="breadcrumb">
            <li>
                <span>Home</span>
            </li>
        </ul>
        <div class="breadcrumb_end">
            <button class="butn butn_secondary butn_sm">
                <span class="material-symbols-outlined">
                    add
                </span>
                <span>Add</span>
            </button>
        </div>
    </section>
    <!-- breadcrumb area end -->
    <!-- main body start  -->
    <section class="main-body">
        <!-- ================================================= -->
        <!-- Content Area start  -->
        <div class="content main-container">
            <div class="main-cards">
                <table class="table">
                    <thead>
                        <th>Sl No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>phone</th>
                        <th>photo</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Country</th>
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
                            <td>{{ $user->phone }}</td>
                            <td>
                                @if ($user->image)
                                    <img src="{{ asset($user->image) }}" width="100px" />
                                @else
                                    <img src="{{ asset('assets/backend/images/avatar.jpg') }}" width="100px" class="profile_img" />
                                @endif
                            </td>
                            <td>{{ $user->address }}</td>
                            <td>{{ $user->city }}</td>
                            <td>{{ $user->country }}</td>
                            <td>{{ $user->status == 1 ? 'Active': 'Block' }}</td>
                            <td class="action">
                                @if ($user->status == 1)
                                    <form action="{{route('admin.user.block', $user->id )}}" method="POST">
                                        @csrf
                                        @method('put')
                                        <button type="submit" class="butn butn_info butn_md delete">click to Block</button>
                                    </form>
                                 @else
                                    <form action="{{route('admin.user.unblock', $user->id )}}" method="POST">
                                        @csrf
                                        @method('put')
                                        <button type="submit" class="butn butn_info butn_md delete">click to Active</button>
                                    </form>
                                @endif
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
