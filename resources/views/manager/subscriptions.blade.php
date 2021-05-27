@extends('layouts.manager')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <p>Still Under Development</p>					
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