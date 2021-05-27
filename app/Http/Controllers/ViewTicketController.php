<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use App\Models\Ticket;
use App\Models\TicketPriority;
use Illuminate\Http\Request;

class ViewTicketController extends Controller
{
    public function index($ticketid){
        $ticket = Ticket::find($ticketid);
        $ticketPriority = TicketPriority::find($ticket->priority_id);

        if($ticket->status_id == 2 or $ticket->status_id == 4){
            return view('agent.viewunrepliedticket')->with('ticket', $ticket)->with('priority', $ticketPriority);
        }
        elseif($ticket->status_id == 3){
            $timelineClasses = [
                'primary',
                'info',
                'danger',
                'success',
                'warning',
                'dark',
            ];

            return view('agent.viewrepliedticket')->with('ticket', $ticket)->with('priority', $ticketPriority)->with('reply', Reply::where('ticket_id',$ticket->id)->first())->with('timelineClasses', $timelineClasses);
        }
        else{
            dd($ticket->status_id);
        }
    }
}
