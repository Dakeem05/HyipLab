@extends('layouts.user.user_layout')

@section('main-content')
    @include('layouts.website.preloader')

    <div class="scroll-to-top">
        <span class="scroll-icon">
            <i class="fa fa-rocket" aria-hidden="true"></i>
        </span>
    </div>

    <div class="full-wh">
        <div class="bg-animation">
            <div id='stars'></div>
            <div id='stars2'></div>
            <div id='stars3'></div>
            <div id='stars4'></div>
        </div>
    </div>

    <div class="page-wrapper">
        <header class="header">
            <div class="header__bottom">
                <div class="container">
                    @include('layouts.admin.nav')
                </div>
            </div>
        </header>

        <section class="inner-hero bg_img"
            data-background="{{ asset('assets/images/frontend/breadcrumb/631d82f525a611662878453.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="page-title">Admin Dashboard</h2>
                    </div>
                </div>
            </div>
        </section>

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
                                                    <th>Gateway | Transaction</th>
                                                    <th>Initiated</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                    <th>Transaction Type</th>
                                                    <th>Attachment</th>
                                                    <th>File/Address</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($deposits->count() > 0)
                                                    @foreach ($deposits as $deposit)
                                                        <tr>
                                                            <td>
                                                                <span class="fw-bold"><span>Bitcoin</span></span>
                                                                <br>
                                                                <small>{{ $deposit['transaction_id'] }}</small>
                                                            </td>
                                                            <td>{{ $deposit['created_at'] ?? '' }}</td>
                                                            <td><strong title="Amount with charge">{{ number_format($deposit['amount'], 2) }} USD</strong></td>
                                                            <td><span class="badge badge--warning">Pending</span></td>
                                                            <td>{{ $deposit['type'] }}</td>
                                                            <td>
                                                                <a href="javascript:void(0)" id="show_attachment" class="icon-btn base--bg text-white detailBtn"
                                                                    data-info="{{ asset('assets/deposit_receipts/' . $deposit['attachment']) }}">
                                                                    <i class="fa fa-desktop"></i>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                {{$deposit['attachment']}}
                                                            </td>
                                                            <td>
                                                                <form action="{{ url('admin/transaction/action') }}" method="post">
                                                                    @csrf
                                                                    <input type="hidden" name="id" value="{{ $deposit['id'] }}">
                                                                    <input type="hidden" name="user_id" value="{{ $deposit['user_id'] }}">
                                                                    <input type="hidden" name="type" value="{{ $deposit['type'] }}">
                                                                    <input type="hidden" name="amount" value="{{ $deposit['amount'] }}">
                                                                    <button type="submit" id="complete_deposit" name="action" value="complete" class="btn btn-success btn-sm">Complete</button>
                                                                    <button type="submit" id="reject_deposit" name="action" value="reject" class="btn btn-danger btn-sm">Reject</button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                            </tbody>
                                            <tfoot>
                                                {{ $deposits->links() }}
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div id="detailModal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Details</h5>
                        <span type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="las la-times"></i>
                        </span>
                    </div>
                    <div class="modal-body">
                        <img src="" id="modal-receipt" alt="receipt" class="img-fluid">
                        <div class="feedback"></div>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.website.footer')
    @endsection

    @section('extra-js-script')
        <script>
            (function($) {
                "use strict";
                $('.detailBtn').on('click', function() {
                    var modal = $('#detailModal');
                    var imageUrl = $(this).data('info');
                    $("#modal-receipt").attr("src", imageUrl);
                    // $("#modal-receipt").attr("alt", imageUrl);
                    modal.modal('show');
                });
            })(jQuery);
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
