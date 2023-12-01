<x-app-layout>
    <section class="breadcrumb_area">
        <ul class="breadcrumb">
            <li>
                <a href="{{route('dashboard')}}">Home</a>
            </li>
            <li>
                <span>Review</span>
            </li>
        </ul>
        <div class="breadcrumb_end">
            {{-- <button class="butn butn_secondary butn_sm" onclick="document.getElementById('project_cat').style.display='flex'">
                <span class="material-symbols-outlined">
                    add
                </span>
                <span>Category</span>
            </button> --}}
            <a class="butn butn_secondary butn_sm" href="{{route('review.create')}}">
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
                        <th>Description</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @php
                            $x = 1;
                        @endphp
                        @foreach ($reviews as $review)
                            @if ($review->user_id == Auth::user()->id)
                                <tr class="center">
                                    <td>{{ $x++ }}</td>
                                    <td>{{ $review->description }}</td>
                                    <td class="action">
                                        <a href="{{route('review.edit', $review->id )}}" class="butn butn_warning butn_md">Edit</a>
                                        <form action="{{ route('review.destroy', $review->id )}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="butn butn_danger butn_md delete">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endif

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Content Area end  -->
    </section>
</x-app-layout>
