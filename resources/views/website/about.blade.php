@extends('layouts.website.about_layout')
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
                            <h2 class="page-title">About</h2>
                        </div>
                    </div>
                </div>
            </section>
            <!-- inner hero end -->
            <div class="section-wrapper">
                <section class="pt-120 pb-120 bg_img"
                    data-background="assets/images/frontend/how_work/631ca042137ab1662820418.jpg">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 text-center">
                                <div class="section-header">
                                    <h2 class="section-title"><span class="font-weight-normal">How</span> <b
                                            class="base--color">{{env('APP_NAME')}}</b> <span class="font-weight-normal">Works</span>
                                    </h2>
                                    <p>Get involved in our tremendous platform and Invest. We will utilize your money and
                                        give you profit in your wallet automatically.</p>
                                </div>
                            </div>
                        </div><!-- row end -->
                        <div class="row justify-content-center gy-5">
                            <div class="col-lg-4 col-md-6 work-item">
                                <div class="work-card text-center">
                                    <div class="work-card__icon base--color">
                                        <i class="lar la-user"></i> <span class="step-number">1</span>
                                    </div>
                                    <div class="work-card__content">
                                        <h4 class="base--color">Create Account</h4>
                                    </div>
                                </div><!-- work-card end -->
                            </div>
                            <div class="col-lg-4 col-md-6 work-item">
                                <div class="work-card text-center">
                                    <div class="work-card__icon base--color">
                                        <i class="las la-clipboard-list"></i> <span class="step-number">2</span>
                                    </div>
                                    <div class="work-card__content">
                                        <h4 class="base--color">Invest To Plan</h4>
                                    </div>
                                </div><!-- work-card end -->
                            </div>
                            <div class="col-lg-4 col-md-6 work-item">
                                <div class="work-card text-center">
                                    <div class="work-card__icon base--color">
                                        <i class="las la-wallet"></i> <span class="step-number">3</span>
                                    </div>
                                    <div class="work-card__content">
                                        <h4 class="base--color">Get Profit</h4>
                                    </div>
                                </div><!-- work-card end -->
                            </div>
                        </div>
                    </div>
                </section>
                <section class="about-section pt-120 pb-120 bg_img"
                    data-background="assets/images/frontend/about/631d85749f9311662879092.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 offset-lg-6">
                                <div class="about-content">
                                    <h2 class="section-title mb-3"><span class="font-weight-normal">About</span> <b
                                            class="base--color">Us</b></h2>
                                    <p>We are an international financial company engaged in investment activities, which are
                                        related to trading on financial markets and cryptocurrency exchanges performed by
                                        qualified professional traders.<br />
                                        <br />
                                        Our goal is to provide our investors with a reliable source of high income, while
                                        minimizing any possible risks and offering a high-quality service, allowing us to
                                        automate and simplify the relations between the investors and the trustees. We work
                                        towards increasing your profit margin by profitable investment. We look forward to
                                        you being part of our community.
                                    </p>
                                    {{-- <a href="about.html" class="btn--base mt-4">More Info</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- <section class="pt-120 pb-120">
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
                                                    <span>When can I deposit/withdraw from my Investment account?</span>
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse0" class="collapse" aria-labelledby="heading0"
                                            data-bs-parent="#accordionExample">
                                            <div class="card-body">Deposit and withdrawal are available for at any time. Be
                                                sure, that your funds are not used in any ongoing trade before the
                                                withdrawal. The available amount is shown in your dashboard on the main page
                                                of Investing platform.

                                                Deposit and withdrawal are available for at any time. Be sure, that your
                                                funds are not used in any ongoing trade before the withdrawal. The available
                                                amount is shown in your dashboard on the main page of Investing platform.
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
                                                    <span>How do I check my account balance?</span>
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse1" class="collapse" aria-labelledby="heading1"
                                            data-bs-parent="#accordionExample">
                                            <div class="card-body">You can see this anytime on your accounts dashboard. You
                                                can see this anytime on your accounts dashboard.</div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading2">
                                            <h2 class="mb-0">
                                                <button class="btn w-100 text-start collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse2"
                                                    aria-expanded="false" aria-controls="collapse2">
                                                    <i class="las la-question-circle"></i>
                                                    <span>I forgot my password, what should I do?</span>
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse2" class="collapse" aria-labelledby="heading2"
                                            data-bs-parent="#accordionExample">
                                            <div class="card-body">Visit the password reset page, type in your email
                                                address and click the `Reset` button. Visit the password reset page, type in
                                                your email address and click the `Reset` button.</div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading3">
                                            <h2 class="mb-0">
                                                <button class="btn w-100 text-start collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse3"
                                                    aria-expanded="false" aria-controls="collapse3">
                                                    <i class="las la-question-circle"></i>
                                                    <span>How will I know that the withdrawal has been successful?</span>
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse3" class="collapse" aria-labelledby="heading3"
                                            data-bs-parent="#accordionExample">
                                            <div class="card-body">You will get an automatic notification once we send the
                                                funds and you can always check your transactions or account balance. Your
                                                chosen payment system dictates how long it will take for the funds to reach
                                                you. You will get an automatic notification once we send the funds and you
                                                can always check your transactions or account balance. Your chosen payment
                                                system dictates how long it will take for the funds to reach you.</div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading4">
                                            <h2 class="mb-0">
                                                <button class="btn w-100 text-start collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse4"
                                                    aria-expanded="false" aria-controls="collapse4">
                                                    <i class="las la-question-circle"></i>
                                                    <span>How much can I withdraw?</span>
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapse4" class="collapse" aria-labelledby="heading4"
                                            data-bs-parent="#accordionExample">
                                            <div class="card-body">You can withdraw the full amount of your account balance
                                                minus the funds that are used currently for supporting opened positions. You
                                                can withdraw the full amount of your account balance minus the funds that
                                                are used currently for supporting opened positions.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> --}}
                <section class="pb-120 pt-120">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-8">
                                <div class="cta-wrapper bg_img border-radius--10 text-center"
                                    data-background="assets/images/frontend/cta/631c9f3d446e11662820157.jpg">
                                    <h2 class="title mb-3">Get Started Today With Us</h2>
                                    <p>This is a Revolutionary Money Making Platform! Invest for Future in Stable Platform
                                        and Make Fast Money. Not only we guarantee the fastest and the most exciting returns
                                        on your investments, but we also guarantee the security of your investment.</p>
                                    <a href="{{url('register')}}" class="btn--base mt-4">Join Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
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