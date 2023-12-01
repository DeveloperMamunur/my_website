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
                                <a href="#" class="butn butn_warning butn_md">Send reply</a>
                                {{-- <a href="{{route('admin.contact.edit', $contact->id )}}" class="butn butn_warning butn_md">Edit</a>
                                <form action="{{ route('admin.contact.destroy', $contact->id )}}" method="POST">
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
