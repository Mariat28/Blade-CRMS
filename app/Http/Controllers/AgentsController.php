<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgentsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function viewAgents()
    {
        if(Auth::user()->userrole_id == 2 || Auth::user()->userrole_id == 1){
            
            Group::where('company_id', Auth::user()->company_id);
            
            return view('adminandsupervisor.agents')->with('agents', User::where('userrole_id', 3)->get())->with('groups', Group::where('company_id', Auth::user()->company_id)->get());
        }
        //redirect the user to the previous page
        else
        {
            //redirect the user to the previous page
            return back();
        }
    }
}
