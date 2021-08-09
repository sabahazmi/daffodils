<?php

namespace App\Http\Controllers;
use App\Patient;
use App\TestProfile;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
    
       $testProfiles = TestProfile::all();
        return view('pages.index')->with('testProfiles', $testProfiles);
    }

    public function about()
    {
        return view('welcome');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}