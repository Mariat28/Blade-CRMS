@extends('layouts.master')

@section('headlinks')
<link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
<link href="./css/style.css" rel="stylesheet">
@endsection

@section('content')
<div class="content-body">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Add Agent Account</h4>
                                    <div class="basic-form">
                                        <form action="{{ route('addagent') }}" method="post">
                                            @csrf
                                            <div class="form-group @error('name') input-danger-o @enderror">
                                                <label class="mb-1"><strong>Full Name</strong></label>
                                                <input type="text" class="form-control" placeholder="Fullname" name="name" value="{{ old('name') }}">
                                                @error('name')
                                                    <p class="text-danger text-sm">{{ $message }}</p>
                                                @enderror
                                            </div> 
                                            <div class="form-group @error('username') input-danger-o @enderror">
                                                <label class="mb-1"><strong>Username</strong></label>
                                                <input type="text" class="form-control" placeholder="username" name="username" value="{{ old('username') }}">
                                                @error('username')
                                                    <p class="text-danger text-sm">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group @error('email') input-danger-o @enderror">
                                                <label class="mb-1"><strong>Email</strong></label>
                                                <input type="email" class="form-control" placeholder="hello@example.com" name="email" value="{{ old('email') }}">
                                                @error('email')
                                                    <p class="text-danger text-sm">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group @error('phonenumber') input-danger-o @enderror">
                                                <label class="mb-1"><strong>Phone Number</strong></label>
                                                <input type="text" class="form-control" placeholder="+256001598977" name="phonenumber" value="{{ old('phonenumber') }}">
                                                @error('phonenumber')
                                                    <p class="text-danger text-sm">{{ $message }}</p>
                                                @enderror
                                            </div> 
                                            <div class="form-group @error('password') input-danger-o @enderror">
                                                <label class="mb-1"><strong>Password</strong></label>
                                                <input type="text" class="form-control" value="" name="password" name="password">
                                                @error('password')
                                                    <p class="text-danger text-sm">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="text-center mt-4">
                                                <button type="submit" class="btn btn-primary btn-block">Add Agent</button>
                                            </div>
                                        </form>
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
@endsection

@section('scripts')
<script src="{{ URL::asset('vendor/global/global.min.js') }}"></script>
<script src="{{ URL::asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
<script src="{{ URL::asset('js/custom.min.js') }}"></script>
<script src="{{ URL::asset('js/deznav-init.js') }}"></script>
@endsection