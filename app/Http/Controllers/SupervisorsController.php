<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupervisorsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        if(Auth::user()->userrole_id == 1){
            
            return view('admin.supervisors')->with('supervisors', User::where('userrole_id', 2)->get());
        }
        //redirect the user to the previous page
        else
        {
            //redirect the user to the previous page
            return back();
        }
    }

    public function addsupervisor(Request $request)
    {
        dd($request);
    }
}
