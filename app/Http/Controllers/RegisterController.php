<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        if(Auth::user()->userrole_id == 2 || Auth::user()->userrole_id == 1){
            return view('auth.register');
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
            'email'=> 'required|email|max:255',
            'phonenumber'=> 'required',
            'password'=> 'required|confirmed',
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

        return view('dashboard');
        
    }
        
}
