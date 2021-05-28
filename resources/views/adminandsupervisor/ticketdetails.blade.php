@extends('layouts.master')

@section('headlinks')
<link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
<link href="../vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet">
@endsection

@section('content')
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
                    @include('blocks.ticketsmenu')

                    <div class="email-right-box ml-0 ml-sm-4 ml-sm-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="right-box-padding">
                                    <div class="toolbar mb-4" role="toolbar">
                                        <div class="btn-group mb-1">
                                            <a type="button" href="/tickets" class="btn btn-primary light px-3"><i class="fa fa-reply"></i></a>
                                            <button type="button" class="btn btn-primary light px-3"><i class="fa fa-long-arrow-right"></i></button>
                                            <!-- <button type="button" class="btn btn-primary light px-3"><i class="fa fa-trash"></i></button> -->
                                        </div>
                                        <div class="read-content">
                                            <div class="media pt-3">
                                                <div class="media-body mr-2">
                                                    <h6 class="text-primary mb-0 mt-1">Sent By:{{$data->created_by}}</h6>
                                                    <p class="mb-0 mt-1">{{$data->created_at}}</p>
                                                </div>
                                                <a href="javascript:void()" data-target="#tktassign" data-toggle="modal" class="btn btn-primary px-3 light"><i class="fa fa-user-plus"></i> </a>
                                                <a href="javascript:void()" data-id='{{$data->status_id}}' class="btn btn-primary px-3 light ml-2" id="close"><i class="fa fa-pause"></i> </a>
                                                <a href="javascript:void()" class="btn btn-primary px-3 light ml-2"><i class="fa fa-envelope"></i> </a>
                                                <a href="javascript:void()" class="btn btn-primary px-3 light ml-2"><i class="fa fa-trash"></i></a>
                                            </div>
                                            <hr>
                                            <div class="media mb-2 mt-3">
                                                <div class="media-body"><span class="pull-right">07:23 AM</span>
                                                    <h5 class="my-1 text-primary">SUBJECT: {{$data->subject}}</h5>
                                                </div>
                                            </div>
                                            <div class="read-content-body">
                                                <p class="mb-2">{{$data->body}}</p>

                                                <hr>
                                            </div>
                                            <form method="post" action="/ticketdetails/{{$data->id}}">
                                                @csrf
                                                <div class="form-group pt-3">
                                                    <textarea id="reply" cols="30" rows="5" style="height:300px;" class="form-control" name="reply" placeholder="Add a Reply"></textarea>
                                                </div>
                                                <input type="text" hidden name="id" value="{{$data->id}}" class="form-control">
                                                <!-- <div class="form-group pt-3">
                                                            <textarea name="comment" id="write-email" cols="10" rows="5" class="form-control"style="height:80px;" placeholder="Add a comment or tag a team member to add them to this ticket thread"></textarea>
                                                        </div> -->
                                                <div class="text-right">
                                                    <button class="btn btn-primary " type="submit">Reply</button>
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
</div>

@include('blocks.assignticket')
@endsection

@section('scripts')
<script src="../vendor/global/global.min.js"></script>
<script src="../vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="../js/custom.min.js"></script>
<script src="../js/deznav-init.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#close').click(function() {
            $id=$(this).data
            $.ajax({
                url: '/updateticket/',
                method: 'POST',
                data: {
                    

                }
            }).then(function() {
                alert('success' );
            })
        });
    })
</script>
@endsection