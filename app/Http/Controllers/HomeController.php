<?php

namespace App\Http\Controllers;

use App\Prevent;

class HomeController extends Controller
{

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() 
    {
        $clients = Prevent::all();

        return view('dashboard', compact('clients'));
    }
}
