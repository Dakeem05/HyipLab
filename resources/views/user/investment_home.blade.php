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
            <section class=" pt-60 pb-60 ">
                <div class="container">
                    <div class="row justify-content-center gy-4">
                        <div class="col-md-12">
                            @if (session()->has("error"))
                                <div class="alert alert-danger">{{session()->get('error')}}</div>
                            @endif
                            <div class="text-end">
                                <a href="{{url('user/investment/history')}}"
                                    class="btn btn--base">
                                    My Investments </a>
                            </div>
                        </div>





                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="package-card text-center bg_img"
                                data-background="{{ asset('assets/templates/bit_gold/images/bg/bg-4.png') }}">
                                <h4 class="package-card__title base--color mb-2">BASIC</h4>

                                <ul class="package-card__features mt-4">
                                    <li>Return 3.5%
                                    </li>

                                    <li>
                                        Every Day
                                    </li>
                                    <li>For 5 Day
                                    </li>
                                    <li>
                                        Instant Payout

                                        <span class="badge badge--success">Active</span>
                                    </li>
                                </ul>
                                <div class="package-card__range mt-5 base--color">
                                    $100.00 -
                                    $999.00
                                </div>
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#investModal"
                                    data-plan="{&quot;id&quot;:&quot;basic&quot;,&quot;name&quot;:&quot;BASIC&quot;,&quot;minimum&quot;:&quot;100.00000&quot;,&quot;maximum&quot;:&quot;999.0000&quot;,&quot;fixed_amount&quot;:&quot;0.00000000&quot;,&quot;interest&quot;:&quot;3.5&quot;,&quot;interest_type&quot;:0,&quot;time&quot;:&quot;24&quot;,&quot;time_name&quot;:&quot;Day&quot;,&quot;status&quot;:1,&quot;featured&quot;:0,&quot;capital_back&quot;:1,&quot;lifetime&quot;:0,&quot;repeat_time&quot;:&quot;50&quot;,&quot;created_at&quot;:&quot;2022-09-20T06:47:26.000000Z&quot;,&quot;updated_at&quot;:&quot;2022-09-20T06:47:41.000000Z&quot;}"
                                    class="btn--base btn-md mt-4 investModal">Invest Now</a>
                            </div><!-- package-card end -->
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="package-card text-center bg_img"
                                data-background="{{ asset('assets/templates/bit_gold/images/bg/bg-4.png') }}">
                                <h4 class="package-card__title base--color mb-2">SILVER</h4>

                                <ul class="package-card__features mt-4">
                                    <li>Return 5%
                                    </li>

                                    <li>
                                        Every Day
                                    </li>
                                    <li>For 7 Days
                                    </li>
                                    <li>
                                        Instant Payout

                                        <span class="badge badge--success">Active</span>
                                    </li>
                                </ul>
                                <div class="package-card__range mt-5 base--color">
                                    $1000.00 - $19999.00
                                </div>
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#investModal"
                                    data-plan="{&quot;id&quot;:&quot;silver&quot;,&quot;name&quot;:&quot;SILVER&quot;,&quot;minimum&quot;:&quot;1000.00000&quot;,&quot;maximum&quot;:&quot;19999.0000&quot;,&quot;fixed_amount&quot;:&quot;0.00000000&quot;,&quot;interest&quot;:&quot;5.0&quot;,&quot;interest_type&quot;:0,&quot;time&quot;:&quot;24&quot;,&quot;time_name&quot;:&quot;Day&quot;,&quot;status&quot;:1,&quot;featured&quot;:0,&quot;capital_back&quot;:1,&quot;lifetime&quot;:0,&quot;repeat_time&quot;:&quot;50&quot;,&quot;created_at&quot;:&quot;2022-09-20T06:47:26.000000Z&quot;,&quot;updated_at&quot;:&quot;2022-09-20T06:47:41.000000Z&quot;}"
                                    class="btn--base btn-md mt-4 investModal">Invest Now</a>
                            </div><!-- package-card end -->
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="package-card text-center bg_img"
                                data-background="{{ asset('assets/templates/bit_gold/images/bg/bg-4.png') }}">

                                <h4 class="package-card__title base--color mb-2">PRO</h4>

                                <ul class="package-card__features mt-4">
                                    <li>Return 10%
                                    </li>

                                    <li>
                                        Every Day
                                    </li>
                                    <li>For 7 Days </li>
                                    <li>
                                        Instant Payout

                                        <span class="badge badge--success">Active</span>
                                    </li>
                                </ul>
                                <div class="package-card__range mt-5 base--color">
                                    $20,000.00 -
                                    Unlimited
                                </div>
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#investModal"
                                    data-plan="{&quot;id&quot;:&quot;pro&quot;,&quot;name&quot;:&quot;PRO&quot;,&quot;minimum&quot;:&quot;20000.00&quot;,&quot;maximum&quot;:&quot;unlimited&quot;,&quot;fixed_amount&quot;:&quot;0.00000000&quot;,&quot;interest&quot;:&quot;5.0&quot;,&quot;interest_type&quot;:0,&quot;time&quot;:&quot;24&quot;,&quot;time_name&quot;:&quot;Day&quot;,&quot;status&quot;:1,&quot;featured&quot;:0,&quot;capital_back&quot;:1,&quot;lifetime&quot;:0,&quot;repeat_time&quot;:&quot;50&quot;,&quot;created_at&quot;:&quot;2022-09-20T06:47:26.000000Z&quot;,&quot;updated_at&quot;:&quot;2022-09-20T06:47:41.000000Z&quot;}"
                                    class="btn--base btn-md mt-4 investModal">Invest Now</a>
                            </div><!-- package-card end -->
                        </div>

                        <div class="modal fade" id="investModal">
                            <div class="modal-dialog modal-dialog-centered modal-content-bg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <strong class="modal-title text-white" id="ModalLabel">
                                            Confirm to invest on <span class="planName"></span>
                                        </strong>
                                        <button type="button" class="close" data-bs-dismiss="modal">
                                            <i class="las la-times"></i>
                                        </button>
                                    </div>
                                    <form action="{{ url('user/investment/preview') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="plan_id" value="">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <h6 class="text-center investAmountRange"></h6>
                                                <p class="text-center mt-1 interestDetails"></p>
                                                <p class="text-center interestValidity"></p>

                                                {{-- <label>Select Wallet</label>
                                                <select class="form-control form-select" name="wallet_type" required>
                                                    @foreach ($gateways as $key => $item)
                                                        <option value="{{ $key }}">{{ $key }}</option>
                                                    @endforeach
                                                </select> --}}
                                                <code class="gateway-info rate-info d-none">Rate: 1 USD = <span
                                                        class="rate"></span> <span class="method_currency"></span></code>
                                            </div>
                                            <div class="form-group">
                                                <label>Invest Amount</label>
                                                <div class="input-group">
                                                    <input type="number" step="any" class="form-control" name="amount"
                                                        required>
                                                    <div class="input-group-text bg--base">USD</div>
                                                </div>
                                                <code class="gateway-info d-none">Charge: <span class="charge"></span>
                                                    USD. Total amount: <span class="total"></span> USD</code>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger btn-md"
                                                data-bs-dismiss="modal">No</button>
                                            <button type="submit" class="btn btn--base btn-md">Yes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </section>


        </div>
        @include('layouts.website.footer')
    </div>
@endsection
