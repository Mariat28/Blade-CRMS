<div class="modal fade" id="tktassign" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Assign Ticket to Agent</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
		    <div class="compose-content">
				<form action="{{ route('assignagent') }}" method="post" id="assignticket">
					@csrf
				<input type="number" name="ticketid" value="{{$data->id}}" hidden>
				<div class="form-group">
					<label for="ticketsource">Select group</label>
					<select class="form-control" id="assignticketgroup" name="agent">
					    <option>select agent</option>
                        @foreach($agents as $agent)
    					    <option value="{{$agent->id}}">{{$agent->name}}</option>
                        @endforeach
					</select>
				</div>
        			<div class="modal-footer">
        		  <button type="button" class="btn btn-secondary" data-dismiss="modal">cancel</button>
        		  <button type="submit" class="btn btn-primary">Submit</button>
        		</div>
				</form>
			</div>
		</div>
		
	  </div>
	</div>
  </div>