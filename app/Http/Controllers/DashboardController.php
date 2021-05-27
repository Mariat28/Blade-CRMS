<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        if(Auth::user()->userrole_id == 1 || Auth::user()->userrole_id == 2){
            return view('adminandsupervisor.dashboard');
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
