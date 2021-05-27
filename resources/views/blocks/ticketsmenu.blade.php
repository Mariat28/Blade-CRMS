<div class="email-left-box px-0 mb-3">
    <div class="p-0 ">
        <a  class="btn btn-primary btn-block" data-toggle="modal" data-target="#newticket">
            <i class="fa fa-plus  align-middle mr-2"></i>Create New Ticket</a>
    </div>
    <div class="mail-list mt-4">
        <a href="/tickets" class="list-group-item {{(request()->is('tickets')) ? 'active' : ''}}"><i
                class="fa fa-inbox font-18 align-middle mr-2"></i> Unassigned <span
                class="badge badge-primary badge-sm float-right">{{count($tickets)}}</span> 
        </a>      
        <a href="/pendingtickets" class="list-group-item {{(request()->is('pendingtickets')) ? 'active' : ''}}"><i
            class="mdi mdi-file-document-box font-18 align-middle mr-2"></i>Pending
        </a>
        <a href="/opentickets" class="list-group-item {{(request()->is('opentickets')) ? 'active' : ''}}"><i
            class="fa fa-paper-plane font-18 align-middle mr-2"></i>Open 
        </a>
        <a href="/closedtickets" class="list-group-item {{(request()->is('closedtickets')) ? 'active' : ''}}""><i
            class="fa fa-trash font-18 align-middle mr-2"></i>Closed
        </a>
    </div>
    <div class="intro-title d-flex justify-content-between">
        <h5>Departments</h5>
        <i class="icon-arrow-down" aria-hidden="true"></i>
    </div>
    <div class="mail-list mt-4">
        @foreach($departments as $department)
        <a href="#" class="list-group-item"><span class="icon-warning"><i
            class="fa fa-circle" aria-hidden="true"></i></span>
            {{$department->name}} 
        </a>
        @endforeach
    </div>
</div>