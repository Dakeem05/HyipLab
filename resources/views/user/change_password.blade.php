@extends('layouts.user.user_layout')
@section('main-content')
    @include('layouts.website.preloader')

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
                    @include('layouts.user.nav')
                </div>
            </div><!-- header__bottom end -->
        </header>
        <!-- header-section end  -->
        <!-- inner hero start -->
        <section class="inner-hero bg_img"
            data-background="{{asset('assets/images/frontend/breadcrumb/631d82f525a611662878453.jpg')}}">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-6">
                        <h2 class="page-title">Chane Password</h2>
                    </div>
                </div>
            </div>
        </section>

        <!-- inner hero end -->
        <div class="section-wrapper">
            <div class="cmn-section">
                <div class="container">
                    <div class="row justify-content-center mt-4">
                        <div class="col-md-8">

                            <div class="card">
                                @if (session()->has('error'))
                                <div class="alert alert-danger">{{session()->get('error')}}</div>
        
                                @endif
        
                                @if (session()->has('success'))
                                <div class="alert alert-success">{{session()->get('success')}}</div>
        
                                @endif
                                <div class="card-body">

                                    <form action="{{url('user/change_password')}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label class="form-label">Current Password</label>
                                            <input type="password" class="form-control form--control"
                                                name="old_password" required autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">New Password</label>
                                            <input type="password" class="form-control form--control" name="password"
                                                required autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Confirm New Password</label>
                                            <input type="password" class="form-control form--control"
                                                name="password_confirmation" required autocomplete="off">
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
            </div>
        </div>
        @include('layouts.website.footer')
    </div>
@endsection
