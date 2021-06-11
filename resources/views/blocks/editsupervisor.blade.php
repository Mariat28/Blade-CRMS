<div class="modal fade" id="edituser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Edit details</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
		    <div class="compose-content">
				<form  method="POST" id="useredit">
					@csrf
					@foreach($supervisors as $supervisor)
					<input type="hidden" id="id" name="id" value="{{$supervisor->id}}">
					@endforeach
				<div class="form-group">
					<label for="department">Edit Role</label>
					<select class="form-control" id="role" name="role">
                        @foreach($roles as $role)
    					    <option value="{{$role->id}}">{{$role->name}}</option>
                        @endforeach
					</select>
				</div>
                <div class="form-group">
					<label for="department">Edit Department</label>
					<select class="form-control" id="department" name="department">
                        @foreach($departments as $department)
    					    <option value="{{$department->id}}">{{$department->name}}</option>
                        @endforeach
					</select>
				</div>
        			<div class="modal-footer">
        		  <button type="button" class="btn btn-secondary" data-dismiss="modal">cancel</button>
        		  <input type="submit" class="btn btn-primary" value="Submit" id="submit" >
        		</div>
				</form>
			</div>
		</div>
		
	  </div>
	</div>
  </div>