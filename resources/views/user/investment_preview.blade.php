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
                        <h2 class="page-title">Investment Plan</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- inner hero end -->
        <div class="section-wrapper">
            <div class="cmn-section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card custom--card">
                                <div class="card-header card-header-bg">
                                    <h5 class="text-center"> <i class="las la-wallet"></i> {{env('APP_NAME')}}</h5>
                                </div>
                                <div class="card-body  ">
                                    <form action="{{ url('user/investment/start') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p class="text-center mt-2">You have requested an investment in the {{$plan ?? ""}} plan, <b
                                                        class="text-success">{{number_format($investment_amount,2) ?? ""}} USD</b> will be charged from your account  </p>

                                                <div class="my-4">
                                                    <p>Please Send To below payment Details
                                                    <div><br></div>
                                                    <div>Ivestment Type: {{$plan ?? ""}} </div>
                                                    <div>Amount: {{number_format($investment_amount,2) ?? ""}} USD</div>
                                                    <div>Investment Returns: {{$investment_returns ?? ""}} USD</div>
                                                    <div>Frequency: {{$investment_frequency ?? ""}} </div>
                                                    </p>
                                                </div>

                                            </div>


                                            <div class="col-md-12">
                                                
                                                <div class="form-group">
                                                    <button type="submit" class="btn--base w-100">Invest Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.website.footer')
        </div>
    @endsection
