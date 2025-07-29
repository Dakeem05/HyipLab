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
                                    <span class="font-weight-normal text-white">Confirm Your</span> 
                                    <b class="base--color">Password</b>
                                </h2>
                                
                                <p class="text-center text-white mb-5">
                                    {{ __('Please confirm your password before continuing.') }}
                                </p>
                                
                                <form method="POST" action="{{ route('password.confirm') }}" class="mt-4">
                                    @csrf
                                    
                                    <div class="form-group">
                                        <label for="password" class="form-label text-white">{{ __('Password') }}</label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-dark border-light">
                                                <i class="las la-lock text-white"></i>
                                            </span>
                                            <input id="password" type="password" class="form-control bg-dark text-white border-light @error('password') is-invalid @enderror" 
                                                name="password" required autocomplete="current-password">
                                        </div>
                                        @error('password')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group mt-5">
                                        <button type="submit" class="btn btn--base btn-block btn-lg">
                                            <i class="las la-check-circle mr-2"></i> {{ __('Confirm Password') }}
                                        </button>
                                    </div>
                                    
                                    <div class="mt-4 text-center">
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" class="text-white hover-base--color">
                                                <i class="las la-key mr-1"></i> {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
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
    
    .hover-base--color:hover {
        color: var(--base--color) !important;
    }
</style>
@endsection