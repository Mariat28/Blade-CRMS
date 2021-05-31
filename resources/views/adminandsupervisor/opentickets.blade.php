@extends('layouts.master')

@section('headlinks')
<link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
<link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<link href="./css/style.css" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid">
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Tickets</a></li>
            <li class="breadcrumb-item active"><a href="/ticketdetails">ticket list</a></li>
        </ol>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    @include('blocks.ticketsmenu')

                    <div class="email-right-box ml-0 ml-sm-4 ml-sm-0">

                        @include('blocks.ticketsactions')
                        
                        <div class="email-list mt-3">
                            @if(count($opentickets)<=0)
                            <div class="subject">No open tickets!!!</div>
                            @endif
                            @foreach ($opentickets as $ticket)
                                <div class="message">
                                    <div>
                                        <div class="d-flex message-single">
                                            <div class="pl-1 align-self-center">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="checkbox7">
                                                    <label class="custom-control-label" for="checkbox7"></label>
                                                </div>
                                            </div>
                                            <div class="ml-2">
                                                <button class="border-0 bg-transparent align-middle p-0"><i
                                                        class="fa fa-star" aria-hidden="true"></i></button>
                                            </div>
                                        </div>
                                        <a href="/openticketdetails/{{$ticket->id}}" class="col-mail col-mail-2">
                                            <div class="subject">{{ Str::of($ticket->body)->limit(120) }}</div>
                                            <div class="date">{{$ticket->created_at}}</div>
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                        </div>
                        <!-- panel pagination -->
                        <!-- <div class="row mt-4">
                            <div class="col-12 pl-3">
                                <nav>
                                    <ul
                                        class="pagination pagination-gutter pagination-primary pagination-sm no-bg">
                                        <li class="page-item page-indicator"><a class="page-link"
                                                href="javascript:void()"><i
                                                    class="la la-angle-left"></i></a></li>
                                        <li class="page-item "><a class="page-link"
                                                href="javascript:void()">1</a></li>
                                        <li class="page-item active"><a class="page-link"
                                                href="javascript:void()">2</a></li>
                                        <li class="page-item"><a class="page-link"
                                                href="javascript:void()">3</a></li>
                                        <li class="page-item"><a class="page-link"
                                                href="javascript:void()">4</a></li>
                                        <li class="page-item page-indicator"><a class="page-link"
                                                href="javascript:void()"><i
                                                    class="la la-angle-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('blocks.createticket')

@endsection

@section('scripts')
<script src="./vendor/global/global.min.js"></script>
<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="./js/custom.min.js"></script>
<script src="./js/deznav-init.js"></script>
@endsection