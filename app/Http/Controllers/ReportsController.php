<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        return view('adminandsupervisor.reports');
    }

    public function ticketsVolume()
    {
        return view('adminandsupervisor.ticketsvolume');
    }
}
