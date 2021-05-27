<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AgentsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function viewAgents()
    {
        if(Auth::user()->userrole_id == 2 || Auth::user()->userrole_id == 1){
            
            return view('adminandsupervisor.agents')->with('agents', User::where('userrole_id', 3)->get())->with('groups', Group::where('company_id', Auth::user()->company_id)->get());
        }
        //redirect the user to the previous page
        else
        {
            //redirect the user to the previous page
            return back();
        }
    }

    public function addAgent(Request $request)
    {
        $this->validate($request,[
            'name'=> 'required',
            'username'=> 'required',
            'email'=> 'required|email|max:255',
            'phonenumber'=> 'required',
            'password'=> 'required',
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'userrole_id' => 3,
            'company_id' => Auth::user()->company_id,
            'email' => $request->email,
            'phonenumber'=> $request->phonenumber,
            'password' => Hash::make($request->password),
        ]);
        $agents = User::where('userrole_id', 3)->get();
        $groups = Group::where('company_id', Auth::user()->company_id)->get();
        return view('adminandsupervisor.supervisors', compact('agents', 'groups'));
    }
}
