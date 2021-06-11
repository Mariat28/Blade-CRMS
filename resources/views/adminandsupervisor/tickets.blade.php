@extends('layouts.master')

@section('headlinks')
<link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
<link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
<link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
<link href="./css/style.css" rel="stylesheet">
<link href="/public/css/custom.css" rel="stylesheet">

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
                            @if(count($tickets)<=0) <div class="subject">All tickets have been assigned!!!</div>
                        @endif
                        @foreach ($tickets as $newticket)
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
                                <a href="/ticketdetails/{{$newticket->id}}" class="col-mail col-mail-2">
                                    <div class="subject">{{ Str::of($newticket->body)->limit(80) }}</div>
                                    @if($newticket->priority_id == 1)
                                    <div class="date"><button  class="btn btn-sm btn-danger light prioritybtn">{{$prioritylist[($newticket->priority_id - 1)]->name}}</button></div>
                                    @elseif($newticket->priority_id == 2)
                                    <div class="date"><button class="btn btn-sm btn-primary light prioritybtn">{{$prioritylist[($newticket->priority_id - 1)]->name}}</button></div>
                                    @elseif($newticket->priority_id == 3)
                                    <div class="date"><button  class="btn btn-sm btn-warning light prioritybtn">{{$prioritylist[($newticket->priority_id - 1)]->name}}</button></div>
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
<script src="https://js.pusher.com/3.1/pusher.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
   // Enable pusher logging - don't include this in production
Pusher.logToConsole = true;

// Initiate the Pusher JS library
let pusher = new Pusher('e6f0a3a49cb8568d7bf1', {
    cluster: 'us2'
});

// Subscribe to the channel we specified in our Laravel Event
let channel = pusher.subscribe('ticket-created');

// Bind a function to a Event (the full Laravel class)
channel.bind('App\\Events\\TicketCreated', function(data) {
    // this is called when the event notification is received...
    alert(JSON.stringify(data));
});
</script>
@endsection