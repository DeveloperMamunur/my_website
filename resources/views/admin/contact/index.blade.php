<x-admin-layout>
    <section class="breadcrumb_area">
        <ul class="breadcrumb">
            <li>
                <a href="{{route('admin.dashboard')}}">Home</a>
            </li>
            <li>
                <span>Contact</span>
            </li>
        </ul>
        <div class="breadcrumb_end">
            {{-- <a class="butn butn_secondary butn_sm" href="{{route('services.create')}}">
                <span class="material-symbols-outlined">
                    add
                </span>
                <span>Add</span> --}}
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
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @php
                            $x = 1;
                        @endphp
                        @foreach ($contacts as $contact)
                        <tr class="center">
                            <td>{{ $x++ }}</td>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->subject }}</td>
                            <td>{{ $contact->message }}</td>
                            <td class="action">
                                <a href="{{route('admin.contact.mail', $contact->id)}}" class="butn butn_warning butn_md">Send reply</a>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
                <div class="pagination pg_body">
                    {{$contacts->links('vendor.pagination.default')}}
                </div>
            </div>
        </div>
        <!-- Content Area end  -->
    </section>
</x-admin-layout>
