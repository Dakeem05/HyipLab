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
                        <h2 class="page-title">Dashboard</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- inner hero end -->
        <div class="section-wrapper">
            <div class="pb-60 pt-60">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12">




                            

                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-12 mt-lg-0 mt-5">
                            <div class="row mb-none-30">
                                <div class="col-xl-4 col-sm-6 mb-30">
                                    <div class="d-widget d-flex justify-content-between gap-5">
                                        <div class="left-content">
                                            <span class="caption">Deposit Wallet Balance</span>
                                            <h4 class="currency-amount">{{$user_data['wallet_balance']}}</h4>
                                        </div>
                                        <div class="icon ms-auto">
                                            <i class="las la-dollar-sign"></i>
                                        </div>
                                    </div><!-- d-widget-two end -->
                                </div>
                                {{-- <div class="col-xl-4 col-sm-6 mb-30">
                                    <div class="d-widget d-flex justify-content-between gap-5">
                                        <div class="left-content">
                                            <span class="caption">Interest Wallet Balance</span>
                                            <h4 class="currency-amount">
                                                $0</h4>
                                        </div>
                                        <div class="icon ms-auto">
                                            <i class="las la-wallet"></i>
                                        </div>
                                    </div><!-- d-widget-two end -->
                                </div> --}}
                                {{-- <div class="col-xl-4 col-sm-6 mb-30">
                                    <div class="d-widget d-flex justify-content-between gap-5">
                                        <div class="left-content">
                                            <span class="caption">Total Invest</span>
                                            <h4 class="currency-amount">
                                                $0
                                            </h4>
                                        </div>
                                        <div class="icon ms-auto">
                                            <i class="las la-cubes "></i>
                                        </div>
                                    </div><!-- d-widget-two end -->
                                </div> --}}
                                {{-- <div class="col-xl-4 col-sm-6 mb-30">
                                    <div class="d-widget d-flex justify-content-between gap-5">
                                        <div class="left-content">
                                            <span class="caption">Total Deposit</span>
                                            <h4 class="currency-amount">
                                                $0
                                            </h4>
                                        </div>
                                        <div class="icon ms-auto">
                                            <i class="las la-credit-card"></i>
                                        </div>
                                    </div><!-- d-widget-two end -->
                                </div> --}}
                                <div class="col-xl-4 col-sm-6 mb-30">
                                    <div class="d-widget d-flex justify-content-between gap-5">
                                        <div class="left-content">
                                            <span class="caption">Total Withdraw</span>
                                            <h4 class="currency-amount">
                                                ${{number_format($withdraws,2)}}
                                            </h4>
                                        </div>
                                        <div class="icon ms-auto">
                                            <i class="las la-cloud-download-alt"></i>
                                        </div>
                                    </div><!-- d-widget-two end -->
                                </div>
                                <div class="col-xl-4 col-sm-6 mb-30">
                                    <a href="{{url('user/investment_plan')}}"><div class="d-widget d-flex justify-content-between gap-5">
                                        <div class="left-content">
                                            <span class="caption">Invest Now</span>
                                           
                                        </div>
                                        <div class="icon ms-auto">
                                            <i class="las la-coins"></i>
                                        </div>
                                    </div><!-- d-widget-two end --></a>
                                    
                                </div>
                            </div><!-- row end -->
                            <div class="row mt-50">
                                <div class="col-lg-12">
                                    <div class="table-responsive--md">
                                        <table class="table style--two">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    {{-- <th>Transaction ID</th> --}}
                                                    <th>Amount</th>
                                                    <th>Type</th>
                                                    <th>status</th>
                                                    {{-- <th>Post Balance</th> --}}
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($fetch_tranaction->count() > 0)
                                                @foreach ($fetch_tranaction as $item)
                                                <tr>
                                                    <td>
                                                        {{$item['created_at']}}
                                                    </td>
                                                    {{-- <td><span class="text-primary">ZFQX1AJXX64A</span></td> --}}

                                                    <td>
                                                        
                                                        <span class="text-success">
                                                            {{number_format($item['amount'],2)}}
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-info">{{$item['type']}}</span>
                                                    </td>
                                                    <td>
                                                        @if ($item['status'] == 0)
                                                        <span class="badge badge--warning">Pending</span>
                                                    @else
                                                        @if ($item['status'] == 1)
                                                            <span class="badge badge--success">completed</span>
                                                        @else
                                                            <span class="badge badge--danger">Declined</span>
                                                        @endif
                                                    @endif
                                                    </td>
                                                   
                                                   
                                                </tr>
                                                @endforeach
                                                    
                                                @endif
                                             
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!-- row end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
       @include('layouts.website.footer')
    </div>
@endsection
