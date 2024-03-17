@extends('layouts.website.website_layout')
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
            <div class="section-wrapper">
                <!-- hero start -->
                <section class="hero bg_img" data-background="{{asset('assets/images/frontend/banner/631c9810cbce71662818320.jpg')}}">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-xl-5">
                                <div class="hero__content">
                                    <h2 class="hero__title"><span class="text-white font-weight-normal">Invest for Future in
                                            Stable Platform</span> <b class="base--color">and Make Fast Money</b></h2>
                                    <p class="text-white f-size-18 mt-3">Invest in an Industry Leader, Professional, and
                                        Reliable Company. We provide you with the most necessary features that will make
                                        your experience better. Not only we guarantee the fastest and the most exciting
                                        returns on your investments, but we also guarantee the security of your investment.
                                    </p>
                                    <a href="{{ url('register') }}"
                                        class="btn--base text-uppercase font-weight-600 mt-4">Sign
                                        Up</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- hero end -->
                <script src="https://widgets.coingecko.com/coingecko-coin-price-marquee-widget.js"></script>
                <coingecko-coin-price-marquee-widget  coin-ids="bitcoin,ethereum,litecoin,ripple" currency="usd" background-color="#ffffff" locale="en"></coingecko-coin-price-marquee-widget>
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
                                    <a href="about.html" class="btn--base mt-4">More Info</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="pt-120 pb-120">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 text-center">
                                <div class="section-header">
                                    <h2 class="section-title"><span class="font-weight-normal">Investment</span> <b
                                            class="base--color">Plans</b></h2>
                                    <p>To make a solid investment, you have to know where you are investing. Find a plan
                                        which is best for you.</p>
                                </div>
                            </div>
                        </div><!-- row end -->
                        <div class="row gy-4 justify-content-center">
                           
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="package-card text-center bg_img"
                                    data-background="{{asset('assets/templates/bit_gold/images/bg/bg-4.png')}}">
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
                                        data-plan="{&quot;id&quot;:7,&quot;name&quot;:&quot;Platinum&quot;,&quot;minimum&quot;:&quot;100.00000000&quot;,&quot;maximum&quot;:&quot;5000.00000000&quot;,&quot;fixed_amount&quot;:&quot;0.00000000&quot;,&quot;interest&quot;:&quot;6.00000000&quot;,&quot;interest_type&quot;:0,&quot;time&quot;:&quot;24&quot;,&quot;time_name&quot;:&quot;Day&quot;,&quot;status&quot;:1,&quot;featured&quot;:0,&quot;capital_back&quot;:1,&quot;lifetime&quot;:0,&quot;repeat_time&quot;:&quot;7&quot;,&quot;created_at&quot;:&quot;2022-09-20T06:39:52.000000Z&quot;,&quot;updated_at&quot;:&quot;2022-09-20T06:39:52.000000Z&quot;}"
                                        class="btn--base btn-md mt-4 investModal">Invest Now</a>
                                </div><!-- package-card end -->
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="package-card text-center bg_img"
                                    data-background="{{asset('assets/templates/bit_gold/images/bg/bg-4.png')}}">
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
                                        data-plan="{&quot;id&quot;:8,&quot;name&quot;:&quot;Gold&quot;,&quot;minimum&quot;:&quot;0.00000000&quot;,&quot;maximum&quot;:&quot;0.00000000&quot;,&quot;fixed_amount&quot;:&quot;200.00000000&quot;,&quot;interest&quot;:&quot;2.00000000&quot;,&quot;interest_type&quot;:0,&quot;time&quot;:&quot;168&quot;,&quot;time_name&quot;:&quot;Week&quot;,&quot;status&quot;:1,&quot;featured&quot;:0,&quot;capital_back&quot;:1,&quot;lifetime&quot;:0,&quot;repeat_time&quot;:&quot;5&quot;,&quot;created_at&quot;:&quot;2022-09-20T06:40:37.000000Z&quot;,&quot;updated_at&quot;:&quot;2022-09-20T06:40:37.000000Z&quot;}"
                                        class="btn--base btn-md mt-4 investModal">Invest Now</a>
                                </div><!-- package-card end -->
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="package-card text-center bg_img"
                                    data-background="{{asset('assets/templates/bit_gold/images/bg/bg-4.png')}}">
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
                                        data-plan="{&quot;id&quot;:9,&quot;name&quot;:&quot;Life Time&quot;,&quot;minimum&quot;:&quot;100.00000000&quot;,&quot;maximum&quot;:&quot;500.00000000&quot;,&quot;fixed_amount&quot;:&quot;0.00000000&quot;,&quot;interest&quot;:&quot;0.20000000&quot;,&quot;interest_type&quot;:1,&quot;time&quot;:&quot;24&quot;,&quot;time_name&quot;:&quot;Day&quot;,&quot;status&quot;:1,&quot;featured&quot;:0,&quot;capital_back&quot;:0,&quot;lifetime&quot;:1,&quot;repeat_time&quot;:&quot;0&quot;,&quot;created_at&quot;:&quot;2022-09-20T06:41:45.000000Z&quot;,&quot;updated_at&quot;:&quot;2022-09-20T06:41:45.000000Z&quot;}"
                                        class="btn--base btn-md mt-4 investModal">Invest Now</a>
                                </div><!-- package-card end -->
                            </div>

                            <div class="modal fade" id="investModal">
                                <div class="modal-dialog modal-dialog-centered modal-content-bg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <strong class="modal-title text-white" id="ModalLabel">
                                                At first sign in your account </strong>
                                            <button type="button" class="close" data-bs-dismiss="modal">
                                                <i class="las la-times"></i>
                                            </button>
                                        </div>
                                        <form action=""
                                            method="post">
                                            <input type="hidden" name="_token"
                                                value="GTIKiscvTFMqFWQY6BtJLq08Z7YGPcoMhwHmdkVf"> <input type="hidden"
                                                name="plan_id">
                                            <div class="modal-footer">
                                                <a href="{{url('login')}}" class="btn--base btn-md w-100 text-center">At
                                                    first sign in your account</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </section>

                {{-- <section class="pt-120 pb-120 overlay--radial bg_img"
                    data-background="assets/images/frontend/why_choose/631d7ee5c26801662877413.jpg">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 text-center">
                                <div class="section-header">
                                    <h2 class="section-title"><span class="font-weight-normal">Why Choose</span> <b
                                            class="base--color">Hyiplab</b></h2>
                                    <p>Our goal is to provide our investors with a reliable source of high income, while
                                        minimizing any possible risks and offering a high-quality service.</p>
                                </div>
                            </div>
                        </div><!-- row end -->
                        <div class="row justify-content-center gy-4">
                            <div class="col-xl-4 col-md-6">
                                <div class="choose-card border-radius--5">
                                    <div class="choose-card__header mb-3">
                                        <div class="choose-card__icon base--color">
                                            <i class="las la-copy"></i>
                                        </div>
                                        <h4 class="choose-card__title base--color">Legal Company</h4>
                                    </div>
                                    <p>Our company conducts absolutely legal activities in the legal field. We are certified
                                        to operate investment business, we are legal and safe.</p>
                                </div><!-- choose-card end -->
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="choose-card border-radius--5">
                                    <div class="choose-card__header mb-3">
                                        <div class="choose-card__icon base--color">
                                            <i class="las la-lock"></i>
                                        </div>
                                        <h4 class="choose-card__title base--color">High reliability</h4>
                                    </div>
                                    <p>We are trusted by a huge number of people. We are working hard constantly to improve
                                        the level of our security system and minimize possible risks.</p>
                                </div><!-- choose-card end -->
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="choose-card border-radius--5">
                                    <div class="choose-card__header mb-3">
                                        <div class="choose-card__icon base--color">
                                            <i class="las la-user-lock"></i>
                                        </div>
                                        <h4 class="choose-card__title base--color">Anonymity</h4>
                                    </div>
                                    <p>Anonymity and using cryptocurrency as a payment instrument. In the era of electronic
                                        money – this is one of the most convenient ways of cooperation.</p>
                                </div><!-- choose-card end -->
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="choose-card border-radius--5">
                                    <div class="choose-card__header mb-3">
                                        <div class="choose-card__icon base--color">
                                            <i class="las la-shipping-fast"></i>
                                        </div>
                                        <h4 class="choose-card__title base--color">Quick Withdrawal</h4>
                                    </div>
                                    <p>Our all retreats are treated spontaneously once requested. There are high maximum
                                        limits. The minimum withdrawal amount is only $10 .</p>
                                </div><!-- choose-card end -->
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="choose-card border-radius--5">
                                    <div class="choose-card__header mb-3">
                                        <div class="choose-card__icon base--color">
                                            <i class="las la-link"></i>
                                        </div>
                                        <h4 class="choose-card__title base--color">Referral Program</h4>
                                    </div>
                                    <p>We are offering a certain level of referral income through our referral program. you
                                        can increase your income by simply refer a few people.</p>
                                </div><!-- choose-card end -->
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="choose-card border-radius--5">
                                    <div class="choose-card__header mb-3">
                                        <div class="choose-card__icon base--color">
                                            <i class="las la-headset"></i>
                                        </div>
                                        <h4 class="choose-card__title base--color">24/7 Support</h4>
                                    </div>
                                    <p>We provide 24/7 customer support through e-mail and telegram. Our support
                                        representatives are periodically available to elucidate any difficulty.</p>
                                </div><!-- choose-card end -->
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="choose-card border-radius--5">
                                    <div class="choose-card__header mb-3">
                                        <div class="choose-card__icon base--color">
                                            <i class="las la-server"></i>
                                        </div>
                                        <h4 class="choose-card__title base--color">Dedicated Server</h4>
                                    </div>
                                    <p>We are using a dedicated server for the website which allows us exclusive use of the
                                        resources of the entire server.</p>
                                </div><!-- choose-card end -->
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="choose-card border-radius--5">
                                    <div class="choose-card__header mb-3">
                                        <div class="choose-card__icon base--color">
                                            <i class="lab la-expeditedssl"></i>
                                        </div>
                                        <h4 class="choose-card__title base--color">SSL Secured</h4>
                                    </div>
                                    <p>Comodo Essential-SSL Security encryption confirms that the presented content is
                                        genuine and legitimate.</p>
                                </div><!-- choose-card end -->
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="choose-card border-radius--5">
                                    <div class="choose-card__header mb-3">
                                        <div class="choose-card__icon base--color">
                                            <i class="las la-shield-alt"></i>
                                        </div>
                                        <h4 class="choose-card__title base--color">DDOS Protection</h4>
                                    </div>
                                    <p>We are using one of the most experienced, professional, and trusted DDoS Protection
                                        and mitigation provider.</p>
                                </div><!-- choose-card end -->
                            </div>
                        </div>
                    </div>
                </section> --}}
                {{-- <section class="pt-120 pb-120">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="section-header text-center">
                                    <h2 class="section-title"><span class="font-weight-normal">Profit</span> <b
                                            class="base--color">Calculator</b></h2>
                                    <p>You must know the calculation before investing in any plan, so you never make
                                        mistakes. Check the calculation and you will get as our calculator says.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xl-8">
                                <div class="profit-calculator-wrapper">
                                    <form class="profit-calculator">
                                        <div class="row">
                                            <div class="mb-3 col-lg-6">
                                                <label>Choose Plan</label>
                                                <select class="base--bg" id="changePlan">
                                                    <option value="14" data-fixed_amount="1000.00000000"
                                                        data-minimum_amount="0.00000000" data-maximum_amount="0.00000000">
                                                        Cobra</option>
                                                    <option value="13" data-fixed_amount="0.00000000"
                                                        data-minimum_amount="500.00000000"
                                                        data-maximum_amount="1000.00000000"> Elephant</option>
                                                    <option value="12" data-fixed_amount="0.00000000"
                                                        data-minimum_amount="200.00000000"
                                                        data-maximum_amount="5000.00000000"> Crown</option>
                                                    <option value="11" data-fixed_amount="500.00000000"
                                                        data-minimum_amount="0.00000000" data-maximum_amount="0.00000000">
                                                        Silver</option>
                                                    <option value="10" data-fixed_amount="0.00000000"
                                                        data-minimum_amount="500.00000000"
                                                        data-maximum_amount="5000.00000000"> Black Horse</option>
                                                    <option value="9" data-fixed_amount="0.00000000"
                                                        data-minimum_amount="100.00000000"
                                                        data-maximum_amount="500.00000000"> Life Time</option>
                                                    <option value="8" data-fixed_amount="200.00000000"
                                                        data-minimum_amount="0.00000000" data-maximum_amount="0.00000000">
                                                        Gold</option>
                                                    <option value="7" data-fixed_amount="0.00000000"
                                                        data-minimum_amount="100.00000000"
                                                        data-maximum_amount="5000.00000000"> Platinum</option>
                                                    <option value="6" data-fixed_amount="200.00000000"
                                                        data-minimum_amount="0.00000000" data-maximum_amount="0.00000000">
                                                        Slivesto</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-lg-6">
                                                <label>Invest Amount <span class="invest-range"></span></label>
                                                <input type="text" placeholder="0.00"
                                                    class="form-control base--bg invest-input"
                                                    onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')">
                                            </div>
                                            <div class="col-lg-12">
                                                <h5 class="profit-input base--color"></h5>
                                                <code class="period"></code>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> --}}

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
                                                Addupcoin is a registered digital asset investment firm based in the UK. The platform,
                                                 which includes advanced basic and technical analysis at the source of high return performance, offers high & fixed interest return. Aiming for success with its international investor network, experienced team, privileged information from business and technology world; Addupcoin.com stands out from its competitors with its proven quality and ease of use. The company, which is managed under the leadership of people who think and foresee the future, 
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
                                   
                                   
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- testimonial section start -->
                {{-- <section class="pt-120 pb-120 bg_img overlay--radial"
                    data-background="assets/images/frontend/testimonial/631d7ddd2fe6c1662877149.jpg">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 text-center">
                                <div class="section-header">
                                    <h2 class="section-title"><span class="font-weight-normal">What Users Say</span> <b
                                            class="base--color">About Us</b></h2>
                                    <p>We are doing really good at this market and here are the words we loved to get from a
                                        few of our users.</p>
                                </div>
                            </div>
                        </div><!-- row end -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="testimonial-slider">
                                    <div class="single-slide">
                                        <div class="testimonial-card">
                                            <div class="testimonial-card__content">
                                                <p>I have invested with this platform and gotten my money in my account.
                                                    This is legit and safe. Great doing business with them.</p>
                                            </div>
                                            <div class="testimonial-card__client">
                                                <div class="thumb">
                                                    <img src="assets/images/frontend/testimonial/631d7e336da8c1662877235.jpg"
                                                        alt="image">
                                                </div>
                                                <div class="content">
                                                    <h6 class="name">Melodie Ferguson</h6>
                                                    <span class="designation">User from India</span>
                                                </div>
                                            </div>
                                        </div><!-- testimonial-card end -->
                                    </div>
                                    <div class="single-slide">
                                        <div class="testimonial-card">
                                            <div class="testimonial-card__content">
                                                <p>Legit....and legit. Although the payment was processed manually, I have
                                                    received my first payment within a very short time., I think nice for
                                                    invest at this site.</p>
                                            </div>
                                            <div class="testimonial-card__client">
                                                <div class="thumb">
                                                    <img src="assets/images/frontend/testimonial/631d7e52d2dcf1662877266.jpg"
                                                        alt="image">
                                                </div>
                                                <div class="content">
                                                    <h6 class="name">Samantha Levy</h6>
                                                    <span class="designation">User From USA</span>
                                                </div>
                                            </div>
                                        </div><!-- testimonial-card end -->
                                    </div>
                                    <div class="single-slide">
                                        <div class="testimonial-card">
                                            <div class="testimonial-card__content">
                                                <p>I have invested with this platform and gotten my money in my account.
                                                    This is legit and safe. Great doing business with them.</p>
                                            </div>
                                            <div class="testimonial-card__client">
                                                <div class="thumb">
                                                    <img src="assets/images/frontend/testimonial/631d7e6f11faf1662877295.jpg"
                                                        alt="image">
                                                </div>
                                                <div class="content">
                                                    <h6 class="name">Geoffrey Crawford</h6>
                                                    <span class="designation">User From Nigeria</span>
                                                </div>
                                            </div>
                                        </div><!-- testimonial-card end -->
                                    </div>
                                    <div class="single-slide">
                                        <div class="testimonial-card">
                                            <div class="testimonial-card__content">
                                                <p>Legit....and legit. Although the payment was processed manually, I have
                                                    received my first payment within a very short time., I think nice for
                                                    invest at this site.</p>
                                            </div>
                                            <div class="testimonial-card__client">
                                                <div class="thumb">
                                                    <img src="assets/images/frontend/testimonial/633edd66c19231665064294.jpg"
                                                        alt="image">
                                                </div>
                                                <div class="content">
                                                    <h6 class="name">David Doe</h6>
                                                    <span class="designation">User from England</span>
                                                </div>
                                            </div>
                                        </div><!-- testimonial-card end -->
                                    </div>
                                </div>
                            </div>
                        </div><!-- row end -->
                    </div>
                </section> --}}
                <!-- testimonial section end -->
                {{-- <section class="pt-120 pb-120 bg_img"
                    data-background="assets/images/frontend/team/631d7cee5a6e31662876910.jpg">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 text-center">
                                <div class="section-header">
                                    <h2 class="section-title"><span class="font-weight-normal">Our Expert</span> <b
                                            class="base--color">Team Members</b></h2>
                                    <p>We have a great team including developers, designers, and Traders. The Team always
                                        working hard to give you the maximum profit.</p>
                                </div>
                            </div>
                        </div><!-- row end -->
                        <div class="row justify-content-center gy-4">
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="team-card">
                                    <div class="team-card__thumb">
                                        <img src="assets/images/frontend/team/631d7d27b87b91662876967.jpg" alt="image">
                                    </div>
                                    <div class="team-card__content">
                                        <h4 class="name mb-1">Callie Mcdowell</h4>
                                        <span class="designation">CEO</span>
                                    </div>
                                </div><!-- team-card end -->
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="team-card">
                                    <div class="team-card__thumb">
                                        <img src="assets/images/frontend/team/631d7d3659a841662876982.jpg" alt="image">
                                    </div>
                                    <div class="team-card__content">
                                        <h4 class="name mb-1">Marcia Weeks</h4>
                                        <span class="designation">CTO</span>
                                    </div>
                                </div><!-- team-card end -->
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="team-card">
                                    <div class="team-card__thumb">
                                        <img src="assets/images/frontend/team/631d7d451b43e1662876997.jpg" alt="image">
                                    </div>
                                    <div class="team-card__content">
                                        <h4 class="name mb-1">Sage Bray</h4>
                                        <span class="designation">Marketing Head</span>
                                    </div>
                                </div><!-- team-card end -->
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="team-card">
                                    <div class="team-card__thumb">
                                        <img src="assets/images/frontend/team/631d7d59199b41662877017.jpg" alt="image">
                                    </div>
                                    <div class="team-card__content">
                                        <h4 class="name mb-1">Cyrus Briggs</h4>
                                        <span class="designation">Developer</span>
                                    </div>
                                </div><!-- team-card end -->
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="team-card">
                                    <div class="team-card__thumb">
                                        <img src="assets/images/frontend/team/631d7d67880c71662877031.jpg" alt="image">
                                    </div>
                                    <div class="team-card__content">
                                        <h4 class="name mb-1">Colette Mccarty</h4>
                                        <span class="designation">UX Expert</span>
                                    </div>
                                </div><!-- team-card end -->
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="team-card">
                                    <div class="team-card__thumb">
                                        <img src="assets/images/frontend/team/631d7d89303111662877065.jpg" alt="image">
                                    </div>
                                    <div class="team-card__content">
                                        <h4 class="name mb-1">Alden Odom</h4>
                                        <span class="designation">SEO Expert</span>
                                    </div>
                                </div><!-- team-card end -->
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="team-card">
                                    <div class="team-card__thumb">
                                        <img src="assets/images/frontend/team/631d7da2f198c1662877090.jpg" alt="image">
                                    </div>
                                    <div class="team-card__content">
                                        <h4 class="name mb-1">Tanek Gilmore</h4>
                                        <span class="designation">SEO Expert</span>
                                    </div>
                                </div><!-- team-card end -->
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="team-card">
                                    <div class="team-card__thumb">
                                        <img src="assets/images/frontend/team/631d7db766b581662877111.jpg" alt="image">
                                    </div>
                                    <div class="team-card__content">
                                        <h4 class="name mb-1">Upton Blair</h4>
                                        <span class="designation">Manager</span>
                                    </div>
                                </div><!-- team-card end -->
                            </div>
                        </div>
                    </div>
                </section> --}}
                <section class="pt-120 pb-120">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 text-center">
                                <div class="section-header">
                                    <h2 class="section-title"><span class="font-weight-normal">Our Latest</span> <b
                                            class="base--color">Transaction</b></h2>
                                    <p>Here is the log of the most recent transactions including withdraw and deposit made
                                        by our users.</p>
                                </div>
                            </div>
                        </div><!-- row end -->
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <ul class="nav nav-tabs custom--style-two justify-content-center" id="transactionTab"
                                    role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="deposit-tab" data-bs-toggle="tab" href="#deposit"
                                            role="tab" aria-controls="deposit" aria-selected="true">Latest
                                            Deposit</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="withdraw-tab" data-bs-toggle="tab" href="#withdraw"
                                            role="tab" aria-controls="withdraw" aria-selected="false">Latest
                                            Withdraw</a>
                                    </li>
                                </ul>

                                <div class="tab-content mt-4" id="transactionTabContent">
                                    <div class="tab-pane fade show active" id="deposit" role="tabpanel"
                                        aria-labelledby="deposit-tab">
                                        <div class="table-responsive--sm">
                                            <table class="table style--two">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Date</th>
                                                        <th>Amount</th>
                                                        <th>Gateway</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   
                                                    <tr>
                                                        <td data-label="Name">
                                                            Awadhes ff
                                                        </td>
                                                        <td data-label="Date">2022-10-17</td>
                                                        <td data-label="Amount">200 USD</td>
                                                        <td data-label="Gateway">BTC</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-label="Name">
                                                            Ghulam Abbas
                                                        </td>
                                                        <td data-label="Date">2022-10-15</td>
                                                        <td data-label="Amount">1000 USD</td>
                                                        <td data-label="Gateway">BTC</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-label="Name">
                                                            André Jacques GOGO
                                                        </td>
                                                        <td data-label="Date">2022-10-14</td>
                                                        <td data-label="Amount">1000 USD</td>
                                                        <td data-label="Gateway">BTC</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-label="Name">
                                                            lurdnsika
                                                        </td>
                                                        <td data-label="Date">2022-10-13</td>
                                                        <td data-label="Amount">10000 USD</td>
                                                        <td data-label="Gateway">BTC Transafer</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-label="Name">
                                                            Trade master
                                                        </td>
                                                        <td data-label="Date">2022-10-13</td>
                                                        <td data-label="Amount">10000 USD</td>
                                                        <td data-label="Gateway">Stripe Hosted</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-label="Name">
                                                            Charlotte 
                                                        </td>
                                                        <td data-label="Date">2022-10-13</td>
                                                        <td data-label="Amount">10000 USD</td>
                                                        <td data-label="Gateway">Stripe Hosted</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-label="Name">
                                                            Bastien Julez
                                                        </td>
                                                        <td data-label="Date">2022-10-13</td>
                                                        <td data-label="Amount">10000 USD</td>
                                                        <td data-label="Gateway">Stripe Hosted</td>
                                                    </tr>
                                                  
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="withdraw" role="tabpanel"
                                        aria-labelledby="withdraw-tab">
                                        <div class="table-responsive--md">
                                            <table class="table style--two">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Amount</th>
                                                        <th scope="col">Method</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td data-label="Name">Raphael Rush</td>
                                                        <td data-label="Date">2022-09-21</td>
                                                        <td data-label="Amount">365 USD</td>
                                                        <td data-label="Method">BTC</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-label="Name">Eve Hawkins</td>
                                                        <td data-label="Date">2022-09-21</td>
                                                        <td data-label="Amount">245 USD</td>
                                                        <td data-label="Method">BTC</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-label="Name">Ruth Herman</td>
                                                        <td data-label="Date">2022-09-21</td>
                                                        <td data-label="Amount">412 USD</td>
                                                        <td data-label="Method">Crypto Wire</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-label="Name">Glenna Mcdowell</td>
                                                        <td data-label="Date">2022-09-21</td>
                                                        <td data-label="Amount">325 USD</td>
                                                        <td data-label="Method">Coin Transfer</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-label="Name">Hilda Baird</td>
                                                        <td data-label="Date">2022-09-21</td>
                                                        <td data-label="Amount">365 USD</td>
                                                        <td data-label="Method">Mobile Banking</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-label="Name">Benjamin Santos</td>
                                                        <td data-label="Date">2022-09-21</td>
                                                        <td data-label="Amount">120 USD</td>
                                                        <td data-label="Method">Bank Wire</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-label="Name">User Name</td>
                                                        <td data-label="Date">2020-12-06</td>
                                                        <td data-label="Amount">100 USD</td>
                                                        <td data-label="Method">Mobile Money</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div><!-- tab-content end -->
                            </div>
                        </div>
                    </div>
                </section>
                {{-- <section class="pt-120 pb-120 border-top-1">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 text-center">
                                <div class="section-header">
                                    <h2 class="section-title"><span class="font-weight-normal">Our Top</span> <b
                                            class="base--color">Investors</b></h2>
                                    <p>Here are the investor leaders who have made the maximum investment with our system.
                                    </p>
                                </div>
                            </div>
                        </div><!-- row end -->
                        <div class="row justify-content-center gy-4">
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="investor-card border-radius--5">
                                    <span class="investor-card__number">1st</span>
                                    <h5 class="investor-card__name">azzd fzfz</h5>
                                    <h6 class="name">rooted</h6>
                                    <span class="amount f-size-14">Investment - $114,294.85</span>
                                </div><!-- investor-card end -->
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="investor-card border-radius--5">
                                    <span class="investor-card__number">2nd</span>
                                    <h5 class="investor-card__name">testingo testingo</h5>
                                    <h6 class="name">nekotreci66</h6>
                                    <span class="amount f-size-14">Investment - $76,200.00</span>
                                </div><!-- investor-card end -->
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="investor-card border-radius--5">
                                    <span class="investor-card__number">3rd</span>
                                    <h5 class="investor-card__name">User Name</h5>
                                    <h6 class="name">username</h6>
                                    <span class="amount f-size-14">Investment - $26,150.00</span>
                                </div><!-- investor-card end -->
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="investor-card border-radius--5">
                                    <span class="investor-card__number">4th</span>
                                    <h5 class="investor-card__name">Sofian Logo</h5>
                                    <h6 class="name">Sofian14</h6>
                                    <span class="amount f-size-14">Investment - $14,300.00</span>
                                </div><!-- investor-card end -->
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="investor-card border-radius--5">
                                    <span class="investor-card__number">5th</span>
                                    <h5 class="investor-card__name">Michael john</h5>
                                    <h6 class="name">mikejohn</h6>
                                    <span class="amount f-size-14">Investment - $10,000.00</span>
                                </div><!-- investor-card end -->
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="investor-card border-radius--5">
                                    <span class="investor-card__number">6th</span>
                                    <h5 class="investor-card__name">Maruti Dombar</h5>
                                    <h6 class="name">marutikd91</h6>
                                    <span class="amount f-size-14">Investment - $9,800.00</span>
                                </div><!-- investor-card end -->
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="investor-card border-radius--5">
                                    <span class="investor-card__number">7th</span>
                                    <h5 class="investor-card__name">Saacid Jama</h5>
                                    <h6 class="name">saacidjama11</h6>
                                    <span class="amount f-size-14">Investment - $9,100.00</span>
                                </div><!-- investor-card end -->
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="investor-card border-radius--5">
                                    <span class="investor-card__number">8th</span>
                                    <h5 class="investor-card__name">adfgadfg adsgadfg</h5>
                                    <h6 class="name">astgasdg1223</h6>
                                    <span class="amount f-size-14">Investment - $9,000.00</span>
                                </div><!-- investor-card end -->
                            </div>
                        </div>
                    </div>
                </section> --}}
                <section class="pb-120 pt-120 border-top-1">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-8">
                                <div class="cta-wrapper bg_img border-radius--10 text-center"
                                    data-background="assets/images/frontend/cta/631c9f3d446e11662820157.jpg">
                                    <h2 class="title mb-3">Get Started Today With Us</h2>
                                    <p>This is a Revolutionary Money Making Platform! Invest for Future in Stable Platform
                                        and Make Fast Money. Not only we guarantee the fastest and the most exciting returns
                                        on your investments, but we also guarantee the security of your investment.</p>
                                    <a href="{{ url('register') }}" class="btn--base mt-4">Join Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="pb-120">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 text-center">
                                <div class="section-header">
                                    <h2 class="section-title"><span class="font-weight-normal">Payment We</span> <b
                                            class="base--color">Accept</b></h2>
                                    <p>We accept all major cryptocurrencies and fiat payment methods to make your investment
                                        process easier with our platform.</p>
                                </div>
                            </div>
                        </div><!-- row end -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="payment-slider">
                                    <div class="single-slide">
                                        <div class="brand-item">
                                            <img src="assets/images/frontend/we_accept/63319095f3d411664192661.jpg"
                                                alt="image">
                                        </div><!-- brand-item end -->
                                    </div>
                                    <div class="single-slide">
                                        <div class="brand-item">
                                            <img src="assets/images/frontend/we_accept/6331909d64be71664192669.jpg"
                                                alt="image">
                                        </div><!-- brand-item end -->
                                    </div>
                                    <div class="single-slide">
                                        <div class="brand-item">
                                            <img src="assets/images/frontend/we_accept/633190a588df71664192677.jpg"
                                                alt="image">
                                        </div><!-- brand-item end -->
                                    </div>
                                    <div class="single-slide">
                                        <div class="brand-item">
                                            <img src="assets/images/frontend/we_accept/633190ad89c261664192685.jpg"
                                                alt="image">
                                        </div><!-- brand-item end -->
                                    </div>
                                    <div class="single-slide">
                                        <div class="brand-item">
                                            <img src="assets/images/frontend/we_accept/633190b56702e1664192693.jpg"
                                                alt="image">
                                        </div><!-- brand-item end -->
                                    </div>
                                    <div class="single-slide">
                                        <div class="brand-item">
                                            <img src="assets/images/frontend/we_accept/633190beae8061664192702.jpg"
                                                alt="image">
                                        </div><!-- brand-item end -->
                                    </div>
                                    <div class="single-slide">
                                        <div class="brand-item">
                                            <img src="assets/images/frontend/we_accept/633190c81d2361664192712.jpg"
                                                alt="image">
                                        </div><!-- brand-item end -->
                                    </div>
                                    <div class="single-slide">
                                        <div class="brand-item">
                                            <img src="assets/images/frontend/we_accept/633190d1715f71664192721.jpg"
                                                alt="image">
                                        </div><!-- brand-item end -->
                                    </div>
                                    <div class="single-slide">
                                        <div class="brand-item">
                                            <img src="assets/images/frontend/we_accept/633190dadd0f81664192730.jpg"
                                                alt="image">
                                        </div><!-- brand-item end -->
                                    </div>
                                    <div class="single-slide">
                                        <div class="brand-item">
                                            <img src="assets/images/frontend/we_accept/633190e5aa7371664192741.jpg"
                                                alt="image">
                                        </div><!-- brand-item end -->
                                    </div>
                                    <div class="single-slide">
                                        <div class="brand-item">
                                            <img src="assets/images/frontend/we_accept/633190f8ef6061664192760.jpg"
                                                alt="image">
                                        </div><!-- brand-item end -->
                                    </div>
                                    <div class="single-slide">
                                        <div class="brand-item">
                                            <img src="assets/images/frontend/we_accept/63319103114611664192771.jpg"
                                                alt="image">
                                        </div><!-- brand-item end -->
                                    </div>
                                    <div class="single-slide">
                                        <div class="brand-item">
                                            <img src="assets/images/frontend/we_accept/6331910d5ef4e1664192781.jpg"
                                                alt="image">
                                        </div><!-- brand-item end -->
                                    </div>
                                    <div class="single-slide">
                                        <div class="brand-item">
                                            <img src="assets/images/frontend/we_accept/633191199cfcb1664192793.jpg"
                                                alt="image">
                                        </div><!-- brand-item end -->
                                    </div>
                                    <div class="single-slide">
                                        <div class="brand-item">
                                            <img src="assets/images/frontend/we_accept/633191261ce231664192806.jpg"
                                                alt="image">
                                        </div><!-- brand-item end -->
                                    </div>
                                    <div class="single-slide">
                                        <div class="brand-item">
                                            <img src="assets/images/frontend/we_accept/6331912f34a631664192815.jpg"
                                                alt="image">
                                        </div><!-- brand-item end -->
                                    </div>
                                </div><!-- payment-slider end -->
                            </div>
                        </div>
                    </div>
                </section>
                <div class="modal fade" id="pop-up">
                    <div class="modal-dialog modal-dialog-centered modal-content-bg modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <strong class="modal-title text-white" id="ModalLabel">
                                    Sign Up Today And Earn Money Daily<span class="planName"></span>
                                </strong>
                                <button type="button" class="close" data-bs-dismiss="modal">
                                    <i class="las la-times"></i>
                                </button>
                            </div>

                            <div class="modal-body">
                                <div class="row gy-4 justify-content-center">
                                    
                                    <div class="col-xl-3 col-lg-4 col-md-6">
                                        <div class="package-card text-center bg_img"
                                            data-background="{{asset('assets/templates/bit_gold/images/bg/bg-4.png')}}">
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
                                           
                                        </div><!-- package-card end -->
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6">
                                        <div class="package-card text-center bg_img"
                                            data-background="{{asset('assets/templates/bit_gold/images/bg/bg-4.png')}}">
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
                                            
                                        </div><!-- package-card end -->
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6">
                                        <div class="package-card text-center bg_img"
                                            data-background="{{asset('assets/templates/bit_gold/images/bg/bg-4.png')}}">
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
                                            
                                        </div><!-- package-card end -->
                                    </div>
                                    
        
                                    <div class="modal fade" id="investModal">
                                        <div class="modal-dialog modal-dialog-centered modal-content-bg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <strong class="modal-title text-white" id="ModalLabel">
                                                        t first sign in your account </strong>
                                                    <button type="button" class="close" data-bs-dismiss="modal">
                                                        <i class="las la-times"></i>
                                                    </button>
                                                </div>
                                                <form action=""
                                                    method="post">
                                                   @csrf
                                                    <div class="modal-footer">
                                                        <a href="{{url('login')}}" class="btn--base btn-md w-100 text-center">At
                                                            first sign in your account</a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                       
                                        <a type="submit" href="{{url('register')}}" class="btn btn--base btn-md">Join Now</a>
                                    </div>
        
        
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
                {{-- <section class="pt-120 pb-120 border-top-1">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 text-center">
                                <div class="section-header">
                                    <h2 class="section-title"><span class="font-weight-normal">Our Latest News</span></h2>
                                    <p>you will get each update about our system and the world market in this area. Keep
                                        checking our Latest News to be in touch.</p>
                                </div>
                            </div>
                        </div><!-- row end -->
                        <div class="row justify-content-center gy-4">
                            <div class="col-lg-4 col-md-6">
                                <div class="blog-card h-100">
                                    <div class="blog-card__thumb">
                                        <img src="assets/images/frontend/blog/thumb_6331b1fab41151664201210.jpg"
                                            alt="image">
                                    </div>
                                    <div class="blog-card__content">
                                        <h5 class="blog-card__title mb-2"><a
                                                href="blog/voluptatum-est-expedita-officia-eos/369.html">Voluptatum est
                                                expedita officia, eos</a></h5>

                                        <p>It is a long established fact that a reader will be distracted by the readable
                                            content of a page when looking at its layout. The point of using Lorem Ipsum is
                                            that it has a more-or...</p>
                                        <a href="blog/voluptatum-est-expedita-officia-eos/369.html"
                                            class="btn--base btn-md mt-4">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="blog-card h-100">
                                    <div class="blog-card__thumb">
                                        <img src="assets/images/frontend/blog/thumb_6331b1e8db6511664201192.jpg"
                                            alt="image">
                                    </div>
                                    <div class="blog-card__content">
                                        <h5 class="blog-card__title mb-2"><a
                                                href="blog/voluptatum-est-expedita-officia-eos/368.html">Voluptatum est
                                                expedita officia, eos</a></h5>

                                        <p>It is a long established fact that a reader will be distracted by the readable
                                            content of a page when looking at its layout. The point of using Lorem Ipsum is
                                            that it has a more-or...</p>
                                        <a href="blog/voluptatum-est-expedita-officia-eos/368.html"
                                            class="btn--base btn-md mt-4">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="blog-card h-100">
                                    <div class="blog-card__thumb">
                                        <img src="assets/images/frontend/blog/thumb_6331b1d007fc91664201168.jpg"
                                            alt="image">
                                    </div>
                                    <div class="blog-card__content">
                                        <h5 class="blog-card__title mb-2"><a
                                                href="blog/voluptatum-est-expedita-officia-eos/367.html">Voluptatum est
                                                expedita officia, eos</a></h5>

                                        <p>It is a long established fact that a reader will be distracted by the readable
                                            content of a page when looking at its layout. The point of using Lorem Ipsum is
                                            that it has a more-or...</p>
                                        <a href="blog/voluptatum-est-expedita-officia-eos/367.html"
                                            class="btn--base btn-md mt-4">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> --}}
                {{-- <section class="pb-120">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="subscribe-wrapper bg_img"
                                    data-background="assets/images/frontend/subscribe/631ca2753add11662820981.jpg">
                                    <div class="row align-items-center">
                                        <div class="col-lg-5">
                                            <h2 class="title">Join Today And From Your Investment</h2>
                                        </div>
                                        <div class="col-lg-7 mt-lg-0 mt-4">
                                          <a href=""  class="btn--base mt-4"><i
                                            class="las la-btc"></i></a>
                                        </div>
                                    </div>
                                </div><!-- subscribe-wrapper end -->
                            </div>
                        </div>
                    </div>
                </section> --}}


            </div>
            @include('layouts.website.footer')
        </div>
       
    @endsection
