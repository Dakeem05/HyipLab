@extends('layouts.website.faq_layout')
@section('main-content')

<body>
    <div class="preloader">
        <div class="preloader__imges">
            <img src="assets/images/frontend/preloader/632ebf9b581241664008091.png" class="preloader__img one"
                alt="No Image">
            <img src="assets/images/frontend/preloader/632ebf9b5e2681664008091.png" class="preloader__img two"
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
        <!-- inner hero start -->
        <section class="inner-hero bg_img"
            data-background="assets/images/frontend/breadcrumb/631d82f525a611662878453.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="page-title">FAQ- Frequently Asked Questions</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- inner hero end -->
        <div class="section-wrapper">
            <!-- contact section start -->
            <section class="pt-120 pb-120">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 text-center">
                            <div class="section-header">
                                <h2 class="section-title"><span class="font-weight-normal">Frequently Asked</span> <b
                                        class="base--color">Questions</b></h2>
                                <p>We answer some of your Frequently Asked Questions regarding our platform. If you have
                                    a query that is not answered here, Please contact us.</p>
                            </div>
                        </div>
                    </div><!-- row end -->
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="accordion cmn-accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="heading0">
                                        <h2 class="mb-0">
                                            <button class="btn w-100 text-start collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse0"
                                                aria-expanded="false" aria-controls="collapse0">
                                                <i class="las la-question-circle"></i>
                                                <span>What is ADD UP COIN</span>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapse0" class="collapse" aria-labelledby="heading0"
                                        data-bs-parent="#accordionExample">
                                        <div class="card-body">
                                            Winpath is a registered digital asset investment firm based in the UK. The platform,
                                             which includes advanced basic and technical analysis at the source of high return performance, offers high & fixed interest return. Aiming for success with its international investor network, experienced team, privileged information from business and technology world; Thewinpath.com stands out from its competitors with its proven quality and ease of use. The company, which is managed under the leadership of people who think and foresee the future, 
                                            is committed to achieving high returns from well-diversified portfolios and prioritizing clients
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="heading1">
                                        <h2 class="mb-0">
                                            <button class="btn w-100 text-start collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse1"
                                                aria-expanded="false" aria-controls="collapse1">
                                                <i class="las la-question-circle"></i>
                                                <span>Guranteed Interest, but how?</span>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapse1" class="collapse" aria-labelledby="heading1"
                                        data-bs-parent="#accordionExample">
                                        <div class="card-body">Digital assets are a class of assets considered dangerous and inconvenient. Many reasons such as liquidity, money laundering accusation, uncertainty of regulation, access restriction, volatile markets, functionality inquiries reduce trust in these assets. We believe that the risk factor should be 
                                            eliminated for all people who believe that finance will rise on distributed systems. That's why we offer high interest returns to platform investors. With careful and detailed examination of market conditions, daily trading volume, expectations; we change our portfolio distribution and adjust our investment strategy. With this active fund management, you enjoy the fixed interest rate return on the user side.</div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="heading2">
                                        <h2 class="mb-0">
                                            <button class="btn w-100 text-start collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse2"
                                                aria-expanded="false" aria-controls="collapse2">
                                                <i class="las la-question-circle"></i>
                                                <span>Winpath: What is it and how is it important?</span>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapse2" class="collapse" aria-labelledby="heading2"
                                        data-bs-parent="#accordionExample">
                                        <div class="card-body">With its proven high qualities and easy-to-use interface  the company is managed under the leadership of experts who thinks and foresee the future. Our Experts are committed to achieving the returns from well-diversified portfolios and prioritizing users. 

                                            Winpath is a registered digital asset investment firm based in the United Kingdom.
                                         The platform, which includes advanced basic and technical analysis at the source of high return performance, offers high and fixed interest return. Calculatingly, Winpath aims for success with its international investor network, experienced team, privileged information from business around the world.</div>
                                    </div>
                                </div>                                   
                                <div class="card">
                                    <div class="card-header" id="heading3">
                                        <h2 class="mb-0">
                                            <button class="btn w-100 text-start collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse3"
                                                aria-expanded="false" aria-controls="collapse3">
                                                <i class="las la-question-circle"></i>
                                                <span>Who developed Winpath?</span>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapse3" class="collapse" aria-labelledby="heading3"
                                        data-bs-parent="#accordionExample">
                                        <div class="card-body">Winpath was designed by a team of experts in 2018. Winpath is so far the only successful digital asset investment firm designed with trust over authorities and its users.</div>
                                    </div>
                                </div>                                   
                                <div class="card">
                                    <div class="card-header" id="heading4">
                                        <h2 class="mb-0">
                                            <button class="btn w-100 text-start collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse4"
                                                aria-expanded="false" aria-controls="collapse4">
                                                <i class="las la-question-circle"></i>
                                                <span>Where is Winpath Based?</span>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapse4" class="collapse" aria-labelledby="heading4"
                                        data-bs-parent="#accordionExample">
                                        <div class="card-body">Winpath is registered and stationed in Borehamwood, United Kingdom.</div>
                                    </div>
                                </div>                                   
                                <div class="card">
                                    <div class="card-header" id="heading5">
                                        <h2 class="mb-0">
                                            <button class="btn w-100 text-start collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse5"
                                                aria-expanded="false" aria-controls="collapse5">
                                                <i class="las la-question-circle"></i>
                                                <span>What can Winpath do?</span>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapse5" class="collapse" aria-labelledby="heading5"
                                        data-bs-parent="#accordionExample">
                                        <div class="card-body">Winpath has the power to change the financial landscape of every user’s income source. Signing up to Winpath as a passive income is just the beginning of financial freedom.</div>
                                    </div>
                                </div>                                   
                                <div class="card">
                                    <div class="card-header" id="heading6">
                                        <h2 class="mb-0">
                                            <button class="btn w-100 text-start collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse6"
                                                aria-expanded="false" aria-controls="collapse6">
                                                <i class="las la-question-circle"></i>
                                                <span>How Safe are Users Funds?</span>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapse6" class="collapse" aria-labelledby="heading6"
                                        data-bs-parent="#accordionExample">
                                        <div class="card-body">Thewinpath.com works with leading companies around the globe to ensure security of user’s funds. We store funds in advanced cold wallets developed by ledger.</div>
                                    </div>
                                </div>                                   
                                <div class="card">
                                    <div class="card-header" id="heading7">
                                        <h2 class="mb-0">
                                            <button class="btn w-100 text-start collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse7"
                                                aria-expanded="false" aria-controls="collapse7">
                                                <i class="las la-question-circle"></i>
                                                <span>What is maximum Deposit Limit For my Account?</span>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapse7" class="collapse" aria-labelledby="heading7"
                                        data-bs-parent="#accordionExample">
                                        <div class="card-body">Winpath offers the lowest deposit amount of hundred ($100) dollars investment plan. No limit for maximum deposit except for some plan boundaries. </div>
                                    </div>
                                </div>                                   
                                <div class="card">
                                    <div class="card-header" id="heading8">
                                        <h2 class="mb-0">
                                            <button class="btn w-100 text-start collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse8"
                                                aria-expanded="false" aria-controls="collapse8">
                                                <i class="las la-question-circle"></i>
                                                <span>How Can I Withdraw My Earnings?</span>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapse8" class="collapse" aria-labelledby="heading8"
                                        data-bs-parent="#accordionExample">
                                        <div class="card-body">To withdraw your earnings, follow these steps:
                                            
                                            <ul>
                                                <li style="list-style-type: none">1. Log into the user area.</li>
                                                <li style="list-style-type: none">2. Navigate to the “Withdraw” section.</li>
                                                <li style="list-style-type: none">3. Select a currency method.</li>
                                                <li style="list-style-type: none">4. Choose your wallet and enter </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>                                   
                                <div class="card">
                                    <div class="card-header" id="heading9">
                                        <h2 class="mb-0">
                                            <button class="btn w-100 text-start collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse9"
                                                aria-expanded="false" aria-controls="collapse9">
                                                <i class="las la-question-circle"></i>
                                                <span>Can I Reinvest My Earnings?</span>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapse9" class="collapse" aria-labelledby="heading9"
                                        data-bs-parent="#accordionExample">
                                        <div class="card-body">Elevate your investments and get controls of your profits!  To reinvest your earnings, you can manually create a deposit using money from your account balance. </div>
                                    </div>
                                </div>                                   
                                <div class="card">
                                    <div class="card-header" id="heading10">
                                        <h2 class="mb-0">
                                            <button class="btn w-100 text-start collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse10"
                                                aria-expanded="false" aria-controls="collapse10">
                                                <i class="las la-question-circle"></i>
                                                <span>How Long Does It Take For Withdrawals To Be Processed?</span>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapse10" class="collapse" aria-labelledby="heading10"
                                        data-bs-parent="#accordionExample">
                                        <div class="card-body">Just be ready for super-fast withdrawals! However, be alert for surprising turn of events. We’ll swiftly deliver your goodies and traverse the digital frontier for you. Fear Not! </div>
                                    </div>
                                </div>                                   
                                <div class="card">
                                    <div class="card-header" id="heading11">
                                        <h2 class="mb-0">
                                            <button class="btn w-100 text-start collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse11"
                                                aria-expanded="false" aria-controls="collapse11">
                                                <i class="las la-question-circle"></i>
                                                <span>How Does Winpath Referral Program Works?</span>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapse11" class="collapse" aria-labelledby="heading11"
                                        data-bs-parent="#accordionExample">
                                        <div class="card-body">Join our Amazing affiliate Program to receive up to 10% in rewards, as well as go up the level ladder and earn extra money. It’s time to step up and add more money to your wallet. </div>
                                    </div>
                                </div>                                   
                                <div class="card">
                                    <div class="card-header" id="heading12">
                                        <h2 class="mb-0">
                                            <button class="btn w-100 text-start collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse12"
                                                aria-expanded="false" aria-controls="collapse12">
                                                <i class="las la-question-circle"></i>
                                                <span>Can I Withdraw My Money At Any Time?</span>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapse12" class="collapse" aria-labelledby="heading12"
                                        data-bs-parent="#accordionExample">
                                        <div class="card-body">Yes, Indeed! You can take your money out of our platform anytime you want to. You can still get your money deposited back in a matter of clicks. No complications.  </div>
                                    </div>
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
    _smartsupp.key = '4ad6c53268ffbd524fd46f52c70270b1a3f83ecd';
    window.smartsupp||(function(d) {
      var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
      s=d.getElementsByTagName('script')[0];c=d.createElement('script');
      c.type='text/javascript';c.charset='utf-8';c.async=true;
      c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
    })(document);
    </script>
    <noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>
@endsection