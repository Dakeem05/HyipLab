@extends('layouts.website.website_layout')

@section('main-content')
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
        <section class="pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="card bg-dark border-0 shadow-lg rounded-lg">
                            <div class="card-body p-5 text-center">
                                <div class="mb-4">
                                    <i class="las la-envelope-open-text base--color" style="font-size: 3.5rem;"></i>
                                </div>
                                
                                <h2 class="section-title mb-4">
                                    <span class="font-weight-normal text-white">Verify Your</span> 
                                    <b class="base--color">Email Address</b>
                                </h2>
                                
                                @if (session('resent'))
                                    <div class="alert alert-success bg-success text-white border-0 mb-4" role="alert">
                                        <i class="las la-check-circle mr-2"></i> 
                                        {{ __('A fresh verification link has been sent to your email address.') }}
                                    </div>
                                @endif
                                
                                <p class="text-white mb-4">
                                    {{ __('Before proceeding, please check your email for a verification link.') }}
                                </p>
                                
                                <p class="text-white mb-5">
                                    {{ __('If you did not receive the email') }},
                                </p>
                                
                                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                    @csrf
                                    <button type="submit" class="btn btn--base btn-lg">
                                        <i class="las la-paper-plane mr-2"></i> 
                                        {{ __('Click here to request another') }}
                                    </button>
                                </form>
                                
                                <div class="mt-4">
                                    <a href="{{ route('home') }}" class="text-white hover-base--color">
                                        <i class="las la-arrow-left mr-1"></i> 
                                        {{ __('Return to Home') }}
                                    </a>
                                </div>
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

@section('extra-css')
<style>
    .card {
        background-color: rgba(26, 26, 46, 0.8);
        backdrop-filter: blur(10px);
        border: 1px solid #2d2d42;
    }
    
    .alert-success {
        background-color: rgba(40, 167, 69, 0.2) !important;
        border-color: rgba(40, 167, 69, 0.3) !important;
    }
    
    .hover-base--color:hover {
        color: var(--base--color) !important;
    }
</style>
@endsection