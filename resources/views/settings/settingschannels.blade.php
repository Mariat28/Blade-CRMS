@extends('layouts.master')

@section('headlinks')
<link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<link href="/xhtml/icons/font-awesome-old/css/all.css" rel="stylesheet">
<link href="/xhtml/icons/font-awesome-old/css/fontawesome.mins.css" rel="stylesheet">
<link href="./css/style.css" rel="stylesheet">
<link href="./css/styles.css" rel="stylesheet">
<script src="https://use.fontawesome.com/ed56eefd7e.js"></script>
@endsection

@section('content')
<div class="container-fluid">
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Settings</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Customization</a></li>
        </ol>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    @include('layouts.settingsmenu')
                    
                    <div class="email-right-box ml-0 ml-sm-4 ml-sm-0 mt-4">
                        <h5 class="support-title">Support Channels</h5>
                        <!-- row 1 -->
                       <div class="row">
                           <div class="col-md-4 card-border mt-3 h-50 border w-25">
                            <div class="custom-control custom-switch  d-flex justify-content-end toggler">
                                <input type="checkbox" class="custom-control-input text-primary" id="customSwitch1">
                                <label class="custom-control-label text-secondary" for="customSwitch1"> Activate</label>
                              </div>
                            <div class="card support-card card-border">
                                <img src="images/icons/whatsapp.svg" class="text-primary" height="60">
                                <a class="text-center mt-3" href="email-settings.html">Whatsap</a>
                            </div>
                            
                           </div>
                           <div class="col-md-4 card-border mt-3 h-50 w-25">
                            <div class="custom-control custom-switch pl-5 d-flex justify-content-end toggler">
                                <input type="checkbox" class="custom-control-input text-primary pl-5" id="customSwitch2">
                                <label class="custom-control-label text-secondary" for="customSwitch2"> Deactivate</label>
                              </div>
                            <div class="card  support-card card-border">
                                <img src="images/icons/facebook.svg" class="text-primary" height="60">
                                <a class="text-center mt-3" data-target="#fb-modal" data-toggle="modal">Facebook</a>
                            </div>
                            
                           </div>
                           <div class="col-md-4 card-border mt-3 h-50 w-25">
                            <div class="custom-control custom-switch  d-flex justify-content-end toggler">
                                <input type="checkbox" class="custom-control-input text-primary" id="customSwitch3">
                                <label class="custom-control-label text-secondary" for="customSwitch3"> Activate</label>
                              </div>
                            <div class="card support-card">
                                <img src="images/icons/twitter.svg" class="text-primary" height="60">
                                <a class="text-center mt-3" data-target="#tt-modal" data-toggle="modal">Twitter</a>
                            </div>
                            
                           </div>
                       </div>	
                       <!-- row 2 -->
                       <div class="row bg-transparent mt-5">
                        <div class="col-md-4 card-border mt-3 h-50 w-25">
                            <div class="custom-control custom-switch d-flex justify-content-end toggler">
                                <input type="checkbox" class="custom-control-input text-primary" id="customSwitch4">
                                <label class="custom-control-label text-secondary" for="customSwitch4"> Activate</label>
                              </div>
                         <div class="card  support-card">
                             <img src="images/icons/email.svg" class="text-primary" height="60">
                             <a class="text-center mt-3 card-border" href="email-settings.html">Email</a>
                         </div>
                         
                        </div>
                        <div class="col-md-4 card-border mt-3 h-50 w-25">
                            <div class="custom-control custom-switch  d-flex justify-content-end toggler">
                            <input type="checkbox" class="custom-control-input text-primary" id="customSwitch5">
                            <label class="custom-control-label text-secondary" for="customSwitch5"> Activate</label>
                          </div>
                         <div class="card  support-card">
                             <img src="images/icons/customer-service.svg" class="text-secondary" height="60">
                             <a class="text-center mt-3">Phone Call</a>
                             
                         </div>
                         
                        </div>
                        <div class="col-md-4 card-border mt-3 h-50 w-25">
                            <div class="custom-control custom-switch  d-flex justify-content-end toggler">
                                <input type="checkbox" class="custom-control-input text-primary" id="customSwitch6">
                                <label class="custom-control-label text-secondary" for="customSwitch6"> Activate</label>
                              </div>
                         <div class="card support-card ">
                             <img src="images/icons/form.svg"  height="60">
                             <a class="text-center mt-3">Feedback form</a>
                         </div>
                         
                        </div>
                    </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Create facebook modal -->
		<!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="fb-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	  <div class="modal-content">
		<div class="modal-header">
		  <h6 class="modal-title" id="exampleModalLabel">Integrate Facebook</h6>
		  <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body ">
			<div class="d-flex">
				<img src="images/icons/facebook.svg" height="60">
				<h5 class="mt-2 ml-3">Engage with your clients, directly on facebook</h5>
			</div>
		
			<p class="mt-2 ml-5 pl-4">This integration allows you to chat with your Facebook clients directly with in HelpDesk</p>

		
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
		  <button type="button" class="btn btn-primary">Add Facebook Account</button>
		</div>
	  </div>
	</div>
  </div>
  <!-- twitter modal -->
  <div class="modal fade" id="tt-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	  <div class="modal-content">
		<div class="modal-header">
		  <h6 class="modal-title" id="exampleModalLabel">Integrate Twitter</h6>
		  <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body ">
			<div class="d-flex">
				<img src="images/icons/twitter.svg" height="60" class="mt-2">
				<h5 class="mt-2 ml-3">Engage with your clients, directly on twitter</h5>
			</div>
		
			<p class="ml-5 pl-4">This integration allows you to chat with your twitter clients directly with in HelpDesk</p>

		
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
		  <button type="button" class="btn btn-primary">Add Twitter Account</button>
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
@endsection