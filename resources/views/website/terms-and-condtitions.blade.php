@extends('layouts.website.terms-and-condtitions_layout')
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
                        <h2 class="page-title">TERMS AND CONDITIONS</h2>
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
                                <h2 class="section-title"><span class="font-weight-normal">TERMS AND CONDITIONS</h2>
                                    <p>Thewinpath.com Terms and Conditions</p>
                                </div>
                        </div>
                        <div class="col-lg-10">
                            <article>
                                <p>Please read the following rules carefully before signing in.</p>
                                <br>
                                <p>You agree to be of legal age in your country to partake in this program, and in all the cases your minimal age must be 18 years. </p>
                                <br>
                                <p>Thewinpath.com is not available to the general public and is opened only to the qualified members whom have duly signed up successfully. The use of this site is restricted to our members and to individuals personally invited by them. Every deposit is considered to be a private transaction between the Thewinpath.com and its members.   </p>
                                <br>
                                <p>As a private transaction, the program is exempted from the US securities Act of 1933, the US securities Exchange Act of 1934 and the US investment Company Act of 1940 and all other rules, regulations and amendments thereof. We are not FDIC insured.</p>
                                <br>
                                <p>You agree that all information, communications, materials coming from Thewinpath.com are unsolicited and must be kept private, confidential and protected from any disclosure. Moreover, the information, communications and materials contained herein are not to be regarded as an offer, nor a solicitation for investments in any jurisdiction which deems non-public offers or solicitations unlawful, nor to any person to whom it will be unlawful to make such offer or solicitation.</p>
                                <br>
                                <p>All the data giving by a member to Thewinpath.com will be only privately used and not disclosed to any third parties. Thewinpath.com is not responsible or liable for any loss of data.</p>
                                <br>
                                <p>You agree to hold all principals and members harmless of any liability. You are investing at your own risk and you agree that a past performance is not an explicit guarantee for the same future performance. You agree that all information, communications and materials you will find on this site are intended to be regarded as an informational and educational matter and not an investment advice.</p>
                                <br>
                                <p>We reserve the right to change the rules, commissions and rates of the program at any time and at our sole discretion without notice, especially in order to respect the integrity and security of the members' interests. You agree that it is your sole responsibility to review the current terms.</p>
                                <br>
                                <p>Thewinpath.com is not responsible or liable for any damages, losses and costs resulting from any violation of the conditions and terms and/or use of our website by a member. You guarantee to Thewinpath.com that you will not use this site in any illegal way and you agree to respect your local, national and international laws.</p>
                                <br>
                                <p>Don't post bad vote on Public Forums and at Gold Rating Site without contacting the administrator of our program FIRST. Maybe there was a technical problem with your transaction, so please always CLEAR the thing with the administrator.</p>
                                <br>
                                <p>We will not tolerate SPAM or any type of UCE in this program. SPAM violators will be immediately and permanently removed from the program.</p>
                                <br>
                                <p>Thewinpath.com reserves the right to accept or decline any member for membership without explanation.</p>
                                <br>
                                <p>If you do not agree with the above disclaimer, please do not go any further.</p>
                            </article>
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