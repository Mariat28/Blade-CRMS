<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\User;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{
    public function index()
    {
        /*User::create([
            'name' => 'Onyango Andrew',
            'username' => 'Andrew',
            'userrole_id' => 1,
            'email' => 'aonyango@projectcode.ug',
            'password' => Hash::make("pass"),
            'company_id' => 2,
            'phonenumber' => '0753659098',
        ]);*/

        return view('auth.login');
    }

    public function loginUser(Request $request)
    {
        $this->validate($request,[
            'email'=> 'required|email',
            'password'=> 'required',
        ]);

        $credentials = $request->only('email', 'password');
        
        if(!Auth::attempt($credentials,$request->remember)){
            return back()->with('status', 'Invalid Login Details');
        }
        else{
            $company = Company::find(Auth::user()->company_id);
            $request->session()->put('company', $company);
            return redirect()->route('home');
        }
    }

    public function logoutUser()
    {
        if(Auth::check())
        {
            Auth::logout();
            return redirect()->route('login');
        }
        else 
        {
            return back();
        }
    }
}
