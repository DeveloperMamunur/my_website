<aside class="side-navber" id="side_navber">
    <div class="top-sidebar">
        <span class="material-symbols-outlined">
            empty_dashboard
        </span>
        <span class="d_name">Mamunur.</span>
    </div>
    <div class="sidebar-menu">
        <ul>
            <li class="s_N_item {{ Request::is('dashboard') ? 'active':'' }}">
                <a href="{{url('admin/dashboard')}}" class="drop_side_nav">
                    <span class="material-symbols-outlined link_icon">
                        home
                    </span>
                    <span class="link_name">Home</span>
                </a>
            </li>
            <li class="s_N_item {{ Request::is('contact') ? 'active':'' }}">
                <a href="{{route('admin.contact.index')}}" class="sidebarBtn">
                    <span class="material-symbols-outlined link_icon">
                        contacts
                    </span>
                    <span class="link_name">Contact</span>
                </a>
            </li>
            <li class="s_N_item {{ Request::is('testimonial') ? 'active':'' }}">
                <a href="{{route('admin.testimonial.index')}}" class="sidebarBtn">
                    <span class="material-symbols-outlined link_icon">
                        rate_review
                        </span>
                    <span class="link_name">Testimonial</span>
                </a>
            </li>
            <hr>
            <p style="color: #eee; margin-left: 10px; margin-bottom:10px;">Frontend Setting</p>
            {{-- <hr> --}}
            <li class="s_N_item {{ Request::is('admin/skills') ? 'active':'' }}">
                <a href="{{route('admin.skills.index')}}" type="button" class="sidebarBtn">
                    <span class="material-symbols-outlined link_icon">
                        settings_input_component
                    </span>
                    <span class="link_name">Skills</span>
                </a>
            </li>
            <li class="s_N_item {{ Request::is('admin/services') ? 'active':'' }}">
                <a href="{{ route('admin.services.index') }}" type="button" class="sidebarBtn">
                    <span class="material-symbols-outlined link_icon">
                        service_toolbox
                    </span>
                    <span class="link_name">Services</span>
                </a>
            </li>
            <li class="s_N_item {{ Request::is('admin/services/details') ? 'active':'' }}">
                <a href="{{ route('admin.services.details.index') }}" type="button" class="sidebarBtn">
                    <span class="material-symbols-outlined link_icon">
                        design_services
                    </span>
                    <span class="link_name">Services Detail</span>
                </a>
            </li>
            <li class="s_N_item {{ Request::is('about') ? 'active':'' }}">
                <a href="{{route('admin.about.index')}}" type="button" class="sidebarBtn">
                    <span class="material-symbols-outlined link_icon">
                        person_book
                    </span>
                    <span class="link_name">About</span>
                </a>
            </li>
            <li class="s_N_item {{ Request::is('project') ? 'active':'' }}">
                <a href="{{route('admin.project.index')}}" type="button" class="sidebarBtn">
                    <span class="material-symbols-outlined link_icon">
                        work
                    </span>
                    <span class="link_name">Project</span>
                </a>
            </li>
            <li class="s_N_item {{ Request::is('wprocess') ? 'active':'' }}">
                <a href="{{route('admin.wprocess.index')}}" class="sidebarBtn">
                    <span class="material-symbols-outlined link_icon">
                        account_tree
                    </span>
                    <span class="link_name">Work Process</span>
                </a>
            </li>
            <hr />
            <li class="s_N_item {{ Request::is('/') ? 'active':'' }}">
                <a href="{{route('admin.profile.edit')}}" class="sidebarBtn">
                    <span class="material-symbols-outlined link_icon">
                        settings
                    </span>
                    <span class="link_name">Profile Setting</span>
                </a>
            </li>
            <li class="logout">
                <span class="material-symbols-outlined link_icon">
                    logout
                </span>
                <span class="link_name">
                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf

                        <a type="button" href="route('admin.logout')"
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
