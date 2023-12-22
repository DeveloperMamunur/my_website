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
                @foreach ($users as $user)

                    @php
                        $users = App\Models\User::find($user->id);
                    @endphp
                    @if ($users->unreadNotifications != null)
                        @foreach ($users->unreadNotifications as $notification)
                            @if ($notification->type == 'App\Notifications\ChatNotification')
                                <div class="not_butn unread">
                                    <div>
                                        <b class="font-black"><span style="margin-right: 15px">User Id No: {{$user->id}}</span>{{$user->name}}</b>
                                        {{$notification->data['message']}}
                                    </div>
                                    <div>
                                        <a href="{{route('admin.message.index',$user->id)}}" class="butn butn_primary butn_sm mr_1">
                                            Click to Chat
                                        </a>
                                        <a href="{{route('chat.markasread', [$notification->data['user_id'], $notification->id])}}"  class="butn butn_danger butn_sm">
                                            <span class="readUnread">Unread</span>
                                        </a>
                                    </div>
                                    {{$notification->created_at->diffForHumans()}}
                                </div>
                                @endif
                            @endforeach
                        @endif

                    @foreach ($users->readNotifications as $notification)
                        @if ($notification->type == 'App\Notifications\ChatNotification')
                            <div class="not_butn read">
                                <div>
                                    <b class="font-black"><span style="margin-right: 15px">User Id No: {{$user->id}}</span>{{$user->name}}</b>
                                    {{$notification->data['message']}}
                                </div>
                               <div>
                                    <a href="{{route('admin.message.index',$user->id)}}" class="butn butn_primary butn_sm mr_1">
                                        Click to Chat
                                    </a>
                                    <a href="{{route('chat.markasread', [$notification->data['user_id'], $notification->id])}}" class="butn butn_info butn_sm">
                                        <span class="readUnread">read</span>
                                    </a>
                                </div>
                                {{$notification->created_at->diffForHumans()}}
                            </div>
                        @endif
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>

</x-admin-layout>
