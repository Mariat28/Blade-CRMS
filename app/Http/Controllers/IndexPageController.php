<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Ticket;
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
            $userid = Auth::user()->id;
            $group = Group::find(Auth::user()->group_id);
            $tickets = Auth::user()->tickets;
            return view('agent.index')->with('tickets', $tickets)->with('group', $group);
            //Ticket::orderBy('id','desc')->paginate(10);
        }
        elseif(Auth::user()->userrole_id == 1 or Auth::user()->userrole_id == 2)
        {
            return view('adminandsupervisor.dashboard');
        }
        elseif(Auth::user()->userrole_id == 1 or Auth::user()->userrole_id == 4){
            return view('manager.index');
        }
    }
}
