<!doctype html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Winpath - FAQ</title>
    <meta name="title" Content="{{ env('APP_NAME') }} - FAQ">

    <meta name="description"
        content="WinPath is a secure investment platform offering high-yield plans with daily returns. Invest in cryptocurrency, Start earning today!">
    <meta name="keywords" content="admin,blog,aaaa,ddd,aaa">
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/logoIcon/favicon.png') }}" type="image/x-icon">


    <link rel="apple-touch-icon" href="{{ URL::asset('assets/images/logoIcon/logo.png') }}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Winpath - FAQ">

    <meta itemprop="name" content="Winpath - FAQ">
    <meta itemprop="description"
        content="WinPath is a secure investment platform offering high-yield plans with daily returns. Invest in cryptocurrency, Start earning today!">
    <meta itemprop="image" content="{{ URL::asset('assets/images/seo/winpath_seo_image.png') }}">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Winpath">
    <meta property="og:description"
        content="WinPath is a secure investment platform offering high-yield plans with daily returns. Invest in cryptocurrency, Start earning today!">
    <meta property="og:image" content="{{ URL::asset('assets/images/seo/winpath_seo_image.png') }}" />
    <meta property="og:image:type" content="jpg" />
    <meta property="og:image:width" content="1180" />
    <meta property="og:image:height" content="600" />
    {{-- <meta property="og:url" content=""""> --}}

    <meta name="twitter:card" content="summary_large_image">
    <!-- Bootstrap CSS -->
    <link href="{{ URL::asset('assets/global/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ URL::asset('assets/global/css/all.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ URL::asset('assets/global/css/line-awesome.min.css') }}" />

    <link rel="stylesheet" href="{{ URL::asset('assets/templates/bit_gold/css/vendor/animate.min.css') }}">

    <!-- slick slider css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/templates/bit_gold/css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/templates/bit_gold/css/vendor/dots.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('assets/templates/bit_gold/css/main.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('assets/templates/bit_gold/css/custom.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('assets/templates/bit_gold/css/colora100.css') }}?color=CCA354">
</head>

<body>
    {{-- @include('layouts.website.preloader') --}}
    @yield('main-content')




    <!-- cookies dark version start -->
    {{-- <div class="cookies-card text-center hide">
                    <div class="cookies-card__icon bg--base">
                        <i class="las la-cookie-bite"></i>
                    </div>
                    <p class="mt-4 cookies-card__content">We may use cookies or any other tracking technologies when you visit our website, including any other media form, mobile website, or mobile application related or connected to help customize the Site and improve your experience. <a
                            href="cookie-policy.html" class="text-primary" target="_blank">learn more</a></p>
                    <div class="cookies-card__btn mt-4">
                        <a href="javascript:void(0)" class="btn btn--base text-white w-100 policy">Allow</a>
                    </div>
                </div> --}}
    <!-- cookies dark version end -->


    <script src="{{ URL::asset('assets/global/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ URL::asset('assets/global/js/bootstrap.bundle.min.js') }}"></script>

    <!-- slick slider js -->
    <script src="{{ URL::asset('assets/templates/bit_gold/js/vendor/slick.min.js') }}"></script>
    <script src="{{ URL::asset('assets/templates/bit_gold/js/vendor/wow.min.js') }}"></script>
    <!-- dashboard custom js -->
    <script src="{{ URL::asset('assets/templates/bit_gold/js/app.js') }}"></script>

    <script>
        (function($) {
            "use strict"
            $('.investModal').click(function() {
                var symbol = '$';
                var currency = 'USD';
                var percent_charge_symbol = "%";
                $('.gateway-info').addClass('d-none');
                var modal = $('#investModal');
                var plan = $(this).data('plan');

                modal.find('.planName').text(plan.name)
                modal.find('[name=plan_id]').val(plan.id);
                let fixedAmount = parseFloat(plan.fixed_amount).toFixed(2);
                let minimumAmount = parseFloat(plan.minimum).toFixed(2);
                let maximumAmount = parseFloat(plan.maximum).toFixed(2);
                let interestAmount = parseFloat(plan.interest);

                if (plan.fixed_amount > 0) {
                    modal.find('.investAmountRange').text(`Invest: ${symbol}${fixedAmount}`);
                    modal.find('[name=amount]').val(fixedAmount);
                    modal.find('[name=amount]').attr('readonly', true);
                } else {
                    modal.find('.investAmountRange').text(
                        `Invest: ${symbol}${minimumAmount} - ${symbol}${maximumAmount}`);
                    modal.find('[name=amount]').val('');
                    modal.find('[name=amount]').removeAttr('readonly');
                }

                if (plan.interest_type == '1') {
                    modal.find('.interestDetails').html(`<strong> Interest: ${interestAmount}% </strong>`);
                } else {
                    modal.find('.interestDetails').html(
                        `<strong> Interest: ${interestAmount} ${percent_charge_symbol}  </strong>`);
                }
                if (plan.lifetime_status == '0') {
                    modal.find('.interestValidity').html(
                        `<strong>  Per ${plan.time} hours ,  ${plan.repeat_time} times</strong>`);
                } else {
                    modal.find('.interestValidity').html(
                        `<strong>  Per ${plan.time} hours,  life time </strong>`);
                }

            });

            $('[name=amount]').on('input', function() {
                $('[name=wallet_type]').trigger('change');
            })

            $('[name=wallet_type]').change(function() {
                var amount = $('[name=amount]').val();
                if ($(this).val() != 'deposit_wallet' && $(this).val() != 'interest_wallet' && amount) {
                    var resource = $('select[name=wallet_type] option:selected').data('gateway');
                    var fixed_charge = parseFloat(resource.fixed_charge);
                    var percent_charge = parseFloat(resource.percent_charge);
                    var charge = parseFloat(fixed_charge + (amount * percent_charge / 100)).toFixed(2);
                    $('.charge').text(charge);
                    $('.rate').text(parseFloat(resource.rate));
                    $('.gateway-info').removeClass('d-none');
                    if (resource.currency == 'USD') {
                        $('.rate-info').addClass('d-none');
                    } else {
                        $('.rate-info').removeClass('d-none');
                    }
                    $('.method_currency').text(resource.currency);
                    $('.total').text(parseFloat(charge) + parseFloat(amount));
                } else {
                    $('.gateway-info').addClass('d-none');
                }
            });
        })(jQuery);
    </script>

    {{-- <script>
                (function($) {
                    "use strict";
                    $('.subscribe-form').on('submit', function(e) {
                        e.preventDefault();
                        var data = $('.subscribe-form').serialize();
                        $.ajax({
                            type: "POST",
                            url: """/subscribe",
                            data: data,
                            success: function(response) {
                                if (response.status == 'success') {
                                    notify('success', response.message);
                                    $('#email').val('');
                                } else {
                                    notify('error', response.message);
                                }
                            }
                        });
                    });
                })(jQuery);
            </script>
         --}}

    <link rel="stylesheet" href="{{ URL::asset('assets/global/css/iziToast.min.css') }}">
    <script src="{{ URL::asset('assets/global/js/iziToast.min.js') }}"></script>

    @yield('alert')


    {{-- <script>
            (function ($) {
                "use strict";
                $(".langSel").on("change", function() {
                    window.location.href = """/change/"+$(this).val() ;
                });
        
                $('.policy').on('click',function(){
                    $.get('index.html', function(response){
                        $('.cookies-card').addClass('d-none');
                    });
                });
        
                setTimeout(function(){
                    $('.cookies-card').removeClass('hide')
                },2000);
        
                var inputElements = $('[type=text],[type=password],[type=email],[type=number],select,textarea');
                $.each(inputElements, function (index, element) {
                    element = $(element);
                    element.closest('.form-group').find('label').attr('for',element.attr('name'));
                    element.attr('id',element.attr('name'))
                });
        
                $.each($('input, select, textarea'), function (i, element) {
                    var elementType = $(element);
                    if(elementType.attr('type') != 'checkbox'){
                        if (element.hasAttribute('required')) {
                            $(element).closest('.form-group').find('label').addClass('required');
                        }
                    }
                });
        
        
                let headings = $('.table th');
                let rows = $('.table tbody tr');
                let columns
                let dataLabel;
                $.each(rows, function (index, element) {
                    columns = element.children;
                    if (columns.length == headings.length) {
                        $.each(columns, function (i, td) {
                            dataLabel = headings[i].innerText;
                            $(td).attr('data-label', dataLabel)
                        });
                    }
                });
        
            })(jQuery);
        </script> --}}
    <script>
        (function($) {
            "use strict";
            $(".langSel").on("change", function() {
                window.location.href = "" + $(this).val();
            });

            $('.policy').on('click', function() {
                $.get('index.html', function(response) {
                    $('.cookies-card').addClass('d-none');
                });
            });

            setTimeout(function() {
                $('.cookies-card').remove <h4 class="package-card__title base--color mb-2">SILVER</h4>

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
</div>Class('hide')
            }, 2000);

            var inputElements = $('[type=text],[type=password],[type=email],[type=number],select,textarea');
            $.each(inputElements, function(index, element) {
                element = $(element);
                element.closest('.form-group').find('label').attr('for', element.attr('name'));
                element.attr('id', element.attr('name'))
            });

            $.each($('input, select, textarea'), function(i, element) {
                var elementType = $(element);
                if (elementType.attr('type') != 'checkbox') {
                    if (element.hasAttribute('required')) {
                        $(element).closest('.form-group').find('label').addClass('required');
                    }
                }
            });


            let headings = $('.table th');
            let rows = $('.table tbody tr');
            let columns
            let dataLabel;
            $.each(rows, function(index, element) {
                columns = element.children;
                if (columns.length == headings.length) {
                    $.each(columns, function(i, td) {
                        dataLabel = headings[i].innerText;
                        $(td).attr('data-label', dataLabel)
                    });
                }
            });

        })(jQuery);
    </script>
    <script type="text/javascript">
        $(window).on('load', function() {
            setTimeout(function() {
                $('#pop-up').modal('show');


            }, 5000)
        });
    </script>
<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="c05d1bb1-fd3b-465f-a1e4-6b4540384edd";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>

    @yield('extra-js-script')

</body>


</html>
