<?php

namespace App\Http\Controllers;

use App\Events\TicketCreated;
use App\Models\Comment;
use App\Models\Group;
use App\Models\User;
use App\Models\TicketPriority;
use App\Models\Reply;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function addticket(Request $req)
    {
        Ticket::create([
            'body' => $req->description,
            'subject' => $req->subject,
            'source' => $req->source,
            'created_by' => Auth::user()->name,
            'priority_id' => $req->priority,
            'duration' => 0,
            'status_id' => null,
            'user_id' => null,
        ]);
        return redirect('/tickets')->with("ticket_created","A new ticket has been created");
       
        $ticket= Ticket::findOrFail($req->id);
        TicketCreated::dispatch($ticket);
    }
    /**
     * @return \Illuminate\Http\Response
     */

    public function ticket()
    {
        // $ticket=DB::select('select*from tickets');
        $tickets = Ticket::where('status_id', null)->get();
        $prioritylist=TicketPriority::all();
        $opentickets = Ticket::where('status_id', 3)->get();
        $pendingtickets = Ticket::where('status_id', 2)->get();
        $closedtickets = Ticket::where('status_id', 1)->get();
        $departments = Group::where('company_id', Auth::user()->company_id)->get();  
        $departmentTickets = [];

        foreach($departments as $department){
            if ($department->users)
            {
                $totalTickets = 0;
                foreach($department->users as $user)
                {
                    if($user->tickets)
                    {
                        $totalTickets += count($user->tickets);
                    }
                }

                array_push($departmentTickets, ["id" => $department->id, "name" => $department->name, "tickets"=> $totalTickets]);
            }
        }

        #echo json_encode($departmentTickets);
        return view('adminandsupervisor.tickets', compact('tickets', 'closedtickets','departments','pendingtickets','prioritylist','opentickets','departmentTickets')); 
    }


    public function openticket()
    {
        $opentickets = Ticket::where('status_id', 3)->get();
        $tickets = Ticket::where('status_id', null)->get();
        $departments = Group::where('company_id', Auth::user()->company_id)->get();
        $prioritylist=TicketPriority::all();
        $pendingtickets = Ticket::where('status_id', 2)->get();
        $closedtickets = Ticket::where('status_id', 1)->get();
        $departmentTickets = [];

        foreach($departments as $department){
            if ($department->users)
            {
                $totalTickets = 0;
                foreach($department->users as $user)
                {
                    if($user->tickets)
                    {
                        $totalTickets += count($user->tickets);
                    }
                }

                array_push($departmentTickets, ["id" => $department->id, "name" => $department->name, "tickets"=> $totalTickets]);
            }
        }
        return view('adminandsupervisor.opentickets', compact('opentickets', 'departmentTickets','tickets','pendingtickets','closedtickets', 'departments','prioritylist'));
      
    }


    public function closedticket()
    {
        $closedtickets = Ticket::where('status_id', 1)->get();
        $tickets = Ticket::where('status_id', null)->get();
        $departments = Group::where('company_id', Auth::user()->company_id)->get();
        $prioritylist=TicketPriority::all();
        $opentickets = Ticket::where('status_id', 3)->get();
        $pendingtickets = Ticket::where('status_id', 2)->get();
        $departmentTickets = [];

        foreach($departments as $department){
            if ($department->users)
            {
                $totalTickets = 0;
                foreach($department->users as $user)
                {
                    if($user->tickets)
                    {
                        $totalTickets += count($user->tickets);
                    }
                }

                array_push($departmentTickets, ["id" => $department->id, "name" => $department->name, "tickets"=> $totalTickets]);
            }
        }
        return view('adminandsupervisor.closedtickets', compact('closedtickets', 'departmentTickets','opentickets','pendingtickets','tickets', 'departments','prioritylist'));

    }


    //pending tickets
    public function pendingticket()
    {
        $pendingtickets = Ticket::where('status_id', 2)->get();
        $tickets = Ticket::where('status_id', null)->get();
        $departments = Group::where('company_id', Auth::user()->company_id)->get();
        $prioritylist=TicketPriority::all();
        $opentickets = Ticket::where('status_id', 3)->get();
        $closedtickets = Ticket::where('status_id', 1)->get();
        $departmentTickets = [];

        foreach($departments as $department){
            if ($department->users)
            {
                $totalTickets = 0;
                foreach($department->users as $user)
                {
                    if($user->tickets)
                    {
                        $totalTickets += count($user->tickets);
                    }
                }

                array_push($departmentTickets, ["id" => $department->id, "name" => $department->name, "tickets"=> $totalTickets]);
            }
        }
        return view('adminandsupervisor.pendingtickets', compact('closedtickets', 'departmentTickets','opentickets','pendingtickets','tickets', 'departments','prioritylist'));
  }


    //  retrieve one ticket's details
    public function ticketdetails($id, Request $req)
    {
        $data = Ticket::find($id);
        $agents = User::where('userrole_id', 3)->get();
        $tickets = Ticket::where('status_id', null)->get();
        $departments = Group::where('company_id', Auth::user()->company_id)->get();
        $opentickets = Ticket::where('status_id', 3)->get();
        $pendingtickets = Ticket::where('status_id', 2)->get();
        $closedtickets = Ticket::where('status_id', 1)->get();
        $departmentTickets = [];

        foreach($departments as $department){
            if ($department->users)
            {
                $totalTickets = 0;
                foreach($department->users as $user)
                {
                    if($user->tickets)
                    {
                        $totalTickets += count($user->tickets);
                    }
                }

                array_push($departmentTickets, ["id" => $department->id, "name" => $department->name, "tickets"=> $totalTickets]);
            }
        }
        return view('adminandsupervisor.ticketdetails', compact('data', 'agents', 'departmentTickets','tickets', 'departments','opentickets','pendingtickets','closedtickets'));
    }


    //retrieve openticketdetails
    public function openticketdetails($id)
    {
        $ticket = Ticket::find($id);
        $reply = Reply::where('ticket_id', $id)->first();
        $comments = $ticket->comments;
        $departments = Group::where('company_id', Auth::user()->company_id)->get();
        $tickets = Ticket::where('status_id', null)->get();
        $opentickets = Ticket::where('status_id', 3)->get();
        $pendingtickets = Ticket::where('status_id', 2)->get();
        $closedtickets = Ticket::where('status_id', 1)->get();
        $prioritylist=TicketPriority::all();
        $departmentTickets = [];

        foreach($departments as $department){
            if ($department->users)
            {
                $totalTickets = 0;
                foreach($department->users as $user)
                {
                    if($user->tickets)
                    {
                        $totalTickets += count($user->tickets);
                    }
                }

                array_push($departmentTickets, ["id" => $department->id, "name" => $department->name, "tickets"=> $totalTickets]);
            }
        }
        return view('openticketdetails', compact('ticket', 'reply', 'prioritylist','comments', 'tickets', 'departments','opentickets','closedtickets','pendingtickets','departmentTickets'));
    }
    //retrieve closedticket details
    public function closedticketdetails($id){
        $ticket = Ticket::find($id);
        $creator=User::where('id',$ticket->user_id)->get();
        $reply =  Reply::where('ticket_id', $id)->get();
        $comments = $ticket->comments;
        $departments = Group::where('company_id', Auth::user()->company_id)->get();
        $tickets = Ticket::where('status_id', null)->get();
        $opentickets = Ticket::where('status_id', 3)->get();
        $pendingtickets = Ticket::where('status_id', 2)->get();
        $closedtickets = Ticket::where('status_id', 1)->get();
        $departmentTickets = [];

        foreach($departments as $department){
            if ($department->users)
            {
                $totalTickets = 0;
                foreach($department->users as $user)
                {
                    if($user->tickets)
                    {
                        $totalTickets += count($user->tickets);
                    }
                }

                array_push($departmentTickets, ["id" => $department->id, "name" => $department->name, "tickets"=> $totalTickets]);
            }
        }
        return view('adminandsupervisor.closedticketdetails', compact('ticket', 'reply','creator', 'comments', 'tickets', 'departments','opentickets','closedtickets','pendingtickets','departmentTickets'));
    
    }


    //reply to ticket
    public function ticketreply(Request $req)
    {
        Reply::create([
            'reply' => $req->reply,
            'user_id' => Auth::user()->id,
            'ticket_id' => $req->id,
        ]);

        //update the ticket status to an open ticket
        Ticket::where('id', $req->id)->update(['status_id' => 3, 'user_id' => Auth::user()->id]);
        return redirect()->route('tickets');
    }

    // update ticket status
    public function changeTicketstatus(Request $request)
    {
      
        Ticket::where('id', $request->id)->update(['status_id' => '1']);
        Reply::create([
            'reply'=>"Closed",
            'user_id'=>Auth::user()->id,
            'ticket_id'=>$request->id,
        ]);
        return redirect()->route('tickets');
    }
    //delete ticket
    public function deleteticket($id){
        Reply::where('ticket_id',$id)->delete();
        Comment::where('ticket_id',$id)->delete();
        Ticket::where('id', $id)->delete();
        return redirect()->route('closedtickets');

    }
    public function assign(Request $request)
    {
        $id = intval($request->agent);
        Ticket::where('id', $request->ticketid)->update(['user_id' => $id]);
        //update the ticket status to a pending ticket
        Ticket::where('id', $request->ticketid)->update(['status_id' => 2, 'user_id' => Auth::user()->id]);
        return redirect()->route('tickets');
    }


    //comment on ticket
    public function addcomment(Request $req)
    {
        Comment::create([
            'comment' => $req->comment,
            'ticket_id' => $req->id,
            'user_id' => Auth::user()->id,
        ]);

        return back();
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view()
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticketid)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
