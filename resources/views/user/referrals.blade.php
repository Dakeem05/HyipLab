@extends('layouts.user.user_layout')

@section('main-content')
    @include('layouts.website.preloader')

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
                    @include('layouts.user.nav')

                </div>
            </div><!-- header__bottom end -->
        </header>
        <!-- header-section end  -->
        <!-- inner hero start -->
        <section class="inner-hero bg_img"
            data-background="{{ asset('assets/images/frontend/breadcrumb/631d82f525a611662878453.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="page-title">Transaction History</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- inner hero end -->
        <div class="section-wrapper">
            <section class="pb-60 pt-60">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 mt-lg-0 mt-5">
                            <div class="row mb-none-30">
                                <div class="col-xl-4 col-sm-6 mb-30">
                                    <div style="display: flex; flex-direction: column" class="d-widget">
                                        <div class="left-content">
                                            <span class="caption">Referral Link</span>
                                        
                                        </div>
                                        <div style="display: flex; position: relative;">
                                            <div>   
                                                <h1 id="copyLink" style="font-size: 1rem">{{env('APP_URL')."register?ref=".$ref_code}}</h1>
                                            </div>
                                            {{-- <div style="margin-left: auto"> --}}
                                                <p id="copiedLink" style="position: absolute; right:2rem; display: none;">Copied!!!</p>
                                                <button id="copyBtn" style="font-size: 10px; color: #000; margin-left: auto; background-color: transparent;" onclick="copyLinkToClipboard('{{env('APP_URL')."register?ref=".$ref_code}}')">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M4 7v14h14v2H4c-1.1 0-2-.9-2-2V7zm16-4c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H8c-1.1 0-2-.9-2-2V5c0-1.1.9-2 2-2h3.18C11.6 1.84 12.7 1 14 1s2.4.84 2.82 2zm-6 0c-.55 0-1 .45-1 1s.45 1 1 1s1-.45 1-1s-.45-1-1-1m-4 4V5H8v12h12V5h-2v2m-3 8h-5v-2h5m3-2h-8V9h8z"/></svg>
                                                </button>
                                            {{-- </div> --}}
                                        </div>
                                    </div>
                                    <div style="display: flex; margin: 2rem 0 2rem 0;flex-direction: column; width: 100%;" class="d-widget">
                                        <div class="left-content">
                                            <span class="caption">Referral code</span>
                                        
                                        </div>
                                        <div style="display: flex; position: relative;">
                                            <div>   
                                                <h1 id="copyText" style="font-size: 1.5rem">{{$ref_code}}</h1>
                                            </div>
                                            {{-- <div style="margin-left: auto"> --}}
                                                <p id="copied" style="position: absolute; right:2rem; display: none;">Copied!!!</p>
                                                <button id="copyBtn" style="font-size: 10px; color: #000; margin-left: auto; background-color: transparent;" onclick="copyToClipboard('{{$ref_code}}')">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M4 7v14h14v2H4c-1.1 0-2-.9-2-2V7zm16-4c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H8c-1.1 0-2-.9-2-2V5c0-1.1.9-2 2-2h3.18C11.6 1.84 12.7 1 14 1s2.4.84 2.82 2zm-6 0c-.55 0-1 .45-1 1s.45 1 1 1s1-.45 1-1s-.45-1-1-1m-4 4V5H8v12h12V5h-2v2m-3 8h-5v-2h5m3-2h-8V9h8z"/></svg>
                                                </button>
                                            {{-- </div> --}}
                                        </div>
                                    </div>
                                    
                                </div>
                            
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="table-responsive table-responsive--md">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Email</th>
                                                    <th>Balance</th>
                                                    <th>Has invested</th>
                                                    {{-- <th>Transaction Type</th> --}}

                                                    {{-- <th>Status</th> --}}
                                                    {{-- <th>Details</th> --}}
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($result->count() > 0)
                                                    @foreach ($result as $unit)
                                                        <tr>
                                                            <td>
                                                               {{$unit['email']?? ''}}
                                                            </td>

                                                            <td>
                                                                {{ $unit['balance'] ?? '' }}
                                                            </td>

                                                            <td>

                                                                {{-- @if ($unit['has_invested'] == true)
                                                                    <span class="badge badge--warning">Pending</span>
                                                                @else --}}
                                                                    @if ($unit['has_invested'] == true)
                                                                        <span class="badge badge--success">true</span>
                                                                    @else
                                                                        <span class="badge badge--danger">false</span>
                                                                    @endif
                                                                {{-- @endif --}}
                                                            </td>


                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td> No data found</td>

                                                    </tr>
                                                @endif


                                            </tbody>
                                            <tfoot>
                                                {{ $result->links() }}
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <div id="detailModal" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Details</h5>
                            <span type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <i class="las la-times"></i>
                            </span>
                        </div>
                        <div class="modal-body">
                            <ul class="list-group userData mb-2">
                            </ul>
                            <div class="feedback"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-md" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            @include('layouts.website.footer')
        @endsection

        @section('extra-js-script')
        <script>
            
            async function copyToClipboard(element) {
                await navigator.clipboard.writeText(element);
                let copied = document.getElementById('copied');
                copied.style.display = 'block';
                setTimeout(() => {
                    copied.style.display = 'none';
                    
                }, 3000);
            }
            async function copyLinkToClipboard(element) {
                await navigator.clipboard.writeText(element);
                let copied = document.getElementById('copiedLink');
                copied.style.display = 'block';
                setTimeout(() => {
                    copied.style.display = 'none';
                    
                }, 3000);
            }
        
        </script>

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


