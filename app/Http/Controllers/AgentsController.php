<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Issue;
use App\Models\User;
use App\Models\Ticket;
use App\Models\Userrole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AgentsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        return view('adminandsupervisor.addagent');
    }

    public function viewAgents()
    {
        if (Auth::user()->userrole_id == 2 || Auth::user()->userrole_id == 1) {
            //Fetch agents specific to this company
            $agents = User::where('company_id', Auth::user()->company_id)->where('userrole_id', 3)->get();

            //Fetch departments specific to this company
            $departments = Group::where('company_id', Auth::user()->company_id)->get();

            //Fetch all roles specific to this company
            $roles = Userrole::all();
            
            //Fetch tickets specific to this company
            $tickets = Issue::where('company_id', Auth::user()->company_id)->where('status_id', 5)->get();

            return view('adminandsupervisor.agents', 
                compact([
                    'agents', 
                    'departments', 
                    'roles',
                    'tickets'
                ]));

        }
        
        //redirect the user to the previous page
        else {
            //redirect the user to the previous page
            return back();
        }
    }
    //edit user details
    public function editagent($id, Request $request){
       User::where('id',$id)->update(['userrole_id'=>$request->userrole_id, 'group_id'=>$request->group_id]);
        return back();
    }

    public function addAgent(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email|max:255',
            'phonenumber' => 'required',
            'password' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'userrole_id' => 3,
            'company_id' => Auth::user()->company_id,
            'email' => $request->email,
            'phonenumber' => $request->phonenumber,
            'password' => Hash::make($request->password),
        ]);
        //Fetch agents specific to this company
        $agents = User::where('company_id', Auth::user()->company_id)->where('userrole_id', 3)->get();

        //Fetch departments specific to this company
        $departments = Group::where('company_id', Auth::user()->company_id)->get();

        //Fetch tickets specific to this company
        $tickets = Issue::where('company_id', Auth::user()->company_id)->where('status_id', 5)->get();

        //Fetch all roles specific to this company
        $roles = Userrole::all();

        return redirect()->route('viewagents', compact('agents', 'departments', 'roles', 'tickets'));
    }
}
