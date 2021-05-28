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
                            <th>Group ID</th>
                            <th>Group Name</th>
                            <th>Company</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="clickable-row" data-href='./group performance details.html'>
                            <td>#0012451</td>
                            <td>Technical</td>
                            <td>Project Code</td>
                        </tr>
                        <tr class="clickable-row" data-href='./group performance details.html'>
                            <td>#0012451</td>
                            <td>Financial</td>
                            <td>Microsoft</td>
                        </tr>
                        <tr class="clickable-row" data-href='./group performance details.html'>
                            <td>#0012451</td>
                            <td>Managerial</td>
                            <td>Microsoft</td>
                        </tr>
                        <tr class="clickable-row" data-href='./group performance details.html'>
                            <td>#0012451</td>
                            <td>Technical</td>
                            <td>Project Code</td>
                        </tr>
                        <tr class="clickable-row" data-href='./group performance details.html'>
                            <td>#0012451</td>
                            <td>Financial</td>
                            <td>Microsoft</td>
                        </tr>
                        <tr class="clickable-row" data-href='./group performance details.html'>
                            <td>#0012451</td>
                            <td>Managerial</td>
                            <td>Microsoft</td>
                        </tr>
                        <tr class="clickable-row" data-href='./group performance details.html'>
                            <td>#0012451</td>
                            <td>Technical</td>
                            <td>Project Code</td>
                        </tr>
                        <tr class="clickable-row" data-href='./group performance details.html'>
                            <td>#0012451</td>
                            <td>Financial</td>
                            <td>Microsoft</td>
                        </tr>
                        <tr class="clickable-row" data-href='./group performance details.html'>
                            <td>#0012451</td>
                            <td>Managerial</td>
                            <td>Microsoft</td>
                        </tr>
                        <tr class="clickable-row" data-href='./group performance details.html'>
                            <td>#0012451</td>
                            <td>Technical</td>
                            <td>Project Code</td>
                        </tr>
                        <tr class="clickable-row" data-href='./group performance details.html'>
                            <td>#0012451</td>
                            <td>Financial</td>
                            <td>Microsoft</td>
                        </tr>
                        <tr class="clickable-row" data-href='./group performance details.html'>
                            <td>#0012451</td>
                            <td>Managerial</td>
                            <td>Microsoft</td>
                        </tr>
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