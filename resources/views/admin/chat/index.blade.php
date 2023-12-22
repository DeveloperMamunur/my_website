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
        {{-- message area  --}}
        <div class="content main_container">
            <div class="main-cards chats">
                <div class="chat_area">
                    <div class="chat_header">
                        <div class="user">
                            <div class="photo">
                                @if ($user->image)
                                    <img src="{{asset($user->image)}}" width="40px" alt="">
                                @else
                                    <img src="{{asset('assets/backend/images/avatar.jpg')}}" width="40px" alt="">
                                @endif
                            </div>
                            <div class="name">
                                {{$user->name}}
                            </div>
                        </div>
                        <div class="butn">
                            <a href="{{route('admin.user.index')}}" class="butn butn_secondary butn_sm">
                                <span class="material-symbols-outlined">
                                    west
                                </span>
                                <span>back</span>
                            </a>
                        </div>
                    </div>
                    <div class="chat_content" Id="{{$user->id}}">

                    </div>
                    <div class="chat_footer">
                        <form action="{{route('admin.message.store')}}" id="insert_form" class="insert_form" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="admin_id" value="{{Auth::guard('admin')->user()->id}}">
                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                            <div class="group">
                                <label for="image" class="file_label">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="25" width="24" viewBox="0 0 512 512"><path opacity="1" fill="#fff" d="M512 416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96C0 60.7 28.7 32 64 32H192c20.1 0 39.1 9.5 51.2 25.6l19.2 25.6c6 8.1 15.5 12.8 25.6 12.8H448c35.3 0 64 28.7 64 64V416zM232 376c0 13.3 10.7 24 24 24s24-10.7 24-24V312h64c13.3 0 24-10.7 24-24s-10.7-24-24-24H280V200c0-13.3-10.7-24-24-24s-24 10.7-24 24v64H168c-13.3 0-24 10.7-24 24s10.7 24 24 24h64v64z"/></svg>
                                </label>
                                <input type="file" name="image" id="image" class="input_file">
                                <input type="text" name="message" class="input_text">
                                <button class="chat_butn" type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20" width="28" viewBox="0 0 512 512"><path opacity="1" fill="#fff" d="M16.1 260.2c-22.6 12.9-20.5 47.3 3.6 57.3L160 376V479.3c0 18.1 14.6 32.7 32.7 32.7c9.7 0 18.9-4.3 25.1-11.8l62-74.3 123.9 51.6c18.9 7.9 40.8-4.5 43.9-24.7l64-416c1.9-12.1-3.4-24.3-13.5-31.2s-23.3-7.5-34-1.4l-448 256zm52.1 25.5L409.7 90.6 190.1 336l1.2 1L68.2 285.7zM403.3 425.4L236.7 355.9 450.8 116.6 403.3 425.4z"/></svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content Area end  -->
    </section>
    @push('chat')
    <script src="{{asset('assets/plugin/jquery-3.7.1.min.js')}}"></script>

    <script>
        $.ajaxSetup({
            cache:false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            }
        });


        $(document).ready(function() {
            $('input').off().on('focus', function(e) {
                $(this).siblings('span').html('');
            });

            $('select').off().on('focus', function(e) {
                $(this).off().siblings('span').html('');
            });

            $('textarea').off().on('focus', function(e) {
                $(this).siblings('span').html('');
            });

            $('.insert_form').off().on('submit', function(e) {
                e.preventDefault();
                let formData = new FormData($(this)[0]);
                $.ajax({
                    url: $(this).attr('action'),
                    type: 'POST',
                    data: formData,
                    success: (res) => {
                        $(this).trigger('reset');
                        $('.chat_content').html('');
                        fetchChat();

                    },
                })
            });

            fetchChat();

            function fetchChat() {
                $.ajax({
                    type: "GET",
                    url: "/admin/fetch-chat",
                    dataType: "json",
                    success: function(res) {
                        $('.chat_content').html("");
                        // $('.chat_other').html("");

                        const itemId = $('.chat_content').attr('Id');

                        $.each(res.chats, function(key, item) {
                            if (itemId == item.user_id) {
                                if (item.admin_id == 1){
                                    $('.chat_content').append(
                                       ' <div class="self_message">'+
                                            '<div class="u_photo">'+
                                                '<img src="'+'/'+ item.admin.image +'" width="40px" alt="">'+
                                            '</div>'+
                                            '<div class="chat_text">'+
                                                '<p>'+item.message+'</p>'+
                                            '</div>'+
                                        '</div>'
                                    )
                                }
                                if (item.admin_id == null){
                                    if(item.users.image != null){
                                        $('.chat_content').append(
                                            '<div class="other_massage">'+
                                                '<div class="u_photo">'+
                                                    '<img src="'+'/'+ item.users.image +'" width="40px" alt="">'+
                                                '</div>'+
                                                '<div class="chat_text">'+
                                                    '<p>'+item.message+'</p>'+
                                                '</div>'+
                                            '</div>'
                                        )
                                    } else{
                                        $('.chat_content').append(
                                            '<div class="other_massage">'+
                                                '<div class="u_photo">'+
                                                    '<img src="/assets/backend/images/avatar.jpg" width="40px" alt="">'+
                                                '</div>'+
                                                '<div class="chat_text">'+
                                                    '<p>'+item.message+'</p>'+
                                                '</div>'+
                                            '</div>'
                                        )
                                    }
                                }

                            }

                        });

                        window.setTimeout(fetchChat, 2000);
                    }
                })
            }
        })
        </script>
    @endpush
</x-admin-layout>
