<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddCommentToTicketController extends Controller
{
    public function store(Request $request){
        Comment::create([
            'comment'=> $request->comment,
            'ticket_id'=> $request->ticketid,
            'user_id'=> Auth::user()->id,
        ]);

        return redirect()->back();
    }
}
