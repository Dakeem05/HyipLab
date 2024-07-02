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
            <section class="cmn-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="">
                                <div class="mb-3 d-flex justify-content-end table-search">
                                    <div class="input-group">
                                        <input type="text" name="search" class="form-control" value=""
                                            placeholder="Search by transactions">
                                        <button class="input-group-text base--bg text-white">
                                            <i class="las la-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="table-responsive table-responsive--md">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Gateway | Transaction</th>
                                                    <th>Initiated</th>
                                                    <th>Amount</th>
                                                    <th>Transaction Type</th>

                                                    <th>Status</th>
                                                    {{-- <th>Details</th> --}}
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($transactions->count() > 0)
                                                    @foreach ($transactions as $deposit)
                                                        <tr>
                                                            <td>
                                                                <span class="fw-bold"> <span>Bitcoin</span> </span>
                                                                <br>
                                                                <small> {{ $deposit['transaction_id'] }} </small>
                                                            </td>

                                                            <td>
                                                                {{ $deposit['created_at'] ?? '' }}
                                                            </td>
                                                            <td>

                                                                <strong title="Amount with charge">
                                                                    {{ number_format($deposit['amount'], 2) }} USD
                                                                </strong>
                                                            </td>
                                                            <td>
                                                                {{ $deposit['type']}}
                                                            </td>

                                                            <td>

                                                                @if ($deposit['status'] == 0)
                                                                    <span class="badge badge--warning">Pending</span>
                                                                @else
                                                                    @if ($deposit['status'] == 1)
                                                                        <span class="badge badge--success">completed</span>
                                                                    @else
                                                                        <span class="badge badge--danger">Declined</span>
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
                                            <tfoot>
                                                {{ $transactions->links() }}
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