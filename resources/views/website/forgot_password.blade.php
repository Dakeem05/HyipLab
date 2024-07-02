@extends('layouts.website.website_layout')
@section('main-content')

<body>
    <div class="preloader">
        <div class="preloader__imges">
            <img src="{{asset('assets/images/frontend/preloader/632ebf9b581241664008091.png')}}" class="preloader__img one"
                alt="No Image">
            <img src="{{asset('assets/images/frontend/preloader/632ebf9b5e2681664008091.png')}}" class="preloader__img two"
                alt="No Image">
        </div>
    </div>

    <!-- scroll-to-top start -->
    <div class="scroll-to-top">
        <span class="scroll-icon">
            <i class="fa fa-rocket" aria-hidden="true"></i>
        </span>
    </div>
    <!-- scroll-to-top end -->

    <div class="full-wh">
        <!-- STAR ANIMATION -->
        <div class="bg-animation">
            <div id='stars'></div>
            <div id='stars2'></div>
            <div id='stars3'></div>
            <div id='stars4'></div>
        </div><!-- / STAR ANIMATION -->
    </div>




    <div class="page-wrapper">
        <!-- header-section start  -->
        <header class="header">
            <div class="header__bottom">
                <div class="container">
                    @include('layouts.website.navigation')

                </div>
            </div><!-- header__bottom end -->
        </header>
        <!-- header-section end  -->
       
        <!-- inner hero end -->
        <div class="section-wrapper">
            <!-- contact section start -->
            <section class="inner-hero bg_img" data-background="{{url('assets/images/frontend/breadcrumb/631d82f525a611662878453.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <h2 class="page-title">Account Recovery</h2>
                        </div>
                    </div>
                </div>
            </section>
                            <div class="section-wrapper">
                        <section class="pt-120 pb-120">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-7 col-xl-5">
                            <div class="card custom--card">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <p>To recover your account please provide your email to find your account.</p>
                                    </div>
                                    <form method="POST" action="{{url('password/email')}}">
                                        @csrf                       
                                         <div class="form-group">
                                            <label>Email</label>
                                            <input type="eamil" class="form-control form--control" name="email" value="" required autofocus="off">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn--base w-100">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact section end -->

        </div>
        @include('layouts.website.footer')

    </div>


    @endsection

    @section('extra-js-script')
<script type="text/javascript">
    var _smartsupp = _smartsupp || {};
    _smartsupp.key = 'fc8c4beefba2468bc219a1e43d4dc19ff909912d';
    window.smartsupp||(function(d) {
      var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
      s=d.getElementsByTagName('script')[0];c=d.createElement('script');
      c.type='text/javascript';c.charset='utf-8';c.async=true;
      c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
    })(document);
    </script>
    <noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>
@endsection