<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        return view('settings.settingspersonal');
    }

    public function userslist()
    {
        return view('settings.settingsusers');
    }

    public function supportchannels()
    {
        return view('settings.settingschannels');
    }

    public function general()
    {
        return view('settings.settingsgeneral');
    }
}
