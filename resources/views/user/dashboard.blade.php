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
                                    {{-- <a href="{{url('user/investment_plan')}}"> --}}
                                        <div style="display: flex; flex-direction: column" class="d-widget">
                                        <div class="left-content">
                                            <span class="caption">Referral code</span>
                                           
                                        </div>
                                        <div style="display: flex; position: relative;">
                                            <div>   
                                                <h1 id="copyText" style="font-size: 1.5rem">{{$ref_code}}</h1>
                                            </div>
                                            {{-- <div style="margin-left: auto"> --}}
                                                <p id="copied" style="position: absolute; right:2rem; display: none;">Copied!!!</p>
                                                <button id="copyBtn" style="font-size: 10px; color: #000; margin-left: auto; background-color: transparent;" onclick="copyToClipboard('{{$ref_code}}')">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M4 7v14h14v2H4c-1.1 0-2-.9-2-2V7zm16-4c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H8c-1.1 0-2-.9-2-2V5c0-1.1.9-2 2-2h3.18C11.6 1.84 12.7 1 14 1s2.4.84 2.82 2zm-6 0c-.55 0-1 .45-1 1s.45 1 1 1s1-.45 1-1s-.45-1-1-1m-4 4V5H8v12h12V5h-2v2m-3 8h-5v-2h5m3-2h-8V9h8z"/></svg>
                                                </button>
                                            {{-- </div> --}}
                                        </div>
                                    </div><!-- d-widget-two end -->
                                {{-- </a> --}}
                                    
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


@section('extra-js-script')
<script>
    
    async function copyToClipboard(element) {
        await navigator.clipboard.writeText(element);
        let copied = document.getElementById('copied');
        copied.style.display = 'block';
        setTimeout(() => {
            copied.style.display = 'none';
            
        }, 3000);
    }

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

