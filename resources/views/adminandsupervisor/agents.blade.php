@extends('layouts.master')

@section('headlinks')
<link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                
                <div style="width: 100%">
                    <form action="{{ route('addagent') }}" method="get">
                        @csrf
                        <div class="col-lg-3 mb-4 mb-lg-0 ">
                            <button class="btn btn-success rounded btn-block mb-5" type="submit" style="width: 100%">+ Add new Agent</button>
                        </div>
                    </form>
                </div>
                @if(count($agents) > 0)
                    <div class="table-responsive table-hover fs-14">
                        <table class="table mb-4 dataTablesCard " id="example5">
                            <thead>
                                <tr>
                                    <th>Agent ID</th>
                                    <th>Agent Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Group</th>
                                    <th>Date Added</th>
                                    <th>Date Updated</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($agents as $agent)
                                    <tr class="clickable-row"'>
                                        <td>#{{ $agent->id }}</td>
                                        <td>{{ $agent->name }}</td>
                                        <td class="wspace-no">{{ $agent->email }}</td>
                                        <td>{{ $agent->phonenumber }}</td>
                                        <td>
                                            @foreach($groups as $group)
                                                @if($group->id == $agent->group_id)
                                                    {{ $group->name }}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>{{ $agent->created_at }}</td>
                                        <td>{{ $agent->updated_at }}</td>
                                </tr>	
                                @endforeach
                            </tbody>
                        </table>
                </div>
                @else
                    <p>No Agents Available Yet</p>
                @endif							
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