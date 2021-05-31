<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Ticket;
use App\Models\TicketPriority;
use App\Models\TicketStatus;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        return view('adminandsupervisor.reports');
    }

    public function ticketsVolume()
    {
        return view('adminandsupervisor.ticketsvolume');
    }

    public function agentsPerformance()
    {
        $agents = User::where('company_id', Auth::user()->company_id)->where('userrole_id', 3)->get();

        $departments = Group::where('id', Auth::user()->company_id)->get();

        return view('adminandsupervisor.agentsperformance', compact(['agents', 'departments']));
    }

    public function agentPerformanceDetails($agentId)
    {
        $agent = User::find($agentId);
        $tickets = Ticket::where('user_id', $agentId)->get();
        $ressolvedTickets = Ticket::where('user_id', $agentId)->where('status_id', 3)->get();
        $pendingTickets = Ticket::where('user_id', $agentId)->where('status_id', 2)->get();
        $group = Group::find($agent->group_id);
        $statuses = TicketStatus::all();
        $priorities = TicketPriority::all();

        return view('adminandsupervisor.agentperformancedetails', compact(['tickets', 'ressolvedTickets', 'pendingTickets', 'group', 'statuses', 'priorities', 'agent']));
    }

    public function departmentsPerformance()
    {
        return view('adminandsupervisor.departmentsperformance');
    }
}
