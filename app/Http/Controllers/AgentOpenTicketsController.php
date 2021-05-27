<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Ticket;
use App\Models\TicketStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgentOpenTicketsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(){
        return view('agent.opentickets')->with('group', Group::find(Auth::user()->group_id));
    }
}
