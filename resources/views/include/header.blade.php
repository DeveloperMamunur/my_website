<header>
    <!-- ================navbar start =========== -->
    <nav class="navbar">
        <div class="container">
            <div class="navber_nav">
                <!-- ==========logo or brand name part start ============= -->
                <div class="brand">
                    <a href="{{url('/')}}"><span>M</span>amunur.</a>
                </div>
                <!-- ==========logo or brand name part end ============= -->
                <!-- ===========mobile menu button start ==============     -->
                <div class="menu">
                    <button class="menu_btn" id="menu_btn">
                       <span class="material-symbols-outlined">
                            menu
                        </span>
                    </button>
                </div>
                <!-- ===========mobile menu button end ============== -->
                <!-- ==========main nav bar start ===================== -->
                <div class="main_navber">
                    <div class="close">
                        <button class="close_btn" id="close">
                            <span class="material-symbols-outlined">
                                 close
                             </span>
                         </button>
                    </div>
                    <!-- ================center navbar part start=================== -->
                    <ul class="navbar_left">
                        <li ><a href="#heroes" class="nav_link active">Home</a></li>
                        <li><a href="#services" class="nav_link">Services</a></li>
                        <li><a href="#about" class="nav_link">About</a></li>
                        <li><a href="#skills" class="nav_link">Skills</a></li>
                        <li><a href="#project" class="nav_link">Project</a></li>
                        <li><a href="#work_process" class="nav_link">Process</a></li>
                        <li><a href="#testimonial" class="nav_link">Testimonial</a></li>
                        <li><a href="#contact" class="nav_link">Contact</a></li>
                    </ul>
                    <!-- ================center navbar part end=================== -->
                    <ul class="navbar_right">
                        <li class="switch-mode">
                            <label class="switch theme-toggle">
                                <span class="sun"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g fill="#ffd43b"><circle r="5" cy="12" cx="12"></circle><path d="m21 13h-1a1 1 0 0 1 0-2h1a1 1 0 0 1 0 2zm-17 0h-1a1 1 0 0 1 0-2h1a1 1 0 0 1 0 2zm13.66-5.66a1 1 0 0 1 -.66-.29 1 1 0 0 1 0-1.41l.71-.71a1 1 0 1 1 1.41 1.41l-.71.71a1 1 0 0 1 -.75.29zm-12.02 12.02a1 1 0 0 1 -.71-.29 1 1 0 0 1 0-1.41l.71-.66a1 1 0 0 1 1.41 1.41l-.71.71a1 1 0 0 1 -.7.24zm6.36-14.36a1 1 0 0 1 -1-1v-1a1 1 0 0 1 2 0v1a1 1 0 0 1 -1 1zm0 17a1 1 0 0 1 -1-1v-1a1 1 0 0 1 2 0v1a1 1 0 0 1 -1 1zm-5.66-14.66a1 1 0 0 1 -.7-.29l-.71-.71a1 1 0 0 1 1.41-1.41l.71.71a1 1 0 0 1 0 1.41 1 1 0 0 1 -.71.29zm12.02 12.02a1 1 0 0 1 -.7-.29l-.66-.71a1 1 0 0 1 1.36-1.36l.71.71a1 1 0 0 1 0 1.41 1 1 0 0 1 -.71.24z"></path></g></svg></span>
                                <span for="theme-toggle" class="moon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="m223.5 32c-123.5 0-223.5 100.3-223.5 224s100 224 223.5 224c60.6 0 115.5-24.2 155.8-63.4 5-4.9 6.3-12.5 3.1-18.7s-10.1-9.7-17-8.5c-9.8 1.7-19.8 2.6-30.1 2.6-96.9 0-175.5-78.8-175.5-176 0-65.8 36-123.1 89.3-153.3 6.1-3.5 9.2-10.5 7.7-17.3s-7.3-11.9-14.3-12.5c-6.3-.5-12.6-.8-19-.8z"></path></svg></span>
                                <input type="checkbox" class="input" id="theme-toggle">
                                <span class="slider_dark"></span>
                            </label>
                        </li>
                        <li class="dropdown">
                            <button class="nav_link drop_btn">
                                <span class="material-symbols-outlined">
                                    person
                                </span>
                            </button>
                            <div class="dropdown_content">
                                @if (Route::has('login'))
                                    @auth
                                        <a href="{{ url('/dashboard') }}" class="nav_link">Dashboard</a>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <a type="button" href="route('logout')"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </a>
                                        </form>
                                    @else
                                        <a href="{{ route('login') }}" class="nav_link">Log in</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="nav_link">Register</a>
                                        @endif
                                    @endauth
                                @endif
                            </div>
                        </li>
                        @if (Route::has('login'))
                            @auth
                            <li class="log_small">
                                <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                            </li>
                            <li class="log_small">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <a class="nav_link" type="button" href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </a>
                                </form>
                            </li>
                        @else
                            <li class="log_small">
                                <a href="{{ route('login') }}" class="nav_link">Log in</a>
                            </li>
                                @if (Route::has('register'))
                                <li class="log_small">
                                    <a href="{{ route('register') }}" class="nav_link">Register</a>
                                </li>
                                @endif
                            @endauth
                        @endif
                    </ul>
                </div>
                <!-- ==========main nav bar end ===================== -->
            </div>
        </div>
    </nav>
    <!--================= navbar end ====================== -->
</header>
