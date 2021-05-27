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
                <div class="col-xl-12">
                    <div class="card">
                        <div style="margin-right: 100px !important;" class="email-right-box ml-0 ml-sm-4 ml-sm-0">
                            <h5 class="mb-1 mt-4"><span><strong>SUBJECT: {{$ticket->subject}}</strong></span></h5><br>
                            <p><small style="color: #FFF;"><span><strong>CREATED BY: {{$ticket->created_by}}</strong></span></small></p>
                            <p><small style="color: #FFF;"><span><strong>CREATED ON: {{$ticket->created_at}}</strong></span></small></p>
                            <p class="mb-4 mt-4">{{$ticket->body}}</p>
        
                            <h5 class="mb-1 mt-4" style="color: #13B497; !important">REPLY</h5>
                            <div class="mb-4 mt-4">
                                @php
                                    echo $reply->reply;
                                @endphp
                            </div>
                            <hr>
                            <h5 class="mt-4"></i>Comments</h5>
                            <div id="DZ_W_TimeLine" class="widget-timeline dz-scroll height400">
                                <ul class="timeline">
                                    @php
                                        $chosen = 0;
                                    @endphp
                                    @foreach($ticket->comments as $comment)
                                        @php
                                            $chosenTimelineclass = $timelineClasses[$chosen];
                                            $chosen += 1;
                                            if($chosen == count($timelineClasses)){
                                                $chosen = 0;
                                            }
                                        @endphp
                                        <li>
                                            <div class="timeline-badge {{ $chosenTimelineclass }}"></div>
                                            <a class="timeline-panel text-muted" href="#">
                                                <span></span>
                                                <h6 class="mb-0">{{$comment->comment}}.</h6>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="compose-content">
                                <h5 class="mb-4 mt-2"></i>Add Comment</h5>
                                <form action="{{ route('addcommenttoticket') }}" method="post">
                                    @csrf
                                    <input type="number" name="ticketid" value="{{$ticket->id}}"  hidden>
                                    <div class="form-group reply-agent">
                                        <textarea name="comment" id="email-compose-editor" class="textarea_editor form-control bg-transparent" rows="2" placeholder="Enter comment ..."></textarea>
                                    </div>
                                    <div class="text-left mt-4 mb-5">
                                        <button type="submit" class="btn btn-primary btn-sl-sm mr-2" type="button"><span class="mr-2"><i class="fa fa-paper-plane"></i></span>Comment</button>
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