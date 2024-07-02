@extends('layouts.website.contact_layout')
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
                        <h2 class="page-title">Contact Us</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- inner hero end -->
        <div class="section-wrapper">
            <!-- contact section start -->
            <section class="pt-120 pb-120">
                <div class="container">
                    <div class="contact-wrapper">
                        <div class="row">
                            <div class="col-lg-6 contact-thumb bg_img"
                                data-background="assets/images/frontend/contact/631c9e4f1666c1662819919.jpg">
                            </div>
                            <div class="col-lg-6 contact-form-wrapper">
                                <h2 class="font-weight-bold mb-2">Contact With Us</h2>
                                <p class="font-weight-bold">If you have any questions or queries that are not answered
                                    on our website, please feel free to contact us. We will try to respond to you as
                                    soon as possible. Thank you so much.</p>
                                <form action=""
                                    class="contact-form verify-gcaptcha mt-4">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <input type="text" name="name" placeholder="Full Name"
                                                class="form-control form--control" required>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <input type="email" name="email" placeholder="Email Address"
                                                class="form-control form--control" required>
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <input name="subject" placeholder="Subject"
                                                class="form-control form--control" required>
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <textarea class="form-control form--control" name="message" placeholder="Message" required></textarea>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3">

                                                <script src="../../../www.google.com/recaptcha/api.js"></script>
                                                <div class="g-recaptcha"
                                                    data-sitekey="6LdPC88fAAAAADQlUf_DV6Hrvgm-pZuLJFSLDOWV"
                                                    data-callback="verifyCaptcha"></div>
                                                <div id="g-recaptcha-error"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="submit" class="btn--base">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- contact-wrapper end -->
                </div>
                <div class="container pt-120">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="row mb-none-30">
                                <div class="col-md-4 col-sm-6 mb-30">
                                    <div class="contact-item">
                                        <i class="las la-phone"></i>
                                        <h5 class="mt-2">Phone Number</h5>
                                        <div class="mt-4">
                                            <p>+01234 5678 9000</p>
                                        </div>
                                    </div><!-- contact-item end -->
                                </div>
                                <div class="col-md-4 col-sm-6 mb-30">
                                    <div class="contact-item">
                                        <i class="far fa-envelope-open"></i>
                                        <h5 class="mt-2">Email Address</h5>
                                        <div class="mt-4">
                                            <p><a href=""
                                                    class="__cf_email__"
                                                    data-cfemail="debabbb3b19ebba6bfb3aeb2bbf0bdb1b3">[email&#160;protected]</a>
                                            </p>
                                        </div>
                                    </div><!-- contact-item end -->
                                </div>
                                <div class="col-md-4 col-sm-6 mb-30">
                                    <div class="contact-item">
                                        <i class="las la-map-marker"></i>
                                        <h5 class="mt-2">Office Address</h5>
                                        <div class="mt-4">
                                            <p>3015 Suit pagla road, Singapore</p>
                                        </div>
                                    </div><!-- contact-item end -->
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