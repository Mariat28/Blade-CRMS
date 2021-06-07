<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Ticket;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        if(Auth::user()->userrole_id == 1 || Auth::user()->userrole_id == 2){
        $tickets = Ticket::where('status_id', null)->get();
            return view('adminandsupervisor.dashboard',compact('tickets'));
        }
        //redirect the user to the previous page
        else
        {
            //redirect the user to the previous page
            return back();
        }
    }

    public function manager(){
        if(Auth::user()->userrole_id == 4){
            return view('manager.dashboard');
        }
        //redirect the user to the previous page
        else
        {
            //redirect the user to the previous page
            return back();
        }
    }
}
