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
<div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Users</a></li>
            <li class="breadcrumb-item active"><a href="/viewagents">Agents</a></li>
        </ol>
</div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div style="width: 100%">
                    <form>
                        @csrf
                        <div class="col-lg-3 mb-4 mb-lg-0 ">
                            <a class="btn btn-primary rounded btn-block mb-5" style="width: 100%" data-toggle="modal" data-target="#newagent">+ Add new Agent</a>
                        </div>
                    </form>
                </div>
                <div class="card p-2">
                    @if(count($agents) > 0)
                    <div class="table-responsive">
                        <table id="example3" class="display min-w850">
                            <thead>
                                <tr>
                                    <th>Agent ID</th>
                                    <th>Agent Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Date Added</th>
                                    <th>Date Updated</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($agents as $agent)
                                <tr class="clickable-row">
                                    <td>#{{ $agent->id }}</td>
                                    <td>{{ $agent->name }}</td>
                                    <td class="wspace-no">{{ $agent->email }}</td>
                                    <td>{{ $agent->phonenumber }}</td>
                                    <td>{{ $agent->created_at }}</td>
                                    <td>{{ $agent->updated_at }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a data-id="{{$agent->id}}" id="useredit" class="btn light btn-primary shadow btn-xs sharp mr-5" data-target="#edituser" data-toggle="modal"><i class="fa fa-pencil"></i></a>
                                            <a href="/deleteuser/{{$agent->id}}" value="{{$agent->id}}" class="btn light btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
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
</div>
@include('blocks.addagent')
@include('blocks.edituser')

@endsection

@section('scripts')
<script src="./vendor/global/global.min.js"></script>
<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="./js/custom.min.js"></script>
<script src="./js/deznav-init.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<!-- Datatable -->
<script src="./vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="./js/plugins-init/datatables.init.js"></script>
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('body').on('click','#submit',function(event){
            // event.preventDefault();
            let id=$('#id').val();
            let role=$('#role').val();
            let dept=$('#department').val();
            console.log(id);
            console.log(role);
            console.log(dept);
            $.ajax({
                url:'edituser/'+id,
                type:"POST",
                data:{
                    userrole_id:role,
                    group_id:dept
                }
            })
        })
    });
</script>
<script>
    /*(function($) {
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

		});*/
</script>
@endsection