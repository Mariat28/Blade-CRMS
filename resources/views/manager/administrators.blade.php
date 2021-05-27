@extends('layouts.manager')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @if(count($admins) > 0)
                        <div class="table-responsive table-hover fs-14">
                            <table class="table mb-4 dataTablesCard " id="example5">
                                <thead>
                                    <tr>
                                        <th>Admin ID</th>
                                        <th>Admin Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Company</th>
                                        <th>Date Added</th>
                                        <th>Date Updated</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($admins as $admin)
                                        <tr class="clickable-row"'>
                                            <td>#{{ $admin->id }}</td>
                                            <td>{{ $admin->name }}</td>
                                            <td class="wspace-no">{{ $admin->email }}</td>
                                            <td>{{ $admin->phonenumber }}</td>
                                            <td>
                                                @foreach($companies as $company)
                                                    @if($company->id == $admin->company_id)
                                                        {{ $company->name }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>{{ $admin->created_at }}</td>
                                            <td>{{ $admin->updated_at }}</td>
                                        </tr>	
                                    @endforeach
                                </tbody>
                            </table>
                    </div>
                    @else
                        <p>No Administrators Available Yet</p>
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