<nav class="navbar navbar-expand-xl p-0 align-items-center">
    <a class="site-logo site-title" href="{{url('admin/dashboard')}}"><img
        style="width: 4rem;"
src={{asset("assets/images/logoIcon/logo_cropped.png")}}
alt="site-logo"></a>
    <ul class="account-menu responsive-account-menu ms-3">
        <li class="icon"><a href=""><i
                    class="las la-user"></i></a></li>
    </ul>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="menu-toggle"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav main-menu ms-auto">
            <li> <a href="{{url('admin/dashboard')}}">Dashboard</a></li>
            {{-- <li><a href="{{url('user/investment_plan')}}">Investments</a></li> --}}
            <li class="menu_has_children"><a href="#0">Request</a>
                <ul class="sub-menu">
                    {{-- <li><a href="{{url('user/deposit')}}">Deposits</a></li> --}}
                    <li><a href="{{url('admin/withdrawal/request')}}">Withdraws</a>
                    </li>
                  
                    {{-- <li><a
                            href="{{url('user/transactions')}}">Transactions</a>
                    </li> --}}
                </ul>
            </li>
          
            <li class="menu_has_children"><a href="#0">Account</a>
                <ul class="sub-menu">
                    {{-- <li><a href="{{url('user/profile-setting')}}">Profile
                            Setting</a></li> --}}
                    <li><a href="{{url('admin/change-password')}}">Change
                            Password</a></li>
                    <li><a href="{{url('logout')}}"> Logout</a></li>
                </ul>
            </li>
        </ul>
       
    </div>
</nav>