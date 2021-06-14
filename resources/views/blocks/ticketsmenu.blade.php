<div class="email-left-box px-0 mb-3">
    <div class="p-0 ">
        <a  class="btn btn-primary btn-block" data-toggle="modal" data-target="#newticket">
            <i class="fa fa-plus  align-middle mr-2"></i>Create New Ticket</a>
    </div>
    <div class="mail-list mt-4">
        <a href="{{ route('tickets',['ticketsCategory'=>'unassigned']) }}" class="list-group-item {{(request()->is('tickets/unassigned')||request()->is('ticketdetails*')) ? 'active' : ''}}"><i
                class="fa fa-inbox font-18 align-middle mr-2"></i> Unassigned <span
                class="badge badge-primary badge-sm float-right">{{$unassignedTickets}}</span> 
        </a>      
        <a href="{{ route('tickets',['ticketsCategory'=>'pending']) }}" class="list-group-item {{(request()->is('tickets/pending')) ? 'active' : ''}}"><i
            class="mdi mdi-file-document-box font-18 align-middle mr-2"></i>Pending<span
                class="badge badge-primary badge-sm float-right">{{$pendingTickets}}</span> 
        </a>
        <a href="{{ route('tickets',['ticketsCategory'=>'open']) }}" class="list-group-item {{(request()->is('tickets/open')||request()->is('openticketdetails*')) ? 'active' : ''}}"><i
            class="fa fa-paper-plane font-18 align-middle mr-2"></i>Open <span
                class="badge badge-primary badge-sm float-right">{{$openTickets}}</span> 
        </a>
        <a href="{{ route('tickets',['ticketsCategory'=>'closed']) }}" class="list-group-item {{(request()->is('tickets/closed')||request()->is('closedticketdetails*')) ? 'active' : ''}}""><i
            class="fa fa-trash font-18 align-middle mr-2"></i>Closed<span
                class="badge badge-primary badge-sm float-right">{{$closedTickets}}</span> 
        </a>
    </div>
    <div class="intro-title d-flex justify-content-between">
        <h5>Departments</h5>
        <i class="icon-arrow-down" aria-hidden="true"></i>
    </div>
    <div class="mail-list mt-4">
        @foreach($departmentTickets as $department)
        <a href="#" class="list-group-item"><span class="icon-warning"><i
            class="fa fa-circle" aria-hidden="true"></i></span>
            {{$department['name']}} 
            <span
                class="badge badge-primary badge-sm float-right">{{$department['tickets']}}</span>
        </a>
        @endforeach
    </div>
</div>