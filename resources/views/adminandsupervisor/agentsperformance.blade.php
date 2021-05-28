@extends('layouts.master')

@section('headlinks')
<link href="./vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="./vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<link href="./css/style.css" rel="stylesheet">
<link href="./css/custom.css" rel="stylesheet">
<link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
@endsection

@section('content')
<!-- row -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive table-hover fs-14">
                <table class="table mb-4 dataTablesCard list-of-agents-table" id="example5">
                    <thead>
                        <tr>
                            <th>Agent ID</th>
                            <th>Agent's Name</th>
                            <th>Department</th>
                            <th>Telephone</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($agents as $agent)
                            <tr class="clickable-row" data-href="{{ route('agentperformancedetails', ['agentid'=> $agent->id])}}">
                                <td>#{{$agent->id}}</td>
                                <td>{{$agent->name}}</td>
                                @foreach($departments as $department)
                                    @if($department->id == $agent->group_id)
                                        <td>{{$department->name}}</td>
                                    @else
                                     <td>No Department</td>
                                    @endif
                                @endforeach
                                <td>{{$agent->phonenumber}}</td>
                                <td>{{$agent->email}}</td>
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