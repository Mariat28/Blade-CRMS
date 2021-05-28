@extends('layouts.master')

@section('headlinks')
<link rel="stylesheet" href="./vendor/chartist/css/chartist.min.css">
<link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<link href="./css/style.css" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid">
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Reports</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Tickets Volume Report</a></li>
        </ol>
    </div>
    <!-- row -->

    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Weekly Tickets Report</h4>
                        </div>
                        <div class="card-body">
                            <div id="label-placement-chart" class="ct-chart ct-golden-section chartlist-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Annual Report</h4>
                        </div>
                        <div class="card-body">
                            <div id="overlapping-bars" class="ct-chart ct-golden-section chartlist-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Line Interpolation (Received & Ressolved)</h4>
                        </div>
                        <div class="card-body">
                            <div id="line-smoothing" class="ct-chart ct-golden-section chartlist-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection


@section('scripts')
<script src="./vendor/global/global.min.js"></script>
<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="./js/custom.min.js"></script>
<script src="./js/deznav-init.js"></script>
<!-- Chart Chartist plugin files -->
<script src="./vendor/chartist/js/chartist.min.js"></script>
<script src="./vendor/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>
<script src="./js/plugins-init/chartist-init.js"></script>
@endsection