<!-- Create new ticket modal -->
<div class="modal fade" id="newticket" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Create New Ticket</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
		    <div class="compose-content">
				<form action="{{ route('addticket') }}" method="post" id="createticket">
					@csrf
					<div class="form-group">
					<label for="sender">Origin</label>
						<input type="text" id="sender" class="form-control bg-transparent" placeholder="Sender:" name="sender" required>
					</div>
					<div class="form-group">
					<label for="subject">Subject</label>
						<input type="text" class="form-control bg-transparent" placeholder=" Subject:" name="subject" id="subject" required>
					</div>
					<div class="form-group">
					<label for="status">Ticket Status</label>
						<input type="text" class="form-control bg-transparent text-muted" id="status" value="unassigned" name="status" readonly>
					</div>
					<div class="form-group">
                        <label class="mb-1"><strong>Ticket Source</strong></label>
                        <select class="form-control" name="source">
                            <option>Contact form</option>
        					<option>Phone Call</option>
        					<option>FaceBook</option>
        					<option>Whatsap</option>
        					<option>ChatBot</option>
                        </select>
                    </div>
				<div class="form-group">
					<label>Ticket priority</label>
					<select class="form-control" id="ticketpriority" name="priority">
					@foreach ($priorityList as $priority)
					<option value="{{$priority->id}}">{{$priority->name}}</option>
					@endforeach
					</select>
				</div>
				<div class="form-group">
					<label>Assign to group (optional)</label>
					<select class="form-control" id="ticketgroup" name="group">
					<option>select group</option>
					@foreach($departments as $department)
					<option value="{{$department->id}}">{{$department->name}}</option>
					@endforeach
					</select>
				</div>
					<div class="form-group">
					<label for="ticketsource">Ticket description</label>
		
						<div class="form-group pt-3">
							<textarea id="ticketdescription" cols="30" style="height:300px;" rows="5"  class="form-control" name="description" placeholder="Enter ticket description..." required></textarea>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-dismiss="modal">cancel</button>
		  <button type="submit" class="btn btn-primary" form="createticket">create ticket</button>
		</div>
	  </div>
	</div>
  </div>
</div>