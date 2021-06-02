<?php

namespace App\Http\Controllers;
use App\Models\Group;
use App\Models\User;
use App\Models\Userrole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SupervisorsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function supervisors()
    {
        if(Auth::user()->userrole_id == 1){
            $groups = Group::where('company_id', Auth::user()->company_id)->get();
            $roles = Userrole::all();
            $supervisors=User::where('userrole_id', 2)->get();
        return view('admin.supervisors', compact('supervisors','roles','groups'));
        }
        //redirect the user to the previous page
        else
        {
            //redirect the user to the previous page
            return back();
        }
    }

    public function index()
    {
        if(Auth::user()->userrole_id == 2 || Auth::user()->userrole_id == 1){
            return view('admin.addsupervisor');
        }
        //redirect the user to the previous page
        else
        {
            //redirect the user to the previous page
            return back();
        }
    }

    public function addSupervisor(Request $request)
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
            'userrole_id' => 2,
            'company_id' => Auth::user()->company_id,
            'email' => $request->email,
            'phonenumber'=> $request->phonenumber,
            'password' => Hash::make($request->password),
        ]);
        $supervisors = User::where('userrole_id', 2)->get();
       
        return view('admin.supervisors', compact('supervisors'));
    }
     //edit supervisor details
     public function editsupervisor($id, Request $request){
        User::where('id',$id)->update(['userrole_id'=>$request->userrole_id, 'group_id'=>$request->group_id]);
         return back();
     }
}
