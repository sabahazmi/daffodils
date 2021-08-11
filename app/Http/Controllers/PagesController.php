<?php

namespace App\Http\Controllers;
use App\Patient;
use App\TestProfile;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {    
        return view('auth.login');
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