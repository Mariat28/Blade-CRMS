@extends('layouts.agent')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                @if(count(Auth::user()->tickets()->where('status_id', 1)->get()) > 0)
                    <div class="table-responsive table-hover fs-14">
                        <table class="table mb-4 dataTablesCard " id="example5">
                            <thead>
                                <tr>
                                    <th>Ticket ID</th>
                                    <th>Date Created</th>
                                    <th>Summary</th>
                                    <th>Due Date</th>
                                    <th>Group</th>
                                    <th>Status</th>
                                    <th>Priority</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach(Auth::user()->tickets()->where('status_id', 1)->get() as $ticket)
                                <tr class="clickable-row" data-href='{{ route('ticketview', ['ticketid' => $ticket->id]) }}'>
                                    <td>#{{ $ticket->id }}</td>
                                    <td>{{ $ticket->created_at }}</td>
                                    <td class="wspace-no">{{ Str::of($ticket->body)->limit(20) }}</td>
                                    <td>{{ $ticket->created_at }}</td>
                                    <td>{{ $group->name }}</td>
                                    <td>
                                        @foreach($ticketstatuses as $status)
                                            @if($status->id == $ticket->status_id)
                                                {{ $status->name }}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach($ticketpriorities as $priority)
                                            @if($priority->id == $ticket->priority_id)
                                                @if($priority->id == 1)
                                                    <a style="width: 90px;" href="javascript:void(0);" class="btn btn-danger light btn-sm">
                                                @elseif($priority->id == 2)
                                                    <a style="width: 90px;" href="javascript:void(0);" class="btn btn-warning light btn-sm">
                                                @elseif($priority->id == 3)
                                                    <a style="width: 90px;" href="javascript:void(0);" class="btn btn-primary light btn-sm">
                                                @endif
                                                {{ $priority->name}}
                                                </a>
                                            @endif
                                        @endforeach
                                </td>
                            </tr>	
                            @endforeach

                            </tbody>
                        </table>
                </div>
                @else
                    <p>No Tickets Closed Yet</p>
                @endif							
            </div>
        </div>
    </div>
</div>
<!-- Required vendors -->
<script src="./vendor/global/global.min.js"></script>
<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="./js/custom.min.js"></script>
<script src="./vendor/chart.js/Chart.bundle.min.js"></script>
<script src="./js/deznav-init.js"></script>
<script src="./vendor/owl-carousel/owl.carousel.js"></script>

<!-- Datatable -->
<script src="./vendor/datatables/js/jquery.dataTables.min.js"></script>
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