@extends('layouts.master')

@section('headlinks')
<link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
<link href="./vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<link href="./css/style.css" rel="stylesheet">
<link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
@endsection

@section('content')
<!-- row -->
<div class="container-fluid">
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Reports</a></li>
        </ol>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">ANALYSIS</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="thumbnail">
                              <a href="{{ route('ticketsvolume') }}">
                                <img src="./images/icons/trendtwo.svg" alt="Lights" style="width:10%; color: #13B497;">
                                <div class="caption">
                                  <p>Ticket Volume</p>
                                </div>
                              </a>
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
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">PRODUCTIVITY</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="thumbnail">
                              <a href="{{ route('agentsperformance') }}">
                                <img src="./images/icons/agent.svg" alt="Lights" style="width:10%">
                                <div class="caption">
                                  <p>Agents Performance</p>
                                </div>
                              </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumbnail">
                              <a href="{{ route('departmentsperformance') }}">
                                <img src="./images/icons/group.svg" alt="Lights" style="width:10%">
                                <div class="caption">
                                  <p>Departments Performance</p>
                                </div>
                              </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumbnail">
                              <a href="#">
                                <img src="./images/icons/lifecycle.svg" alt="Lights" style="width:10%">
                                <div class="caption">
                                  <p>Ticket Lifecycle</p>
                                </div>
                              </a>
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
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">CUSTOMER SATISFACTION</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="thumbnail">
                              <a href="#">
                                <img src="./images/icons/customer.svg" alt="Lights" style="width:10%; color: #13B497;">
                                <div class="caption">
                                  <p>Customer Analysis</p>
                                </div>
                              </a>
                            </div>
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
<script src="./vendor/chart.js/Chart.bundle.min.js"></script>
<script src="./js/deznav-init.js"></script>
<script src="./vendor/owl-carousel/owl.carousel.js"></script>

<!-- Apex Chart -->
<script src="./vendor/apexchart/apexchart.js"></script>

<!-- Dashboard 1 -->
<script src="./js/dashboard/page-analytics.js"></script>
@endsection