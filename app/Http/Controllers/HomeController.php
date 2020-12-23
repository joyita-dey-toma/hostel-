<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Facilities;

use App\Service;

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
        return view('home')
        ->with('facilities_count',Facilities::all()->count())
        ->with('services_count',Service::all()->count())
        ->with('users_count',User::all()->count());
    }
}
