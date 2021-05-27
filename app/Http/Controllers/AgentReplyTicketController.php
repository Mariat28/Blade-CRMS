<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Reply;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgentReplyTicketController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function store(Request $request){
       //confirm that user is agent
       if(Auth::user()->userrole_id == 3){
            //store the reply
            Reply::create([
                'reply'=> $request->summernote,
                'user_id'=> Auth::user()->id,
                'ticket_id'=> $request->ticketid,
            ]);

            //store comment if there is any
            if($request->comment){
                Comment::create([
                    'comment'=> $request->comment,
                    'user_id'=> Auth::user()->id,
                    'ticket_id'=> $request->ticketid,
                ]);
            }
            
            //update the ticket status to an open ticket
            Ticket::where('id', $request->ticketid)->update(['status_id' => 3]);

            $ticketsComments = Ticket::find($request->ticketid)->comments;
            
            return view('agent.viewrepliedticket')->with('ticketid', $request->ticketid)->with('comments', $ticketsComments);
       }
       else{
           return redirect()->back();
       }
    }
}
