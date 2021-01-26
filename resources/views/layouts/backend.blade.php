<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin panel</title>

    @yield('imports')
    <link rel="icon" href="{{asset('img/mdb-favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/addons/datatables.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/addons/datatables2.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/addons/datatables-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/addons/datatables-select2.min.css')}}">

</head>

<body>

<header>

    <nav class="navbar fixed-top navbar-expand navbar-dark blue-grey darken-2 scrolling-navbar">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse white-text" id="navbarSupportedContent">
            <a href="#" data-activates="slide-out" class=" button-collapse"><i
                    class="fas fa-bars"></i></a>
            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}"><i class="fas fa-sign-in-alt"></i>Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('register')}}"><i class="fas fa-user-plus"></i>Register</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i>
                            <span style="display: inline-block">{{Auth::user()->name}} </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-default"
                             aria-labelledby="navbarDropdownMenuLink-333">
                            <a class="dropdown-item" href="/user/profile">Profile</a>
                            <a class="dropdown-item" href="/user/api-tokens">Api Tokens</a>

                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt"></i>Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout1') }}" method="GET"
                                  style="display: none;"></form>
                            @csrf
                        </div>
                    </li>
                @endguest
            </ul>

        </div>
        <!-- Sidebar navigation -->
    </nav>
    <!-- SideNav slide-out button -->
</header>
<!-- SideNav slide-out button -->


<!-- Sidebar navigation -->
<div id="slide-out" class="side-nav side wide fixed slim">
    <ul class="custom-scrollbar">
        <!-- Logo -->
        <li>
            <div class="logo-wrapper sn-ad-avatar-wrapper rgba-yellow-strong">
                <a href="#"><img src="{{ asset(Auth::user()->profile_photo_url) }}"
                                 class="rounded-circle"><span>{{Auth::user()->name}} </span></a>
            </div>
        </li>
        <!--/. Logo -->
        <!-- Side navigation links -->
        <li>
            <ul class="collapsible collapsible-accordion ">

                <li><a class="collapsible-header waves-effect" href="{{route('dashboard')}}"><i
                            class="fas fa-columns"></i>
                        Panel</a>
                </li>
                <li><a class="collapsible-header waves-effect" href="{{route('examples.index')}}"><i
                            class="fab fa-firstdraft"></i>
                        Example</a>
                </li>
                <li><a class="collapsible-header waves-effect" href="{{route('clients.index')}}">
                        <i class="fas fa-users"></i>
                        Klienci</a>
                </li>
                <li><a class="collapsible-header waves-effect" href="{{route('repairs.index')}}"><i
                        <i class="fas fa-tools"></i>
                        Zgłoszenia</a>
                </li>
                <li><a class="collapsible-header waves-effect" href="{{route('items.index')}}"><i
                        <i class="fas fa-laptop"></i>
                        Urządzenia</a>
                </li>
                </li>
                <li><a class="collapsible-header waves-effect" href="{{route('media')}}"><i
                            class="fas fa-photo-video"></i>
                        Media</a>
                </li>
                <li><a id="toggle" class="waves-effect"><i class="sv-slim-icon fas fa-angle-double-right"></i>Minimize
                        menu</a>
                </li>
            </ul>
        </li>
    </ul>
    <div class="sidenav-bg rgba-stylish-strong"></div>
</div>




<div class="container mt-10 pt-10">
    @yield('content')
</div>

<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/addons/datatables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/addons/datatables2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/modules/material-select/material-select.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/modules/material-select/material-select-view.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/modules/material-select/material-select-view-renderer.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
<script>
    $(document).ready(() => {
        $(".button-collapse").sideNav({
            slim: true
        });
        var sideNavScrollbar = document.querySelector('.custom-scrollbar');
        var ps = new PerfectScrollbar(sideNavScrollbar);

        new WOW().init();
    });
</script>
<script src="https://kit.fontawesome.com/3c5516695a.js" crossorigin="anonymous"></script>
{{--<script src="{{asset(('js/scripts/sort.js'))}}"></script>--}}
@yield('scripts')
</body>
</html>
