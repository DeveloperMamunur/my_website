<x-admin-layout>
    <section class="breadcrumb_area">
        <ul class="breadcrumb">
            <li>
                <a href="{{route('admin.dashboard')}}">Home</a>
            </li>
            <li>
                <span>Testimonial</span>
            </li>
        </ul>
        <div class="breadcrumb_end">
            {{-- <button class="butn butn_secondary butn_sm" onclick="document.getElementById('project_cat').style.display='flex'">
                <span class="material-symbols-outlined">
                    add
                </span>
                <span>Category</span>
            </button> --}}
            <a class="butn butn_secondary butn_sm" href="{{route('admin.testimonial.create')}}">
                <span class="material-symbols-outlined">
                    add
                </span>
                <span>Review</span>
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
                        <th>Location</th>
                        <th>Photo</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @php
                            $x = 1;
                        @endphp
                        @foreach ($testimonials as $review)
                        <tr class="center">
                            <td>{{ $x++ }}</td>
                            <td>{{ $review->users->name }}</td>
                            <td>{{ $review->users->city }}, {{$review->users->country }}</td>
                            <td>
                                @if ($review->users->image)
                                    <img src="{{ asset($review->users->image)}}"  width="50px" alt="">
                                @else
                                    <img src="{{asset('assets/backend/images/avatar.jpg')}}" width="50px" alt="">
                                @endif
                            </td>
                            <td>{{ $review->description }}</td>
                            <td>
                                <p style="font-size: 18px; font-weight: 500">{{ $review->status == 1 ? 'Publish': 'Unpublish' }}</p>

                            </td>
                            <td class="action">
                                @if ($review->status == 1)
                                    <form action="{{route('admin.testimonial.unpublish', $review->id )}}" method="POST">
                                        @csrf
                                        @method('put')
                                        <button type="submit" class="butn butn_info butn_md delete">click to Unpublish</button>
                                    </form>
                                    {{-- <a href="{{route('admin.testimonial.unpublish', $review->id )}}" class="">click to Unpublish</a> --}}
                                @else
                                    <form action="{{route('admin.testimonial.publish', $review->id )}}" method="POST">
                                        @csrf
                                        @method('put')
                                        <button type="submit" class="butn butn_info butn_md delete">click to Publish</button>
                                    </form>
                                    {{-- <a href="{{route('admin.testimonial.publish', $review->id )}}" class="">click to Publish</a> --}}
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
