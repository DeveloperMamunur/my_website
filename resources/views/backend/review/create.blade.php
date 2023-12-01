<x-app-layout>
    <section class="breadcrumb_area">
        <ul class="breadcrumb">
            <li>
                <a href="{{route('dashboard')}}">Home</a>
            </li>
            <li>
                <a href="{{route('review.index')}}">Review</a>
            </li>
            <li>
                <span>Create</span>
            </li>
        </ul>
        <div class="breadcrumb_end">
            <a href="{{route('review.index')}}" class="butn butn_secondary butn_sm">
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
                <h3>Create Review</h3>
            </div>
            <form action="{{route('review.store')}}" method="POST" class="form">
                @csrf
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <div class="form_group">
                    <label for="name" class="label">Name</label>
                    <input type="text" value="{{Auth::user()->name}}" name="name" class="form_control" id="name" {{Auth::user()->name != null ? 'disabled':''}}>
                </div>
                <div class="form_group">
                    <label for="city" class="label">City</label>
                    <input type="text" value="{{Auth::user()->city}}" name="city" class="form_control" id="city" placeholder="Enter City Name" {{Auth::user()->city != null ? 'disabled':''}}>
                </div>
                <div class="form_group">
                    <label for="country" class="label">Country</label>
                    <input type="text" value="{{Auth::user()->country}}" name="country" class="form_control" id="country" placeholder="Enter country Name" {{Auth::user()->country != null ? 'disabled':''}}>
                </div>
                <div class="form_group">
                    <label for="description" class="label">Description</label>
                    <textarea name="description" rows="5" class="form_control" id="description" placeholder="Enter Project description"></textarea>
                    @error('description')
                        <div class="error">{{$message}}</div>
                    @enderror
                </div>

                <button type="submit" class="butn butn_success">Submit</button>
            </form>
        </div>
        <!-- Content Area end  -->
    </section>
</x-app-layout>
