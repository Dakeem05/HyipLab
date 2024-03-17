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
                        <h2 class="page-title">Investment History</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- inner hero end -->
        <div class="section-wrapper">
            <section class="cmn-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                           
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="table-responsive table-responsive--md">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                  
                                                    <th>Initiated</th>
                                                    <th>Maturity Date</th>
                                                    <th>Amount Invested</th>
                                                    <th>Investment Type</th>
                                                    <th>Status</th>
                                                    {{-- <th>Details</th> --}}
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($investments->count() > 0)
                                                    @foreach ($investments as $investment)
                                                    <tr>
                                                        
                                                        <td>
                                                        {{ $investment['created_at'] ??""}} 
                                                        </td>
                                                        <td>
                                                            {{ $investment['maturity_date'] ??""}} 
                                                            </td>
                                                        <td>
                                                        
                                                           
                                                            {{number_format( $investment['amount'],2)}} USD
                                                            </strong>
                                                        </td>
                                                        <td>
                                                            {{ $investment['plan'] ??""}} 
                                                            </td>
                                                        
                                                        <td>
                                                           
                                                            @if ( $investment['status'] == 0)
                                                            <span class="badge badge--warning">Maturing</span>
                                                    
                                                            
                                                        @else
                                                        @if ( $investment['status'] == 1)
                                                        <span class="badge badge--success">Matured</span>
                                                            
                                                        @else
                                                        <span class="badge badge--danger">Paused</span>
                                                            
                                                            
                                                        @endif
                                                            
                                        
                                                            @endif
                                                        </td>

                                                    
                                                    </tr>
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td> No data found</td>
                                                       
                                                    </tr>
                                                @endif
                                                
                                              
                                            </tbody>
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

