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
            data-background="{{ asset('assets/images/frontend/breadcrumb/631d82f525a611662878453.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="page-title">Profile Settings</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- inner hero end -->
        <div class="section-wrapper">
            <div class="cmn-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-30">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-2">Emmanuel Kufre</h4>
                        <ul class="list-group">

                            <li class="list-group-item d-flex justify-content-between align-items-center">
                               <span><i class="las la-user base--color"></i> Username</span> <span class="fw-bold">{{$user_data->name}}</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span><i class="las la-envelope base--color"></i> Email</span> <span class="fw-bold">[Email is protected for the demo]</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span><i class="las la-phone base--color"></i> Mobile</span> <span class="fw-bold">[Mobile is protected for the demo]</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span><i class="las la-globe base--color"></i> Country</span> <span class="fw-bold">Nigeria</span>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <form class="register" action="" method="post">
                            <input type="hidden" name="_token" value="YrsCbWBeeUjw8Z9LNFxcQozo0RsExZ5esJDcG2Hs">                                <div class="row">
                                <div class="form-group col-sm-6">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control form--control" name="firstname" value="Emmanuel" required>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" class="form-control form--control" name="lastname" value="Kufre" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label class="form-label">Address</label>
                                    <input type="text" class="form-control form--control" name="address" value="45 afaha road">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="form-label">State</label>
                                    <input type="text" class="form-control form--control" name="state" value="Akwa Ibom">
                                </div>
                            </div>


                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label class="form-label">Zip Code</label>
                                    <input type="text" class="form-control form--control" name="zip" value="">
                                </div>

                                <div class="form-group col-sm-6">
                                    <label class="form-label">City</label>
                                    <input type="text" class="form-control form--control" name="city" value="Uyo">
                                </div>
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
@endsection
