@extends('layouts.master')

@section('headlinks')
<link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<link href="/xhtml/icons/font-awesome-old/css/all.css" rel="stylesheet">
<link href="/xhtml/icons/font-awesome-old/css/fontawesome.mins.css" rel="stylesheet">
<link href="./css/style.css" rel="stylesheet">
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
                    <div class="email-right-box ml-0 ml-sm-4 ml-sm-0 ">
                        <h4 class="mt-3 pt-3">Personal Profile</h4>
                        <!-- row -->
                        <div class="row  mt-4">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-4 col-xxl-2">
                                                <img src="images/profile/profile.png" class="img-fluid rounded-circle" alt="">
                                                <a class="btn-primary btn mt-sm-3 mt-xl-3">Change</a>
                                            </div>
                                            <div class="col-xl-8 col-xxl-10">
                                                <p>Name: <span style="margin-left: 103px;">Ndagire Mariat</span></p>
                                                <p>Email Address: <span style="margin-left: 40px;">mndagire23@gmail.com</span></p>
                                                <p>Phone Number: <span style="margin-left: 35px;">+256 753 659 098</span></p>
                                                <p>Password: <span style="font-weight: bolder;margin-left: 80px;">*******</span><i class="fa fa-edit ml-3 mt-0 text-primary"></i></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <h4>Organization Profile</h4>
                        <!-- row -->
                        <div class="row  mt-4">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-4 ">
                                                <img src="images/profile/profile.png" class="img-fluid rounded-circle" alt="">
                                                <a class="btn-primary btn mt-3">Change</a>
                                            </div>
                                            <div class="col-xl-8 mt-5">
                                                <p>Oganization Name: <span class="ml-3">KAVANI Associates</span><i class="fa fa-edit ml-3 mt-0 text-primary"></i></p>
                                                <p>Organization Url: <span class="ml-3">kavassociates@helpdesk.com</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Create new ticket modal -->
<div class="modal fade" id="newuser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add new User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="compose-content">
                <form action="index.html">
                    <div class="form-group">
                        <div class="form-group">
                            <label class="mb-1"><strong>Full Name</strong></label>
                            <input type="email" class="form-control" placeholder="hello@example.com">
                        </div>
                        <label class="mb-1"><strong>Username</strong></label>
                        <input type="text" class="form-control" placeholder="username">
                    </div>
                    <div class="form-group">
                        <label class="mb-1"><strong>Email</strong></label>
                        <input type="email" class="form-control" placeholder="hello@example.com" >
                    </div>
                    <div class="form-group">
                        <label class="mb-1"><strong>Phone number</strong></label>
                        <input type="email" class="form-control text-primary" placeholder="0706876756" >
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Role</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                          <option>Admin</option>
                          <option>supervisor</option>
                          <option>Agent</option>
                          
                        </select>
                      </div>
                    
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Assign to group</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </div>
                    <div class="form-group">
                        <label class="mb-1"><strong>Password</strong></label>
                        <input type="password" class="form-control" value="Password">
                    </div>
                    
                </form>
                
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">cancel</button>
            <button type="button" class="btn btn-primary">Add User</button>
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
<script src="./vendor/chart.js/Chart.bundle.min.js"></script>
<script src="./vendor/owl-carousel/owl.carousel.js"></script>

<!-- Datatable -->
<script src="./vendor/datatables/js/jquery.dataTables.min.js"></script>
<script>
    (function ($) {
        var table = $('#example5').DataTable({
            searching: false,
            paging: true,
            select: false,
            //info: false,         
            lengthChange: false

        });
        var table = $('#example3').DataTable({
            searching: false,
            paging: true,
            select: false,
            //info: false,         
            lengthChange: false

        });
        var table = $('#example4').DataTable({
            searching: false,
            paging: true,
            select: false,
            //info: false,         
            lengthChange: false

        });
        $('#example tbody').on('click', 'tr', function () {
            var data = table.row(this).data();

        });
    })(jQuery);
</script>
@endsection