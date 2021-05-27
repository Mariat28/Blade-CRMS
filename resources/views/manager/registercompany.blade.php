@extends('layouts.manager')

@section('content')
<div style="" class="content-body authincation">
    <div class="container h-90">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">
                                <h4 class="text-center mb-4">Add Company Account</h4>
                                <div class="basic-form">
                                    <form action="{{ route('registercompany') }}" method="post">
                                        @csrf
                                        <div class="form-group @error('companyname') input-danger-o @enderror">
                                            <label class="mb-1"><strong>Company Name</strong></label>
                                            <input type="text" class="form-control" placeholder="company name" name="companyname" value="{{ old('companyname') }}">
                                            @error('companyname')
                                                <p class="text-danger text-sm">{{ $message }}</p>
                                            @enderror
                                        </div> 
                                        <div class="form-group @error('companywebsite') input-danger-o @enderror">
                                            <label class="mb-1"><strong>Company Website</strong></label>
                                            <input type="text" class="form-control" placeholder="companywebsite" name="companywebsite" value="{{ old('companywebsite') }}">
                                            @error('companywebsite')
                                                <p class="text-danger text-sm">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group @error('companyemail') input-danger-o @enderror">
                                            <label class="mb-1"><strong>Company Email</strong></label>
                                            <input type="email" class="form-control" placeholder="hello@example.com" name="companyemail" value="{{ old('companyemail') }}">
                                            @error('companyemail')
                                                <p class="text-danger text-sm">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group @error('country') input-danger-o @enderror">
                                            <label class="mb-1"><strong>Country</strong></label>
                                            <input type="text" class="form-control" placeholder="country" name="country" value="{{ old('country') }}">
                                            @error('country')
                                                <p class="text-danger text-sm">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group @error('city') input-danger-o @enderror">
                                            <label class="mb-1"><strong>City</strong></label>
                                            <input type="text" class="form-control" placeholder="city" name="city" value="{{ old('city') }}">
                                            @error('city')
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
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Subscription Plan</strong></label>
                                            <select class="form-control" name="subscription">
                                                <option>Basic</option>
                                                <option>Economical</option>
                                                <option>Pro</option>
                                            </select>
                                        </div>                                        
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-block">Add Company</button>
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
@endsection