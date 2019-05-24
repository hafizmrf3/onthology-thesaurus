<header>
    <div class="container-fluid position-relative no-side-padding">

        <a href="#" class="logo">Repository Ilmiah Nasional - LIPI</a>

        <div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>

        <ul class="main-menu visible-on-click" id="main-menu">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="#">Kedeputian</a></li>
            <li><a href="#">Karya Ilmiah</a></li>
<!-- Tambahan   -->
            @guest
                <li><a href="{{ route('register') }}">Register</a></li>
            @else
                @if(Auth::user()->role->id == 1)
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                @endif
                @if(Auth::user()->role->id == 2)
                    <li><a href="{{ route('author.dashboard') }}">Dashboard</a></li>
                @endif
            @endguest
<!-- Biar bisa login -->

        </ul><!-- main-menu -->


    </div><!-- conatiner -->
</header>