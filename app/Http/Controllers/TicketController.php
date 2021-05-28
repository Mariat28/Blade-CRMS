<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Group;
use App\Models\User;
use App\Models\Reply;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function addticket(Request $req){
        Ticket::create([
            'body' => $req->description,
            'subject' => $req->subject,
            'source' => $req->source,
            'created_by' => Auth::user()->name,
            'priority_id'=> 3,
            'duration' => 0,
            'user_id' => null,
        ]);
        
        return back();

    }
    /**
     * @return \Illuminate\Http\Response
     */

    public function ticket()
    {
        // $ticket=DB::select('select*from tickets');
        $tickets = Ticket::where('user_id', null)->get();
        $departments = Group::where('company_id', Auth::user()->company_id)->get();
        return view('adminandsupervisor.tickets',compact('tickets', 'departments'));
    }


    public function openticket()
    {
    $tickets = Ticket::where('status_id', 3)->get();
    $opentickets=Ticket::where('user_id', null)->get();
    $departments = Group::where('company_id', Auth::user()->company_id)->get();
    return view('adminandsupervisor.opentickets',compact('tickets','opentickets','departments'));
    }


    public function closedticket()
    {
        $tickets = Ticket::where('status_id', 1)->get();
        $newtickets =Ticket::where('user_id', null)->get();
        $departments = Group::where('company_id', Auth::user()->company_id)->get();
        return view('adminandsupervisor.closedtickets',compact('tickets','newtickets', 'departments'));
    } 
     
    
    //pending tickets
    public function pendingticket()
    {
        $tickets = Ticket::where('status_id', 2)->get();
        $newtickets =Ticket::where('user_id', null)->get();
        $departments = Group::where('company_id', Auth::user()->company_id)->get();
         return view('adminandsupervisor.pendingtickets',compact('tickets','newtickets', 'departments'));
    }
     

    //  retrieve one ticket's details
    public function ticketdetails($id, Request $req){
        $data=Ticket::find($id);
        $agents =User::where('userrole_id', 3)->get();
        $tickets=Ticket::where('user_id', null)->get();
        $departments = Group::where('company_id', Auth::user()->company_id)->get();
        return view('adminandsupervisor.ticketdetails',compact('data','agents','tickets', 'departments'));
    }


    //retrieve openticketdetails
    public function openticketdetails($id){
         $ticket =Ticket::find($id);
         $reply = Reply::where('ticket_id', $id)->first();
         $comments = $ticket->comments;
         $newtickets = Ticket::where('user_id', null)->get();
         return view('openticketdetails',compact('ticket', 'reply', 'comments','newtickets'));
    }


    //reply to ticket
    public function ticketreply(Request $req){
        Reply::create([
            'reply'=> $req->reply,
            'user_id'=> Auth::user()->id,
            'ticket_id'=> $req->id,
        ]);
        
        //update the ticket status to an open ticket
        Ticket::where('id', $req->id)->update(['status_id' => 3, 'user_id' => Auth::user()->id]);
        
        return back();
    }

// update ticket status
public function updateticket(Request $request){
    Ticket::where('id', $request->ticket_id)->update(['status_id' => '1']);
return back();
    
}
    public function assign(Request $request){
        $id = intval($request->agent);
        Ticket::where('id', $request->ticketid)->update(['user_id' => $id]);
        return back();

    }
    
    
    //comment on ticket
    public function addcomment(Request $req){
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
