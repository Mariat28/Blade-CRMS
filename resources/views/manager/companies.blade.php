@extends('layouts.manager')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @if(count($companies) > 0)
                        <div class="table-responsive table-hover fs-14">
                            <table class="table mb-4 dataTablesCard " id="example5">
                                <thead>
                                    <tr>
                                        <th>Company ID</th>
                                        <th>Company Name</th>
                                        <th>Company Email</th>
                                        <th>Website</th>
                                        <th>Country</th>
                                        <th>City</th>
                                        <th>Date Registered</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($companies as $company)
                                        <tr class="clickable-row">
                                            <td>#{{ $company->id }}</td>
                                            <td>{{ $company->name }}</td>
                                            <td class="wspace-no">{{ $company->email }}</td>
                                            <td><a href="{{$company->name }}">{{$company->name }}</a></td>
                                            <td>{{ $company->country }}</td>
                                            <td>{{$company->city }}</td>
                                            <td>{{$company->created_at }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                    </div>
                    @else
                        <p>No Companies Available Yet</p>
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