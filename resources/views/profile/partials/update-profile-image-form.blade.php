<section>
    <header  class="section_header">
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Photo') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile photo.") }}
        </p>
    </header>

    <form method="post" action="{{ route('user.update', Auth::user()->id) }}" class="form" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="input_group">
            @if (Auth::user()->image)
                <img src="{{ asset(Auth::user()->image)}}"  width="150px" height="150px" class="profile_img" alt="">
            @else
                <img src="{{asset('assets/backend/images/avatar.jpg')}}" width="150px" height="150px" class="profile_img" alt="">
            @endif
            <div class="form_group img_group">
                <label for="image" class="upload_btn butn butn_o_info butn_sm">Upload</label>
                <input type="file" class="form_control" id="image" name="image" style="display: none;" />
                <button type="submit" class="butn butn_secondary">Update</button>
            </div>
        </div>
    </form>
</section>
