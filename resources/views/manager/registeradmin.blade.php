@extends('layouts.manager')

@section('content')
<div style="" class="content-body authincation">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Add Administrator Account</h4>
                                    <div class="basic-form">
                                        <form action="{{ route('registercompanyadmin') }}" method="post">
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
                                            <div class="form-group">
                                                <label class="mb-1"><strong>Company</strong></label>
                                                <select class="form-control" name="companyname">
                                                    <option></option>
                                                    @foreach($companies as $company)
                                                        <option value="{{$company->id}}">{{$company->name}}</option>
                                                    @endforeach
                                                </select>
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
                                                <input type="password" class="form-control" value="" name="password" name="password">
                                                @error('password')
                                                    <p class="text-danger text-sm">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1"><strong>Repeat Password</strong></label>
                                                <input type="password" class="form-control" value="" name="password_confirmation">
                                            </div>
                                            <div class="text-center mt-4">
                                                <button type="submit" class="btn btn-primary btn-block">Add Administrator</button>
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