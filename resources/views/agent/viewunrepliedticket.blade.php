@extends('layouts.agent')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Ticket Reply</a></li>
                </ol>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-xl-12 col-xxl-12">
                    <div class="card">
                        <div class="email-right-box ml-0 ml-sm-4 ml-sm-0">
                            <p><small>Created by: <span style="color: #fff;">{{$ticket->created_by}}</span></small></p>
                            <p><small>Created on: <span style="color: #fff;">{{$ticket->created_at}}</span></small></p>
                            <p><small>Priority: <span style="color: #fff;">{{ucfirst($priority->name)}}</span></small></p>
                            <h5 class="mb-1 mt-4"></i>{{$ticket->subject}}</h5>
                            <p class="mb-4 mt-4">{{$ticket->body}}</p>
                            <div class="compose-content">
                                <form action="{{ route('agentticketreply') }}" method="post">
                                    @csrf
                                    <input hidden type="number" name="ticketid" value="{{ $ticket->id }}">
                                    <div class="form-group">
                                        <textarea name="summernote" class="summernote"></textarea>
                                    </div>
                                    <h5 class="mb-4 mt-5"></i> Comment</h5>
                                    <div class="form-group">
                                        <textarea name="comment" id="email-compose-editor" class="textarea_editor form-control bg-transparent" rows="3" placeholder="Enter comment ..."></textarea>
                                    </div>
                                    <div class="text-left mt-4 mb-5">
                                        <button type="submit" class="btn btn-primary btn-sl-sm mr-2" type="button">
                                            <span class="mr-2"><i class="fa fa-paper-plane"></i></span>Send Reply
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
@endsection