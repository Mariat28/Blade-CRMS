<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Ticket;
use App\Models\TicketPriority;
use App\Models\TicketStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class IndexPageController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        if(Auth::user()->userrole_id == 3){
            $group = Group::find(Auth::user()->group_id);
            $tickets = Auth::user()->tickets;
            $group = Group::find(Auth::user()->group_id);
            $ticketStatuses = TicketStatus::all();
            $ticketPriorities = TicketPriority::all();
            return view('agent.index', compact(['tickets', 'group', 'ticketStatuses', 'ticketPriorities']));
            //Ticket::orderBy('id','desc')->paginate(10);
        }
        elseif(Auth::user()->userrole_id == 1 || Auth::user()->userrole_id == 2)
        {
            return redirect()->route('dashboard');
        }
        elseif(Auth::user()->userrole_id == 4){
            return view('manager.index', compact(['tickets']));
        }
        else{
            return back();
        }
    }
}
