<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class SettingsController extends Controller

{
    
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $tickets = Ticket::where('status_id', null)->get();
        return view('settings.settingspersonal',compact('tickets'));
    }

    public function userslist()
    {    $tickets = Ticket::where('status_id', null)->get();
        return view('settings.settingsusers',compact('tickets'));
    }

    public function supportchannels()
    {    $tickets = Ticket::where('status_id', null)->get();
        return view('settings.settingschannels',compact('tickets'));
    }

    public function general()
    {    $tickets = Ticket::where('status_id', null)->get();
        return view('settings.settingsgeneral',compact('tickets'));
    }
}
