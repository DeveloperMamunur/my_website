<aside class="side-navber" id="side_navber">
    <div class="top-sidebar">
        <span class="material-symbols-outlined">
            empty_dashboard
        </span>
        <span class="d_name">Dashboard</span>
    </div>
    <div class="sidebar-menu">
        <ul>
            <li class="s_N_item {{ Request::is('dashboard') ? 'active':'' }}">
                <a href="{{url('/dashboard')}}" class="drop_side_nav">
                    <span class="material-symbols-outlined link_icon">
                        home
                    </span>
                    <span class="link_name">Home</span>
                </a>
            </li>
            <li class="s_N_item {{ Request::is('/') ? 'active':'' }}">
                <a href="{{route('profile.edit')}}" class="sidebarBtn">
                    <span class="material-symbols-outlined link_icon">
                        settings
                    </span>
                    <span class="link_name">Profile Setting</span>
                </a>
            </li>
            <li class="s_N_item {{ Request::is('testimonial') ? 'active':'' }}">
                <a href="{{route('review.index')}}" class="sidebarBtn">
                    <span class="material-symbols-outlined link_icon">
                        reviews
                    </span>
                    <span class="link_name">Review</span>
                </a>
            </li>
            <li class="logout">
                <span class="material-symbols-outlined link_icon">
                    logout
                </span>
                <span class="link_name">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a type="button" href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </a>
                    </form>
                </span>
            </li>
        </ul>
    </div>
</aside>
