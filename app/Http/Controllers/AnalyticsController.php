<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class AnalyticsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $tickets = Ticket::where('status_id', null)->get();
        return view('adminandsupervisor.analytics',compact('tickets'));
    }
}
