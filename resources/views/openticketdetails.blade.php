@extends('layouts.admin')

@section('content')
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Tickets</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Ticket Details</a></li>
                    </ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="email-left-box generic-width px-0 mb-5">
                                    <div class="p-0">
                                        <a class="btn btn-primary btn-block" data-toggle="modal" data-target="#newticket"><i class="fa fa-plus font-18 align-middle mr-2"></i></i>Create New Ticket</a>
                                    </div>
                                    <div class="mail-list mt-4">
                                        <a href="/tickets" class="list-group-item"><i class="fa fa-inbox font-18 align-middle mr-2"></i> Unassigned <span class="badge badge-primary badge-sm float-right">{{count($newtickets)}}</span> </a>
                                        <a href="/opentickets" class="list-group-item  active"><i class="fa fa-paper-plane font-18 align-middle mr-2"></i>Open </a> 
                                        <!--<a href="javascript:void()" class="list-group-item"><i class="fa fa-star font-18 align-middle mr-2"></i>Due Today <span class="badge badge-danger text-white badge-sm float-right">47</span>-->
                                        <!--</a>-->
                                        <!--<a href="javascript:void()" class="list-group-item"><i class="mdi mdi-file-document-box font-18 align-middle mr-2"></i>Onhold</a>-->
                                        <a href="/closedtickets" class="list-group-item"><i class="fa fa-trash font-18 align-middle mr-2"></i>Closed</a>
                                    </div>
                                    <div class="intro-title d-flex justify-content-between">
                                        <h5>Categories</h5>
                                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                    </div>
                                    <div class="mail-list mt-4">
                                        <a href="email-inbox.html" class="list-group-item"><span class="icon-warning"><i class="fa fa-circle" aria-hidden="true"></i></span>
                                            Refunds </a>
                                        <a href="email-inbox.html" class="list-group-item"><span class="icon-primary"><i class="fa fa-circle" aria-hidden="true"></i></span>
                                            Escalating </a>
                                        <a href="email-inbox.html" class="list-group-item"><span class="icon-success"><i class="fa fa-circle" aria-hidden="true"></i></span>
                                            Support </a>
                                        <a href="email-inbox.html" class="list-group-item"><span class="icon-dpink"><i class="fa fa-circle" aria-hidden="true"></i></span>
                                            Satisfaction </a>
                                    </div>
                                </div>
                                <div class="email-right-box ml-0 ml-sm-4 ml-sm-0">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="right-box-padding">
                                                <div class="toolbar mb-4" role="toolbar">
                                                    <div class="btn-group mb-1">
                                                        <a type="button" href="/opentickets" class="btn btn-primary light px-3"><i class="fa fa-reply"></i></a>
                                                        <button type="button" class="btn btn-primary light px-3"><i class="fa fa-long-arrow-right"></i></button>
                                                        <!-- <button type="button" class="btn btn-primary light px-3"><i class="fa fa-trash"></i></button> -->
                                                    </div>
                                                    <div class="read-content">
                                                        <div class="media pt-3">
                                                            <div class="media-body mr-2">
                                                                <h6 class="text-primary mb-0 mt-1">Sent By:{{$ticket->sender}}</h6>
                                                                <p class="mb-0 mt-1">{{$ticket->created_at}}</p>
                                                            </div>
                                                            <a href="javascript:void()" class="btn btn-primary px-3 light ml-2"><i class="fa fa-pause"></i> </a>
                                                            <a href="javascript:void()" class="btn btn-primary px-3 light ml-2"><i class="fa fa-envelope"></i> </a>
                                                            <a href="javascript:void()" class="btn btn-primary px-3 light ml-2"><i class="fa fa-trash"></i></a>
                                                        </div>
                                                        <hr>
                                                        <div class="media mb-2 mt-3">
                                                            <div class="media-body"><span class="pull-right">07:23 AM</span>
                                                                <h5 class="my-1 text-primary">SUBJECT: {{$ticket->subject}}</h5>
                                                            </div>
                                                        </div>
                                                        <div class="read-content-body">
                                                           <p class="mb-2">{{$ticket->body}}</p>
                                                            
                                                            <hr>
                                                        </div>
                                                        <div class="pt-3 ">
                                                        <h5 class="my-1 text-primary">Answer</h5>
                                                        <div class="mb-2 border">
                                                            @php
                                                                echo $reply->reply;
                                                            @endphp
                                                        </div>
                                                        <h5 class="my-1 text-primary">Comments</h5>
                                                        @if(count($comments))
                                                            @foreach($comments as $comment)
                                                                <p>{{ $comment->comment }}</p>
                                                            @endforeach
                                                        @endif
                                                        </div>
                                                        <form action="../addcomment"  method="post" >
                                                            @csrf
                                                        <input type="text" hidden name="id" value="{{$ticket->id}}" class="form-control">
                                                        <div class="form-group pt-3">
                                                            <textarea name="comment" id="write-email" cols="10" rows="5" class="form-control"style="height:80px;" placeholder="Add a comment or tag a team member to add them to this ticket thread"></textarea>
                                                        </div>
                                                        <div class="text-right">
                                                        <button type="submit" class="btn btn-primary " >Send</button>
                                                    </div>
                                                        </form>
                        
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--**********************************
            Content body end
        ***********************************-->

            <!--**********************************
            Footer start
        ***********************************-->
            <div class="footer">
                <div class="copyright">
                    <p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/" target="_blank">Help Desk</a> 2020</p>
                </div>
            </div>
            <!--**********************************
            Footer end
        ***********************************-->

            <!--**********************************
           Support ticket button start
        ***********************************-->

            <!--**********************************
           Support ticket button end
        ***********************************-->


        </div>
        <!--**********************************
        Main wrapper end
    ***********************************-->

        <!--**********************************
        Scripts
    ***********************************-->
        <!-- Required vendors -->
        <script src="{{URL::asset('vendor/global/global.min.js')}}"></script>
        <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
        <script src="{{URL::asset('js/custom.min.js')}}"></script>
        <script src="{{URL::asset('js/deznav-init.js')}}"></script>
@endsection