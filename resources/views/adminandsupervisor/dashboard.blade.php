@extends('layouts.master')

@section('headlinks')
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
            <li class="breadcrumb-item"><a href="javascript:void(0)">Analytics</a></li>
        </ol>
    </div>
    <div class="row">
        <div class="col-xl-6">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header border-0 pb-0">
                            <h4 class="fs-20 mb-0">Popular Ticket Groups</h4>
                            <div class="dropdown">
                                <a href="javascript:;"	class="dropdown-toggle fs-12" data-toggle="dropdown" aria-expanded="false">
                                    This Week
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);">Daily</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Weekly</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Monthly</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center bg-dark p-3 rounded">	
                                <span class="text-white fs-14">Tuesday</span>
                                <span class="text-white fs-14">215,523 Tkts</span>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="selling-pie-chart">
                                        <canvas id="pie_chart"></canvas>
                                    </div>	
                                    <div class="chart-point mt-4 text-center">
                                        <div class="fs-13 col px-0">
                                            <span class="a mx-auto"></span>
                                            Operation
                                        </div>
                                        <div class="fs-13 col px-0">
                                            <span class="b mx-auto"></span>
                                            Theraphy
                                        </div>
                                        <div class="fs-13 col px-0">
                                            <span class="c mx-auto"></span>
                                            Mediation
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div id="lineChart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card overflow-hidden">
                        <div class="card-header align-items-start pb-0 border-0">	
                            <div>
                                <h4 class="fs-16 mb-0">451,509</h4>
                                <span class="fs-12">Tkts</span>
                            </div>
                            <div class="dropdown">
                                <a href="javascript:;"	class="dropdown-toggle fs-12" data-toggle="dropdown" aria-expanded="false">
                                    This Week
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);">Daily</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Weekly</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Monthly</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <canvas id="widgetChart1" height="60" class="mr-3"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card overflow-hidden">
                        <div class="card-header align-items-start pb-0 border-0">	
                            <div>
                                <h4 class="fs-16 mb-0">451,509</h4>
                                <span class="fs-12">Tkts</span>
                            </div>
                            <div class="dropdown">
                                <a href="javascript:;"	class="dropdown-toggle fs-12" data-toggle="dropdown" aria-expanded="false">
                                    This Week
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);">Daily</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Weekly</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Monthly</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <canvas id="widgetChart1" height="60" class="mr-3"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header align-items-start pb-0 border-0">	
                            <div>
                                <h4 class="fs-16 mb-0">$456,623</h4>
                                <span class="fs-12">Tickets</span>
                            </div>
                            <div class="dropdown">
                                <a href="javascript:;"	class="dropdown-toggle fs-12" data-toggle="dropdown" aria-expanded="false">
                                    This Week
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);">Daily</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Weekly</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Monthly</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <canvas id="lineChart_4" height="60"></canvas>
                        </div>
                    </div>
                </div>	
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header align-items-start pb-0 border-0">	
                            <div class="dropdown ml-auto">
                                <a href="javascript:;"	class="dropdown-toggle fs-12" data-toggle="dropdown" aria-expanded="false">
                                    This Week
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);">Daily</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Weekly</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Monthly</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-1">
                            <div class="index-chart-point">
                                <div class="check-point-area">
                                    <canvas id="doughnut_chart"></canvas>
                                </div>
                                <ul class="index-chart-point-list">
                                    <li><i class="fa fa-stop text-danger"></i>Tickets A</li>
                                    <li><i class="fa fa-stop text-success"></i> Tickets B</li>
                                    <li><i class="fa fa-stop text-warning"></i> Tickets C</li>
                                    <li><i class="fa fa-stop text-info"></i> Tickets D</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card overflow-hidden">
                        <div class="card-header border-0 pb-0">
                            <h4 class="card-title mb-1">Trending Tickets</h4>
                            <div class="dropdown ml-auto text-right">
                                <div class="btn-link" data-toggle="dropdown">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#fff" cx="12" cy="5" r="2"></circle><circle fill="#fff" cx="12" cy="12" r="2"></circle><circle fill="#fff" cx="12" cy="19" r="2"></circle></g></svg>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="javascript:void(0);">View Detail</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0 p-0">
                            <div class="media align-items-center border-bottom p-md-4 p-3">
                                <span class="number text-white col-1 px-0 align-self-center d-none d-sm-inline-block">#1</span>
                                <div class="ticket-icon bg-primary ml-0 mr-3 d-none d-sm-inline-block">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.9042 5.18413L0.556031 16.5323C0.281453 16.8068 0.281453 17.2521 0.556031 17.5266L3.24911 20.2197C3.44481 20.4154 3.73705 20.4781 3.99582 20.3799C5.0289 19.9878 6.20067 20.2386 6.98098 21.0189C7.76129 21.7992 8.01214 22.971 7.62003 24.0041C7.52178 24.2628 7.5845 24.5551 7.78019 24.7508L10.4733 27.4439C10.7479 27.7185 11.1931 27.7185 11.4677 27.4439L22.8158 16.0958L11.9042 5.18413Z" fill="#fff"></path>
                                    <path d="M27.4439 10.4734L24.7508 7.78025C24.5551 7.58456 24.2628 7.52185 24.0041 7.62009C22.971 8.0122 21.7993 7.76132 21.019 6.98101C20.2386 6.2007 19.9878 5.02893 20.3799 3.99585C20.4781 3.73711 20.4154 3.44484 20.2197 3.24914L17.5266 0.556062C17.252 0.281484 16.8068 0.281484 16.5322 0.556062L12.8985 4.18975L23.8102 15.1014L27.4439 11.4677C27.7185 11.1932 27.7185 10.7479 27.4439 10.4734Z" fill="#fff"></path>
                                    </svg>
                                </div>
                                <div class="media-body col-sm-6 col-6 col-xxl-5 px-0">
                                    <h5 class="mt-0 mb-0"><a class="text-white fs-18 font-w400 text-ov" href="javascript:void(0);">How much time does it take to get my money back!????
                                    </a></h5>
                                </div>
                                <div class="media-footer ml-auto col-2 px-0 d-flex align-self-center align-items-center">
                                    <div class="text-center">
                                        <span class="text-primary d-block fs-20">454</span>
                                        <span class="fs-14">Sales</span>
                                    </div>
                                </div>
                                <div class="mr-3">
                                    <span class="peity-success" data-style="width:100%;" style="display: none;">0,2,1,4</span>
                                    <svg width="26" height="27" viewBox="0 0 26 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="3.71426" height="27" rx="1.85713" transform="matrix(-1 0 0 1 26 0)" fill="#fff"></rect>
                                        <rect width="3.71426" height="19.6364" rx="1.85713" transform="matrix(-1 0 0 1 18.5723 7.36365)" fill="#fff"></rect>
                                        <rect width="3.71426" height="8.59091" rx="1.85713" transform="matrix(-1 0 0 1 11.1436 18.4091)" fill="#fff"></rect>
                                        <rect width="4.19045" height="16.6154" rx="2.09522" transform="matrix(-1 0 0 1 4.19043 10.3846)" fill="#fff"></rect>
                                    </svg>
                                </div>
                                <svg class="min-w22" width="22" height="11" viewBox="0 0 22 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 11L11 -4.72849e-07L22 11" fill="#13B497"></path>
                                </svg>
                            </div>
                            <div class="media align-items-center border-bottom p-md-4 p-3">
                                <span class="number text-white col-1 px-0 align-self-center d-none d-sm-inline-block">#2</span>
                                <div class="ticket-icon bg-primary ml-0 mr-3 d-none d-sm-inline-block">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.9042 5.18413L0.556031 16.5323C0.281453 16.8068 0.281453 17.2521 0.556031 17.5266L3.24911 20.2197C3.44481 20.4154 3.73705 20.4781 3.99582 20.3799C5.0289 19.9878 6.20067 20.2386 6.98098 21.0189C7.76129 21.7992 8.01214 22.971 7.62003 24.0041C7.52178 24.2628 7.5845 24.5551 7.78019 24.7508L10.4733 27.4439C10.7479 27.7185 11.1931 27.7185 11.4677 27.4439L22.8158 16.0958L11.9042 5.18413Z" fill="#fff"></path>
                                    <path d="M27.4439 10.4734L24.7508 7.78025C24.5551 7.58456 24.2628 7.52185 24.0041 7.62009C22.971 8.0122 21.7993 7.76132 21.019 6.98101C20.2386 6.2007 19.9878 5.02893 20.3799 3.99585C20.4781 3.73711 20.4154 3.44484 20.2197 3.24914L17.5266 0.556062C17.252 0.281484 16.8068 0.281484 16.5322 0.556062L12.8985 4.18975L23.8102 15.1014L27.4439 11.4677C27.7185 11.1932 27.7185 10.7479 27.4439 10.4734Z" fill="#fff"></path>
                                    </svg>
                                </div>
                                <div class="media-body col-sm-6 col-6 col-xxl-5 px-0">
                                    <h5 class="mt-0 mb-0"><a class="text-white fs-18 font-w400 text-ov" href="javascript:void(0);">How can I get a refund for my order?

                                    </a></h5>
                                </div>
                                <div class="media-footer ml-auto col-2 px-0 d-flex align-self-center align-items-center">
                                    <div class="text-center">
                                        <span class="text-primary d-block fs-20">341</span>
                                        <span class="fs-14">Sales</span>
                                    </div>
                                </div>
                                <div class="mr-3">
                                    <span class="peity-success" data-style="width:100%;" style="display: none;">0,2,1,4</span>
                                    <svg width="26" height="27" viewBox="0 0 26 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="3.71426" height="27" rx="1.85713" transform="matrix(-1 0 0 1 26 0)" fill="#fff"></rect>
                                        <rect width="3.71426" height="19.6364" rx="1.85713" transform="matrix(-1 0 0 1 18.5723 7.36365)" fill="#fff"></rect>
                                        <rect width="3.71426" height="8.59091" rx="1.85713" transform="matrix(-1 0 0 1 11.1436 18.4091)" fill="#fff"></rect>
                                        <rect width="4.19045" height="16.6154" rx="2.09522" transform="matrix(-1 0 0 1 4.19043 10.3846)" fill="#fff"></rect>
                                    </svg>
                                </div>
                                <svg class="min-w22" width="22" height="11" viewBox="0 0 22 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 -9.61651e-07L11 11L22 0" fill="#E63D3D"/>
                                </svg>
                            </div>
                            <div class="media align-items-center border-bottom p-md-4 p-3">
                                <span class="number text-white col-1 px-0 align-self-center d-none d-sm-inline-block">#3</span>
                                <div class="ticket-icon bg-primary ml-0 mr-3 d-none d-sm-inline-block">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.9042 5.18413L0.556031 16.5323C0.281453 16.8068 0.281453 17.2521 0.556031 17.5266L3.24911 20.2197C3.44481 20.4154 3.73705 20.4781 3.99582 20.3799C5.0289 19.9878 6.20067 20.2386 6.98098 21.0189C7.76129 21.7992 8.01214 22.971 7.62003 24.0041C7.52178 24.2628 7.5845 24.5551 7.78019 24.7508L10.4733 27.4439C10.7479 27.7185 11.1931 27.7185 11.4677 27.4439L22.8158 16.0958L11.9042 5.18413Z" fill="#fff"></path>
                                    <path d="M27.4439 10.4734L24.7508 7.78025C24.5551 7.58456 24.2628 7.52185 24.0041 7.62009C22.971 8.0122 21.7993 7.76132 21.019 6.98101C20.2386 6.2007 19.9878 5.02893 20.3799 3.99585C20.4781 3.73711 20.4154 3.44484 20.2197 3.24914L17.5266 0.556062C17.252 0.281484 16.8068 0.281484 16.5322 0.556062L12.8985 4.18975L23.8102 15.1014L27.4439 11.4677C27.7185 11.1932 27.7185 10.7479 27.4439 10.4734Z" fill="#fff"></path>
                                    </svg>
                                </div>
                                <div class="media-body col-sm-6 col-6 col-xxl-5 px-0">
                                    <h5 class="mt-0 mb-0"><a class="text-white fs-18 font-w400 text-ov" href="javascript:void(0);">Vintage table lamp - Out of stock?

                                    </a></h5>
                                </div>
                                <div class="media-footer ml-auto col-2 px-0 d-flex align-self-center align-items-center">
                                    <div class="text-center">
                                        <span class="text-primary d-block fs-20">225</span>
                                        <span class="fs-14">Sales</span>
                                    </div>
                                </div>
                                <div class="mr-3">
                                    <span class="peity-success" data-style="width:100%;" style="display: none;">0,2,1,4</span>
                                    <svg width="26" height="27" viewBox="0 0 26 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="3.71426" height="27" rx="1.85713" transform="matrix(-1 0 0 1 26 0)" fill="#fff"></rect>
                                        <rect width="3.71426" height="19.6364" rx="1.85713" transform="matrix(-1 0 0 1 18.5723 7.36365)" fill="#fff"></rect>
                                        <rect width="3.71426" height="8.59091" rx="1.85713" transform="matrix(-1 0 0 1 11.1436 18.4091)" fill="#fff"></rect>
                                        <rect width="4.19045" height="16.6154" rx="2.09522" transform="matrix(-1 0 0 1 4.19043 10.3846)" fill="#fff"></rect>
                                    </svg>
                                </div>
                                <svg class="min-w22" width="22" height="11" viewBox="0 0 22 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 11L11 -4.72849e-07L22 11" fill="#13B497"></path>
                                </svg>
                            </div>
                            <div class="media align-items-center border-bottom p-md-4 p-3">
                                <span class="number text-white col-1 px-0 align-self-center d-none d-sm-inline-block">#4</span>
                                <div class="ticket-icon bg-primary ml-0 mr-3 d-none d-sm-inline-block">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.9042 5.18413L0.556031 16.5323C0.281453 16.8068 0.281453 17.2521 0.556031 17.5266L3.24911 20.2197C3.44481 20.4154 3.73705 20.4781 3.99582 20.3799C5.0289 19.9878 6.20067 20.2386 6.98098 21.0189C7.76129 21.7992 8.01214 22.971 7.62003 24.0041C7.52178 24.2628 7.5845 24.5551 7.78019 24.7508L10.4733 27.4439C10.7479 27.7185 11.1931 27.7185 11.4677 27.4439L22.8158 16.0958L11.9042 5.18413Z" fill="#fff"></path>
                                    <path d="M27.4439 10.4734L24.7508 7.78025C24.5551 7.58456 24.2628 7.52185 24.0041 7.62009C22.971 8.0122 21.7993 7.76132 21.019 6.98101C20.2386 6.2007 19.9878 5.02893 20.3799 3.99585C20.4781 3.73711 20.4154 3.44484 20.2197 3.24914L17.5266 0.556062C17.252 0.281484 16.8068 0.281484 16.5322 0.556062L12.8985 4.18975L23.8102 15.1014L27.4439 11.4677C27.7185 11.1932 27.7185 10.7479 27.4439 10.4734Z" fill="#fff"></path>
                                    </svg>
                                </div>
                                <div class="media-body col-sm-6 col-6 col-xxl-5 px-0">
                                    <h5 class="mt-0 mb-0"><a class="text-white fs-18 font-w400 text-ov" href="javascript:void(0);">How much time does it take to get my money back!????
                                    </a></h5>
                                </div>
                                <div class="media-footer ml-auto col-2 px-0 d-flex align-self-center align-items-center">
                                    <div class="text-center">
                                        <span class="text-primary d-block fs-20">127</span>
                                        <span class="fs-14">Sales</span>
                                    </div>
                                </div>
                                <div class="mr-3">
                                    <span class="peity-success" data-style="width:100%;" style="display: none;">0,2,1,4</span>
                                    <svg width="26" height="27" viewBox="0 0 26 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="3.71426" height="27" rx="1.85713" transform="matrix(-1 0 0 1 26 0)" fill="#fff"></rect>
                                        <rect width="3.71426" height="19.6364" rx="1.85713" transform="matrix(-1 0 0 1 18.5723 7.36365)" fill="#fff"></rect>
                                        <rect width="3.71426" height="8.59091" rx="1.85713" transform="matrix(-1 0 0 1 11.1436 18.4091)" fill="#fff"></rect>
                                        <rect width="4.19045" height="16.6154" rx="2.09522" transform="matrix(-1 0 0 1 4.19043 10.3846)" fill="#fff"></rect>
                                    </svg>
                                </div>
                                <svg class="min-w22" width="22" height="11" viewBox="0 0 22 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 -9.61651e-07L11 11L22 0" fill="#E63D3D"/>
                                </svg>
                            </div>
                            <div class="media align-items-center border-bottom p-md-4 p-3">
                                <span class="number text-white col-1 px-0 align-self-center d-none d-sm-inline-block">#5</span>
                                <div class="ticket-icon bg-primary ml-0 mr-3 d-none d-sm-inline-block">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.9042 5.18413L0.556031 16.5323C0.281453 16.8068 0.281453 17.2521 0.556031 17.5266L3.24911 20.2197C3.44481 20.4154 3.73705 20.4781 3.99582 20.3799C5.0289 19.9878 6.20067 20.2386 6.98098 21.0189C7.76129 21.7992 8.01214 22.971 7.62003 24.0041C7.52178 24.2628 7.5845 24.5551 7.78019 24.7508L10.4733 27.4439C10.7479 27.7185 11.1931 27.7185 11.4677 27.4439L22.8158 16.0958L11.9042 5.18413Z" fill="#fff"></path>
                                    <path d="M27.4439 10.4734L24.7508 7.78025C24.5551 7.58456 24.2628 7.52185 24.0041 7.62009C22.971 8.0122 21.7993 7.76132 21.019 6.98101C20.2386 6.2007 19.9878 5.02893 20.3799 3.99585C20.4781 3.73711 20.4154 3.44484 20.2197 3.24914L17.5266 0.556062C17.252 0.281484 16.8068 0.281484 16.5322 0.556062L12.8985 4.18975L23.8102 15.1014L27.4439 11.4677C27.7185 11.1932 27.7185 10.7479 27.4439 10.4734Z" fill="#fff"></path>
                                    </svg>
                                </div>
                                <div class="media-body col-sm-6 col-6 col-xxl-5 px-0">
                                    <h5 class="mt-0 mb-0"><a class="text-white fs-18 font-w400 text-ov" href="javascript:void(0);">How much time does it take to get my money back!????
                                    </a></h5>
                                </div>
                                <div class="media-footer ml-auto col-2 px-0 d-flex align-self-center align-items-center">
                                    <div class="text-center">
                                        <span class="text-primary d-block fs-20">67</span>
                                        <span class="fs-14">Sales</span>
                                    </div>
                                </div>
                                <div class="mr-3">
                                    <span class="peity-success" data-style="width:100%;" style="display: none;">0,2,1,4</span>
                                    <svg width="26" height="27" viewBox="0 0 26 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="3.71426" height="27" rx="1.85713" transform="matrix(-1 0 0 1 26 0)" fill="#fff"></rect>
                                        <rect width="3.71426" height="19.6364" rx="1.85713" transform="matrix(-1 0 0 1 18.5723 7.36365)" fill="#fff"></rect>
                                        <rect width="3.71426" height="8.59091" rx="1.85713" transform="matrix(-1 0 0 1 11.1436 18.4091)" fill="#fff"></rect>
                                        <rect width="4.19045" height="16.6154" rx="2.09522" transform="matrix(-1 0 0 1 4.19043 10.3846)" fill="#fff"></rect>
                                    </svg>
                                </div>
                                <svg class="min-w22" width="22" height="11" viewBox="0 0 22 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 11L11 -4.72849e-07L22 11" fill="#13B497"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card sales-comparison">	
                        <div class="card-body pb-0">
                            <div class="d-flex align-items-center">
                                <div class="mr-auto">
                                    <h4 class="fs-20 text-white mb-0">Reply Comparison</h4>
                                    <span class="text-white fs-20 font-w100">Than last day</span>
                                </div>
                                <span class="fs-40 text-white font-w600 mr-2">94%</span>
                                <svg width="27" height="13" viewBox="0 0 27 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M26.002 13L13.002 1.55023e-07L0.00195312 13" fill="white"/>
                                </svg>
                            </div>
                            <div id="line-chart-2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">	
                    <div class="card">
                        <div class="card-header border-0 pb-0 d-sm-flex d-block">
                            <div>
                                <h4 class="mb-0 fs-20">Tickets Analysis</h4>
                            </div>
                            <div class="card-action card-tabs mt-3 mt-sm-0">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#user" role="tab" aria-selected="true">
                                            Monthly
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#bounce" role="tab" aria-selected="false">
                                            Weekly
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#session-duration" role="tab" aria-selected="false">
                                            Daily
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="lineChart_3" height="150"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">	
                    <div class="card">
                        <div class="card-body row d-sm-flex d-block align-items-center">
                            <div class="media col-sm-5 mb-2 mb-sm-0  align-items-center">
                                <svg class="mr-4 min-w50" width="50" height="53" viewBox="0 0 50 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="7.11688" height="52.1905" rx="3" transform="matrix(-1 0 0 1 49.8203 0)" fill="white"/>
                                    <rect width="7.11688" height="37.9567" rx="3" transform="matrix(-1 0 0 1 35.5869 14.2338)" fill="white"/>
                                    <rect width="7.11688" height="16.6061" rx="3" transform="matrix(-1 0 0 1 21.3535 35.5844)" fill="white"/>
                                    <rect width="8.0293" height="32.1172" rx="3" transform="matrix(-1 0 0 1 8.03125 20.0732)" fill="white"/>
                                </svg>
                                <div class="media-body">
                                    <p class="text-white mb-2 font-w300">Tickets</p>
                                    <span class="fs-26 text-white">$126,000</span>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <p class="fs-12 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">	
                    <div class="card">
                        <div class="card-body row d-sm-flex d-block align-items-center">
                            <div class="media col-sm-5 align-items-center mb-2 mb-sm-0">
                                <svg class="mr-4 min-w50" width="50" height="31" viewBox="0 0 52 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M49.8247 0.840214C51.2516 2.08096 51.4025 4.24349 50.1617 5.67035L35.1805 22.8987C32.7859 25.6525 28.6524 26.0444 25.7829 23.7898L18.6777 18.2072L6.27218 29.883C4.89525 31.1789 2.72847 31.1133 1.43253 29.7363C0.136595 28.3594 0.202256 26.1926 1.57919 24.8967L13.9847 13.2209C16.4514 10.8993 20.2447 10.7301 22.9082 12.8229L30.0134 18.4055L44.9946 1.1772C46.2353 -0.249661 48.3979 -0.400534 49.8247 0.840214Z" fill="white"/>
                                </svg>
                                <div class="media-body">
                                    <p class="text-white mb-2 font-w300">Customer</p>
                                    <span class="fs-26 text-white">109,511</span>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <p class="fs-12 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">	
                    <div class="card">
                        <div class="card-body row d-sm-flex d-block align-items-center">
                            <div class="media col-sm-5 align-items-center mb-2 mb-sm-0">
                                <svg class="mr-4 min-w50" width="50" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M25.502 43C34.8908 43 42.502 35.3888 42.502 26C42.502 16.6112 34.8908 9 25.502 9C16.1131 9 8.50195 16.6112 8.50195 26C8.50195 35.3888 16.1131 43 25.502 43ZM25.502 51.5C39.5852 51.5 51.002 40.0833 51.002 26C51.002 11.9167 39.5852 0.5 25.502 0.5C11.4187 0.5 0.00195312 11.9167 0.00195312 26C0.00195312 40.0833 11.4187 51.5 25.502 51.5Z" fill="white" fill-opacity="0.18"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M34.0016 1.95836C31.2828 0.997147 28.4092 0.5 25.5016 0.5V8.86605C28.5707 8.86605 31.5834 9.6904 34.225 11.253C36.8665 12.8155 39.0398 15.0589 40.5178 17.7486C41.9958 20.4384 42.7243 23.4757 42.6269 26.5433C42.5296 29.6108 41.6102 32.5959 39.9646 35.1866C38.3191 37.7772 36.008 39.8783 33.2727 41.2703C30.5374 42.6623 27.4785 43.294 24.4156 43.0995C21.3527 42.905 18.3983 41.8913 15.8611 40.1645C13.3239 38.4376 11.2971 36.061 9.99257 33.283L2.41992 36.8391C3.65583 39.4709 5.3273 41.8607 7.35301 43.9131C8.50954 45.0848 9.78153 46.1466 11.1539 47.0806C14.9299 49.6506 19.3269 51.1592 23.8853 51.4487C28.4438 51.7382 32.9963 50.798 37.0671 48.7264C41.1379 46.6548 44.5776 43.5277 47.0266 39.6721C49.4755 35.8165 50.844 31.3739 50.9888 26.8085C51.1336 22.2432 50.0495 17.7228 47.8499 13.7197C45.6502 9.71663 42.4157 6.37787 38.4843 4.05236C37.0556 3.2072 35.5538 2.50715 34.0016 1.95836Z" fill="white"/>
                                </svg>
                                <div class="media-body">
                                    <p class="text-white mb-2 font-w300">Last than Year</p>
                                    <span class="fs-26 text-white">59%</span>
                                    <svg class="ml-2" width="30" height="15" viewBox="0 0 30 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.00195312 15L14.502 -1.27353e-06L29.002 15" fill="#13B497"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <p class="fs-12 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis 
                                </p>
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