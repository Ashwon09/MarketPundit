<nav class="navbar navbar-expand-lg" id="customnav">
    <a class="navbar-brand" href="{{route('index')}}" id="responsive">
        <img src="{{asset('image/logo.png')}}" alt="MarketPunditLogo" class="responsive ml-5">
    </a>

    <div class="flex-column" id="navbarSupportedContent">
        <ul class="navbar-nav fw-bold me-5" id="toprow">
            <li class="nav-item ms-5 me-5">
                <a class="nav-link ms-5 me-5" href="#">Share Allotment</a>
            </li>
            <li class="nav-item ms-5 me-5">
                <a class="nav-link ms-5 me-5" href="#">Downloads</a>
            </li>
            <li class="nav-item ms-5 me-5">
                <a class="nav-link ms-5 me-5" href="#">Career</a>
            </li>
            <li class="nav-item ms-5 me-5">
                <a class="nav-link ms-5 me-5" href="{{route('contactUs')}}">Contact Us</a>
            </li>
        </ul>
        <ul class="navbar-nav flex-row ms-5 mt-1 fw-bold">
            <li class="nav-item me-5" style="margin-left:16rem;">
                <a class="nav-link text-white" href="{{route('index')}}">Home</a>
            </li>
            <li class="nav-item ms-5 me-5">
                <a class="nav-link text-white" href="{{route('services')}}">Services</a>
            </li>
            <li class="nav-item dropdown ms-5 me-5">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Stakeholder Info
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Annual Report</a></li>
                    <li><a class="dropdown-item" href="#">Presentation</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown ms-5 me-5">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    About Us
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{route('aboutUs')}}">About Us</a></li>
                    <li><a class="dropdown-item" href="{{route('companyOverview')}}">Company overview</a></li>
                    <li><a class="dropdown-item" href="{{route('boardOfDirectors')}}">Board of Directors</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown ms-5 me-5">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Login
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="http://202.51.74.171/Global/Account/Login">PMS Login</a></li>
                    <li><a class="dropdown-item" href="https://accounting.ezonecloud.com/Login.aspx">Staff Login</a></li>
                    <li><a class="dropdown-item" href="https://meroshare.cdsc.com.np/#/login">Mero Share</a></li>
                </ul>
            </li>
            @if(Auth::check())
            <li class="nav-item ms-5"> <a class="nav-link text-white" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
            @endif
        </ul>
    </div>
</nav>