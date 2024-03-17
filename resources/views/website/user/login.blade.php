@extends('layouts.website.website_layout')
@section('main-content')



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
            <!-- inner hero start -->
            <section class="inner-hero bg_img"
                data-background="{{asset('/assets/images/frontend/breadcrumb/631d82f525a611662878453.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <h2 class="page-title">Login</h2>
                        </div>
                    </div>
                </div>
            </section>
            <!-- inner hero end -->
            <div class="section-wrapper">

                <!-- account section start -->
                <div class="account-section bg_img"
                    data-background="{{asset('/assets/images/frontend/login/631ca0dc080a31662820572.jpg')}}">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-5 col-lg-7">
                                <div class="account-card">
                                    <div class="account-card__header bg_img overlay--one"
                                        data-background="{{asset('/assets/images/frontend/login/631ca0dc2ed1a1662820572.jpg')}}">
                                        <h2 class="section-title">Welcome To <span
                                                class="base--color">{{ env('APP_NAME') }}</span></h2>
                                        <p>Login into your account</p>
                                        @if ($errors->any())
                                        @foreach ($errors->all() as $error)
                                        <div class="alert alert-danger"> {{$error}} </div>

                                        @endforeach
                                        
                                        @endif
                                    </div>
                                    <div class="account-card__body">
                                        <form method="POST" action="{{url('login')}}"
                                            class="verify-gcaptcha">
                                           @csrf
                                            <div class="form-group">
                                                <label for="username" class="form-label">Username </label>
                                                <input type="text" name="name" value=""
                                                    class="form-control form--control" required>
                                            </div>

                                            <div class="form-group">
                                                <div class="d-flex flex-wrap justify-content-between mb-2">
                                                    <label for="password" class="form-label mb-0">Password</label>
                                                    <a class="fw-bold forgot-pass" href="{{url('password/reset')}}">
                                                        Forgot your password? </a>
                                                </div>
                                                <input id="password" type="password" class="form-control form--control"
                                                    name="password" required>
                                            </div>

                                            {{-- <div class="mb-3">

                                                <script src="../../../../www.google.com/recaptcha/api.js"></script>
                                                <div class="g-recaptcha"
                                                    data-sitekey="6LdPC88fAAAAADQlUf_DV6Hrvgm-pZuLJFSLDOWV"
                                                    data-callback="verifyCaptcha"></div>
                                                <div id="g-recaptcha-error"></div>
                                            </div> --}}

                                            <div class="form-group form--check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    id="remember">
                                                <label class="form-check-label" for="remember">
                                                    Remember Me </label>
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" id="recaptcha" class="btn--base w-100">
                                                    Login </button>
                                            </div>
                                            <p class="mb-0">Don't have any account? <a href="{{url('register')}}">Register</a>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- account section end -->
            </div>
            @include('layouts.website.footer')

        </div>
    @endsection
