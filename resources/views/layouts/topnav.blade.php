<div class="top_navbar">
    <nav class="top_nav">
        <ul>
            <li class="menu">
                <button id="menu_bar" onclick="sidebarFunction()">
                    <label for="menu_css_toggle">
                        <span class="material-symbols-outlined">
                            menu
                        </span>
                    </label>
                </button>
            </li>
        </ul>
        <ul>
            <li class="switch-mode">
                <label class="switch theme-toggle">
                    <span class="sun">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <g fill="#ffd43b">
                                <circle r="5" cy="12" cx="12"></circle>
                                <path
                                    d="m21 13h-1a1 1 0 0 1 0-2h1a1 1 0 0 1 0 2zm-17 0h-1a1 1 0 0 1 0-2h1a1 1 0 0 1 0 2zm13.66-5.66a1 1 0 0 1 -.66-.29 1 1 0 0 1 0-1.41l.71-.71a1 1 0 1 1 1.41 1.41l-.71.71a1 1 0 0 1 -.75.29zm-12.02 12.02a1 1 0 0 1 -.71-.29 1 1 0 0 1 0-1.41l.71-.66a1 1 0 0 1 1.41 1.41l-.71.71a1 1 0 0 1 -.7.24zm6.36-14.36a1 1 0 0 1 -1-1v-1a1 1 0 0 1 2 0v1a1 1 0 0 1 -1 1zm0 17a1 1 0 0 1 -1-1v-1a1 1 0 0 1 2 0v1a1 1 0 0 1 -1 1zm-5.66-14.66a1 1 0 0 1 -.7-.29l-.71-.71a1 1 0 0 1 1.41-1.41l.71.71a1 1 0 0 1 0 1.41 1 1 0 0 1 -.71.29zm12.02 12.02a1 1 0 0 1 -.7-.29l-.66-.71a1 1 0 0 1 1.36-1.36l.71.71a1 1 0 0 1 0 1.41 1 1 0 0 1 -.71.24z"
                                ></path>
                            </g>
                        </svg>
                    </span>
                    <span for="theme-toggle" class="moon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <path
                                d="m223.5 32c-123.5 0-223.5 100.3-223.5 224s100 224 223.5 224c60.6 0 115.5-24.2 155.8-63.4 5-4.9 6.3-12.5 3.1-18.7s-10.1-9.7-17-8.5c-9.8 1.7-19.8 2.6-30.1 2.6-96.9 0-175.5-78.8-175.5-176 0-65.8 36-123.1 89.3-153.3 6.1-3.5 9.2-10.5 7.7-17.3s-7.3-11.9-14.3-12.5c-6.3-.5-12.6-.8-19-.8z"
                            ></path>
                        </svg>
                    </span>
                    <input type="checkbox" class="input" id="theme-toggle" />
                    <span class="slider"></span>
                </label>
            </li>
            <li class="account">
                <button class="dropbtn" onclick="myFunction()">
                    <span class="material-symbols-outlined">
                        account_circle
                    </span>
                    Account
                </button>
                <div class="profile" id="profile">
                    <ul>
                        <li><a href="#">{{ Auth::user()->name}}</a></li>
                        <li><a href="#">Email: {{ Auth::user()->email}}</a></li>
                        <li><x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile Setting') }}
                        </x-dropdown-link></li>
                        <li>
                            {{-- <a href="#">Logout</a> --}}
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </nav>
    <!-- top navbar end  -->
</div>
