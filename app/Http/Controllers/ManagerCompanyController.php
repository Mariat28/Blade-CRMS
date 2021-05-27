<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManagerCompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        if(Auth::user()->userrole_id == 4){
            return view('manager.companies')->with('companies', Company::all());
        }
        //redirect the user to the previous page
        else
        {
            //redirect the user to the previous page
            return back();
        }
    }
}
