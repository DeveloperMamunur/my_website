<x-admin-layout>
    <section class="breadcrumb_area">
        <ul class="breadcrumb">
            <li>
                <a href="{{route('admin.dashboard')}}">Home</a>
            </li>
            <li>
                <a href="{{route('admin.contact.index')}}">Contact</a>
            </li>
            <li>
                <span>Send</span>
            </li>
        </ul>
        <div class="breadcrumb_end">
            <a href="{{route('admin.contact.index')}}" class="butn butn_secondary butn_sm">
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
        <div class="content main-container">
            <div class="heading">
                <h3>Create Contact</h3>
            </div>
            <form action="{{route('admin.contact.mail.send')}}" method="POST" class="form">
                @csrf
                <div class="form_group">
                    <label for="name" class="label">Name</label>
                    <input type="text" value="{{$contact->name}}" name="name" class="form_control" id="name">
                </div>
                <div class="form_group">
                    <label for="email" class="label">Email</label>
                    <input type="email" value="{{$contact->email}}" name="email" class="form_control" id="email">
                </div>
                <div class="form_group">
                    <label for="subject" class="label">Email Subject</label>
                    <input type="text" name="subject" class="form_control" id="subject" placeholder="Enter Mail subject">
                </div>
                <div class="form_group">
                    <label for="body" class="label">Email Body</label>
                    <textarea name="body" id="body" cols="30" rows="10" class="form_control"></textarea>
                </div>
                <button type="submit" class="butn butn_success">Send</button>
            </form>
        </div>
        <!-- Content Area end  -->
    </section>
</x-admin-layout>

