<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function postGenerateBackup()
    {
        exec('C:\Windows\System32\cmd.exe /C START C:\xampp\htdocs\sicicza\backup.bat');
        return redirect('/home')->with('create','Backup  creado con éxito');

    }
}
