<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Service;

use App\Facilities;

use App\Student;

class FrontendController extends Controller
{
    public function index(){
        
        

        return view('welcome')->with('facilities',Facilities::all())
        ->with('services',Service::all())
        ->with('students',Student::all()) ;
    }
}
