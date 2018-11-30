<nav class="navbar">
            <div class="container">
                <div class="navbar-brand">
                    <a href="{{ route('home') }}" class="nav-item">
                        <img src="{{ asset('images/KenMarketer-logo.jpg') }}" alt="KenMarketer Logo">
                    </a>
                    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarB">
                      <span aria-hidden="true"></span>
                      <span aria-hidden="true"></span>
                      <span aria-hidden="true"></span>
                    </a>
                </div>
                <div class="navbar-menu">
                    <div class="navbar-start">
                        <a href="#" class="navbar-item is-hidden-mobile is-tab m-l-10">Learn</a>
                        <a href="#" class="navbar-item is-hidden-mobile is-tab m-l-10">Discuss</a>
                        <a href="#" class="navbar-item is-hidden-mobile is-tab m-l-10">Share</a>
                    </div>
                    <div class="navbar-end" style="overflow: visible;">
                        @guest
                        <a href="{{ route('login') }}" class="navbar-item is-tab m-l-10">Login</a>
                        <a href="{{ route('register') }}" class="navbar-item is-tab m-l-10">Join the Community</a>
                        @else
                        <div class="dropdown is-aligned-right">
                            <button class="navbar-item is-tab">
                                Hello {{ Auth::user()->name }} 
                                <span class="icon">
                                    <i class="fa fa-caret-down"></i>
                                </span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#" class="dropdown-item">
                                    <span class="icon"><i class="fa fa-fw fa-user-circle-o"></i></span>
                                    Profile</a></li>
                                    <li><a href="#" class="dropdown-item">
                                    <span class="icon"><i class="fa fa-fw fa-bell"></i></span>
                                    Notifications</a></li>
                                    <li><a href="{{ route('manage.dashboard') }}" class="dropdown-item">
                                    <span class="icon"><i class="fa fa-fw fa-cog"></i></span>
                                    Manage</a></li>
                                    <hr class="dropdown-divider">
                                    <li><a href="{{route('logout')}}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <span class="icon"><i class="fa fa-fw fa-sign-out"></i></span>
                                    Logout</a>
                                    @include('_includes.forms.logout')
                                    </li>
                                </ul>
                        </div>
                        @endguest
                    </div>
                </div>
            </div>
        </nav>
