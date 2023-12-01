<section>
    <header  class="section_header">
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Photo') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update Admin account's profile photo.") }}
        </p>
    </header>

    <form method="post" action="{{ route('admin.user.update', Auth::guard('admin')->user()->id) }}" class="form" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="input_group">

            @if (Auth::user()->image)
            <img src="{{ asset(Auth::user()->image)}}"  width="150px" height="150px" style="border-radius: 50%; margin-bottom: 20px; border: 2px solid gray; outline: inset 2px" alt="">
            @else
            <img src="{{asset('assets/backend/images/avatar.jpg')}}" width="150px" height="150px" style="border-radius: 50%; padding:2px; margin-bottom: 20px; border: 3px solid #383158; outline: inset 2px" alt="">
            @endif
            <div class="form_group">
                <label for="image" class="label butn butn_o_info butn_sm" style="width: 110px; text-align:center;">Upload</label>
                <input type="file" class="form_control" id="image" name="image" style="display: none;" />
                <button type="submit" class="butn butn_secondary">Update</button>
            </div>
        </div>
    </form>
</section>
