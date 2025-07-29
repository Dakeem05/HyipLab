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
                            <div class="card-body p-5">
                                <h2 class="section-title text-center mb-4">
                                    <span class="font-weight-normal text-white">Reset Your</span> 
                                    <b class="base--color">Password</b>
                                </h2>
                                
                                @if (session('status'))
                                    <div class="alert alert-success bg-success text-white border-0 mb-4" role="alert">
                                        <i class="las la-check-circle mr-2"></i> {{ session('status') }}
                                    </div>
                                @endif
                                
                                <form method="POST" action="{{ route('password.email') }}" class="mt-4">
                                    @csrf
                                    
                                    <div class="form-group">
                                        <label for="email" class="form-label text-white">{{ __('Email Address') }}</label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-dark border-light">
                                                <i class="las la-envelope text-white"></i>
                                            </span>
                                            <input id="email" type="email" class="form-control bg-dark text-white border-light @error('email') is-invalid @enderror" 
                                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        </div>
                                        @error('email')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group mt-5">
                                        <button type="submit" class="btn btn--base btn-block btn-lg">
                                            <i class="las la-paper-plane mr-2"></i> {{ __('Send Password Reset Link') }}
                                        </button>
                                    </div>
                                    
                                    <div class="mt-4 text-center">
                                        <a href="{{ route('login') }}" class="text-white hover-base--color">
                                            <i class="las la-arrow-left mr-1"></i> {{ __('Back to Login') }}
                                        </a>
                                    </div>
                                </form>
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
    .form-control {
        background-color: #1a1a2e !important;
        border-color: #2d2d42 !important;
        color: #ffffff !important;
        height: 45px;
    }
    
    .form-control:focus {
        box-shadow: 0 0 0 0.25rem rgba(59, 130, 246, 0.25);
        border-color: #3b82f6;
    }
    
    .input-group-text {
        background-color: #1a1a2e !important;
        border-color: #2d2d42 !important;
        color: #6c757d !important;
    }
    
    .card {
        background-color: rgba(26, 26, 46, 0.8);
        backdrop-filter: blur(10px);
        border: 1px solid #2d2d42;
    }
    
    .invalid-feedback {
        color: #ff6b6b;
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