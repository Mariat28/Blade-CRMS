<div class="modal fade" id="addsupervisor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Supervisor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="basic-form">

                    <form action="{{ route('addsupervisor') }}" method="post" id="addsupervisor">
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
                    </form>
                </div>
            </div>
            <div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-dismiss="modal">cancel</button>
		  <button type="submit" class="btn btn-primary" form="addsupervisor">Add Supervisor</button>
		</div>
        </div>
    </div>
</div>