<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterCompanyAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        if(Auth::user()->userrole_id == 4){
            return view('manager.registeradmin')->with('companies', Company::all());
        }
        //redirect the user to the previous page
        else
        {
            //redirect the user to the previous page
            return back();
        }
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=> 'required',
            'username'=> 'required',
            'companyname'=> 'required',
            'email'=> 'required|email|max:255',
            'phonenumber'=> 'required',
            'password'=> 'required|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'userrole_id' => 1,
            'company_id' => $request->companyname,
            'email' => $request->email,
            'phonenumber'=> $request->phonenumber,
            'password' => Hash::make($request->password),
        ]);

        return view('manager.index');
        
    }
}
