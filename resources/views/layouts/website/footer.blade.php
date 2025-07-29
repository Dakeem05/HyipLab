<footer class="footer bg_img" data-background="assets/images/frontend/footer/631ca001534431662820353.jpg">
    <div class="footer__top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    {{-- <a href="""" class="site-logo"><img
                            src="assets/images/logoIcon/logo_bit_gold.png" alt="image"></a> --}}
                    <ul class="footer-short-menu d-flex flex-wrap justify-content-center mt-3">
                        <li><a href="{{url('privacy-policy')}}">Privacy Policy</a></li>
                        <li><a href="{{url('terms-and-condtitions')}}">Terms and Service</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-md-left text-center">
                    <p class="copy-right-text">&copy;  <span id="year"></span> <a href=""
                            class="text--base">{{ env('APP_NAME') }}</a>. All Rights Reserved</p>
                </div>
                <div class="col-md-6">
                    <ul
                        class="social-link-list d-flex flex-wrap justify-content-md-end justify-content-center">
                        <li><a href="https://t.me/+CH_HRdqUCtE5YTRk" target="_blank"><i
                            class="fab fa-telegram"></i></a></li>
                        <li><a href="https://facebook.com/" target="_blank"><i
                                    class="lab la-facebook-f"></i></a></li>
                        <li><a href="https://twitter.com/" target="_blank"><i class="lab la-twitter"></i></a>
                        </li>
                        
                        <li><a href="https://www.linkedin.com/" target="_blank"><i
                                    class="lab la-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>
    var date = new Date();
    var year = date.getFullYear();
    document.getElementById("year").innerHTML = year;
</script>