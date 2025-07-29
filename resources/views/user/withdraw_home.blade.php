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
                        <h2 class="page-title">Withdraw Methods</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- inner hero end -->
        <div class="section-wrapper">
            <div class="cmn-section">
                <div class="container">
                    <div class="row mb-4 mb-sm-5 justify-content-center">
                        <div class="col-lg-6">
                            @if (session()->has('error'))
                            <div class="alert alert-danger">{{session()->get('error')}}</div>
    
                            @endif
    
                            @if (session()->has('success'))
                            <div class="alert alert-success">{{session()->get('success')}}</div>
    
                            @endif
                            <div class="text-end">
                                <a href="{{ url('user/transaction/history') }}" class="btn btn--base">Withdraw History</a>
                            </div>
                        </div>
                       
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <form action="{{ url('user/withdraw/create_request') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="method_code">
                                <input type="hidden" name="currency">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label class="form-label">Select Gateway</label>
                                            <select class="form-select form-control form--select" name="gateway" required>
                                               <option value="bitcoin">Bitcoin</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Amount</label>
                                            <div class="input-group">
                                                <input id="" type="number" step="any" name="amount"
                                                    class="form-control form--control deposit_amount" value="{{ $_GET['amount'] ?? '0' }}"
                                                    autocomplete="off" required>
                                                <span class="input-group-text bg--base">USD</span>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="form-label">Withdraw to this  address</label>
                                            <div class="input-group">
                                                <input type="text" step="any" name="withdraw_address" 
                                                    class="form-control form--control" required>
                                               
                                            </div>
                                            
                                        </div>
                                        <div class="mt-3 preview-details ">
                                            <ul class="list-group">
                                               
                                                {{-- <li class="list-group-item d-flex justify-content-between">
                                                    <span>Charge</span>
                                                    <span><span class="charge fw-bold">0</span> USD</span>
                                                </li> --}}
                                                <li class="list-group-item d-flex justify-content-between">
                                                    <span>Payable in BTC</span> <span><span class="payable fw-bold btcvalue">
                                                            </span>
                                                         BTC</span>
                                                </li>
                                                {{-- <li class="list-group-item justify-content-between  rate-element">
                                                    <span>Payable in BTC</span> <span><span class="payable fw-bold btcvalue">
                                                            {{ $amount_payable }}</span>
                                                        BTC</span>
                                                </li> --}}

                                                <li class="list-group-item justify-content-center crypto_currency ">
                                                    <span>Please make sure the withdraw address is correct to be able to recieve your withdrawn funds</span>
                                                </li>
                                            </ul>
                                        </div>

                                        <button type="submit" class="btn--base w-100 mt-3">Make Withdraw Request</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.website.footer')
    @endsection



    @section('extra-js-script')
        <script>
   
            (function($) {
               
                $('.deposit_amount').change(function() {
                    let amount = $('.deposit_amount').val();
                    let btc    = $('.btcvalue');
                   
                    let url = "https://blockchain.info/tobtc?currency=USD&value="+amount;
                   
                    $.get(url, function(data) {
                       
                        let BTC_amount = data;
                            
                        btc.text(BTC_amount)
                    });
                });
                
                   
                $('.deposit_amount').keypress(function(event) {
                   
                })
            })(jQuery);
        </script>

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



