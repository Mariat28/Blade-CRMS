@extends('layouts.master')

@section('headlinks')
<link href="{{ URL::asset('vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
<link href="{{ URL::asset('vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
<link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet">
<link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
@endsection

@section('content')
 <!-- row -->
 <div class="container-fluid">
    <div class="row mb-5 align-items-center">
        <div class="col-xl-12">
            <div class="card m-0 ">
                <div class="card-body px-4 py-3 py-lg-2">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-xxl-12 col-lg-12 my-2">
                            <p class="mb-0 fs-14">{{ $agent->name }}</p>
                        </div>
                        <div class="col-xl-7 col-xxl-12 col-lg-12">
                            <div class="row align-items-center">
                                <div class="col-xl-4 col-md-4 col-sm-4 my-2">
                                    <div class="media align-items-center">
                                        <span class="mr-3">
                                            <svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="3.54545" height="26" rx="1.77273" transform="matrix(-1 0 0 1 24.8181 0)" fill="#fff"></rect>
                                            <rect width="3.54545" height="18.9091" rx="1.77273" transform="matrix(-1 0 0 1 17.7271 7.09088)" fill="#fff"></rect>
                                            <rect width="3.54545" height="8.27273" rx="1.77273" transform="matrix(-1 0 0 1 10.6362 17.7273)" fill="#fff"></rect>
                                            <rect width="4" height="16" rx="2" transform="matrix(-1 0 0 1 4 10)" fill="#fff"></rect>
                                            </svg>
                                        </span>
                                        <div class="media-body ml-1">
                                            <p class="mb-0 fs-12">Assigned Tickets</p>
                                            <h4 class="mb-0 font-w600  fs-22">{{ count($tickets) ?? 0 }}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-4 col-sm-4 my-2">
                                    <div class="media align-items-center">
                                        <span class="mr-3">
                                            <svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="3.54545" height="26" rx="1.77273" transform="matrix(-1 0 0 1 24.8181 0)" fill="#fff"></rect>
                                            <rect width="3.54545" height="18.9091" rx="1.77273" transform="matrix(-1 0 0 1 17.7271 7.09088)" fill="#fff"></rect>
                                            <rect width="3.54545" height="8.27273" rx="1.77273" transform="matrix(-1 0 0 1 10.6362 17.7273)" fill="#fff"></rect>
                                            <rect width="4" height="16" rx="2" transform="matrix(-1 0 0 1 4 10)" fill="#fff"></rect>
                                            </svg>
                                        </span>
                                        <div class="media-body ml-1">
                                            <a href="#">
                                                <p class="mb-0 fs-12">Ressolved Tickets</p>
                                                <h4 class="mb-0 font-w600  fs-22">{{ count($ressolvedTickets) ?? 0 }}</h4>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-4 col-sm-4 my-2">
                                    <div class="media align-items-center">
                                        <span class="mr-3">
                                            <svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="3.54545" height="26" rx="1.77273" transform="matrix(-1 0 0 1 24.8181 0)" fill="#fff"></rect>
                                            <rect width="3.54545" height="18.9091" rx="1.77273" transform="matrix(-1 0 0 1 17.7271 7.09088)" fill="#fff"></rect>
                                            <rect width="3.54545" height="8.27273" rx="1.77273" transform="matrix(-1 0 0 1 10.6362 17.7273)" fill="#fff"></rect>
                                            <rect width="4" height="16" rx="2" transform="matrix(-1 0 0 1 4 10)" fill="#fff"></rect>
                                            </svg>
                                        </span>
                                        <div class="media-body ml-1">
                                            <a href="#">
                                                <p class="mb-0 fs-12">Pending Tickets</p>
                                                <h4 class="mb-0 font-w600  fs-22">{{ count($pendingTickets) ?? 0 }}</h4>
                                            </a>
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

    <!-- row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive table-hover fs-14">
                <table class="table mb-4 dataTablesCard performance-details-table" id="example5">
                    <thead>
                        <tr>
                            <th>Ticket ID</th>
                            <th>Date Created</th>
                            <th>Summary</th>
                            <th>Due Date</th>
                            <th>Department</th>
                            <th>Status</th>
                            <th>Priority</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tickets as $ticket)
                            <tr class="clickable-row" data-href="{{route('ticketview', ['ticketid'=> $ticket->id])}}">
                            <td>#{{$ticket->id}}</td>
                            <td>{{$ticket->created_at}}</td>
                            <td class="wspace-no">{{ Str::of($ticket->body)->limit(40) }}</td>
                            <td>{{$ticket->updated_at}}</td>
                            <td>{{ $group->name ??  'Uncategorized' }}</td>
                            @foreach($statuses as $status)
                                @if($ticket->status_id == $status->id)
                                    <td>{{ $status->name }}</td>
                                @endif
                            @endforeach
                            
                            <td>
                                @if($ticket->priority_id == 1)
                                    <span class="badge light badge-danger" style="width: 100px">
                                    <i class="fa fa-circle text-danger mr-1"></i>
                                @elseif($ticket->priority_id == 2)
                                    <span class="badge light badge-primary" style="width: 100px">
                                    <i class="fa fa-circle text-primary mr-1"></i>
                                @elseif($ticket->priority_id == 3)
                                    <span class="badge light badge-warning" style="width: 100px">
                                    <i class="fa fa-circle text-warning mr-1"></i>
                                @endif
                                    {{$priorities[($ticket->priority_id - 1)]->name}}
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ URL::asset('vendor/global/global.min.js') }}"></script>
<script src="{{ URL::asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
<script src="{{ URL::asset('js/custom.min.js') }}"></script>
<script src="{{ URL::asset('vendor/chart.js/Chart.bundle.min.js') }}"></script>
<script src="{{ URL::asset('js/deznav-init.js') }}"></script>
<script src="{{ URL::asset('vendor/owl-carousel/owl.carousel.js') }}"></script>

<!-- Datatable -->
<script src="{{ URL::asset('vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script>
    (function($) {
        var table = $('#example5').DataTable({
            searching: false,
            paging:true,
            select: false,
            //info: false,         
            lengthChange:false 
            
        });
        $('#example tbody').on('click', 'tr', function () {
            var data = table.row( this ).data();
            
        });
    })(jQuery);

    jQuery(document).ready(function($) {

    $(".clickable-row").click(function() {

        window.location = $(this).data("href");

    });

    });
</script>
@endsection