<nav class="navbar navbar-expand-xl p-0 align-items-center">
    <a class="site-logo site-title" href="{{url(env("APP_URL_HOME"))}}">
        <img
        style="width: 4rem;"
src={{asset("assets/images/logoIcon/logo_cropped.png")}}
alt="site-logo">
        {{-- {{ env('APP_NAME') }} --}}
    </a>
    <ul class="account-menu responsive-account-menu ms-3">
        <li class="icon"><a href="{{url('login')}}"><i class="las la-user"></i></a></li>
    </ul>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="menu-toggle"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav main-menu ms-auto">
            <li> <a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('about')}}">About</a></li>
            {{-- <li><a href="plan.html">Plan</a></li> --}}
            {{-- <li><a href="blogs.html">Blog</a></li> --}}
            <li><a href="{{url('faq')}}">Faq</a></li>
            <li><a href="{{url('contact')}}">Contact</a></li>
        </ul>
        <div class="nav-right">
            <ul class="account-menu ms-3">
                <li class="icon"><a href="{{url('login')}}"><i class="las la-user"></i></a></li>
            </ul>
            {{-- <select class="select d-inline-block w-auto ms-xl-3 langSel">
                <option value="en" selected>English</option>
                <option value="bn">Bangla</option>
                <option value="hn">Hindi</option>
                <option value="es">Spanish</option>
            </select> --}}
        </div>
    </div>
</nav>