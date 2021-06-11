@extends('layouts.master')

@section('headlinks')
<link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
<link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
<link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
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
                            @if(count($neededTickets) <= 0) <div class="subject">All tickets have been assigned!!!</div>
                        @endif
                        @foreach ($neededTickets as $ticket)
                        <div class="message">
                            <div>
                                <div class="d-flex message-single">
                                    <div class="pl-1 align-self-center">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox7">
                                            <label class="custom-control-label" for="checkbox7"></label>
                                        </div>
                                    </div>
                                    <div class="ml-2">
                                        <button class="border-0 bg-transparent align-middle p-0"><i class="fa fa-star" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                                <a href="/ticketdetails/{{$ticket->id}}" class="col-mail col-mail-2">
                                    <div class="subject">{{ Str::of($ticket->body)->limit(80) }}</div>
                                    @if($ticket->priority_id == 1)
                                    <div class="date"><button class="btn btn-sm btn-danger light">{{$prioritylist[($ticket->priority_id - 1)]->name}}</button></div>
                                    @elseif($ticket->priority_id == 2)
                                    <div class="date"><button class="btn btn-sm btn-primary light">{{$prioritylist[($ticket->priority_id - 1)]->name}}</button></div>
                                    @elseif($ticket->priority_id == 3)
                                    <div class="date"><button class="btn btn-sm btn-warning light">{{$prioritylist[($ticket->priority_id - 1)]->name}}</button></div>
                                    @endif

                                </a>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@include('blocks.createticket')
@include('blocks.notification')
@endsection

@section('scripts')
<script src="./vendor/global/global.min.js"></script>
<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="./js/custom.min.js"></script>
<script src="./js/deznav-init.js"></script>
@endsection