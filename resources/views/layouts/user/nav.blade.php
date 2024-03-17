<nav class="navbar navbar-expand-xl p-0 align-items-center">
    <a class="site-logo site-title" href="{{route('home')}}">
        <img
src={{asset("assets/images/logoIcon/logo_bit_gold.png")}}
alt="site-logo">
        {{-- {{ env('APP_NAME') }} --}}
    </a>
    <ul class="account-menu responsive-account-menu ms-3">
        <li class="icon"><a href="{{route('home')}}"><i
                    class="las la-user"></i></a></li>
    </ul>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="menu-toggle"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav main-menu ms-auto">
            <li> <a href="{{url('user/dashboard')}}">Dashboard</a></li>
            <li><a href="{{url('user/investment_plan')}}">Investment</a></li>
            <li class="menu_has_children"><a href="#0">Finance</a>
                <ul class="sub-menu">
                    <li><a href="{{url('user/deposit')}}">Deposit</a></li>
                    <li><a href="{{url('user/investment/history')}}">Investment History</a></li>
                    <li><a href="{{url('user/withdraw')}}">Withdraw</a>
                    </li>
                  
                    <li><a
                            href="{{url('user/transaction/history')}}">Transactions</a>
                    </li>
                </ul>
            </li>
          
            <li class="menu_has_children"><a href="#0">Account</a>
                <ul class="sub-menu">
                    {{-- <li><a href="{{url('user/profile-setting')}}">Profile
                            Setting</a></li> --}}
                    <li><a href="{{url('user/change-password')}}">Change
                            Password</a></li>
                    <li><a href="{{url('logout')}}"> Logout</a></li>
                </ul>
            </li>
        </ul>
        {{-- <div class="nav-right">
            <ul class="account-menu ms-3">
                <li class="icon"><a href="""/user/dashboard"><i
                            class="las la-user"></i></a></li>
            </ul>
            <select class="select d-inline-block w-auto ms-xl-3 langSel">
                <option value="en" selected>English</option>
                <option value="bn">Bangla</option>
                <option value="hn">Hindi</option>
                <option value="es">Spanish</option>
            </select>
        </div> --}}
    </div>
</nav>