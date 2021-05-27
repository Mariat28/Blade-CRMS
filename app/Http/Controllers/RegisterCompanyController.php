<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterCompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        if(Auth::user()->userrole_id == 4){
            return view('manager.registercompany');
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
            'companyname'=> 'required',
            'companywebsite'=> 'required',
            'city'=> 'required',
            'country'=> 'required',
            'companyemail'=> 'required|email|max:255',
            'phonenumber'=> 'required',
            'subscription'=> 'required',
        ]);

        Company::create([
            'name' => $request->companyname,
            'email' => $request->companyemail,
            'country' => $request->country,
            'city' => $request->city,
            'website' => $request->companywebsite,
            'subscriptionplan'=> $request->subscription,
        ]);

        return redirect()->route('dashboard');
        
    }
}
