<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TestProfile;
use App\Test;

class TestsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        // $tests = Test::latest()->paginate(5);
        $testProfiles = TestProfile::all();
        return view("tests.index", array('testProfiles' => $testProfiles));
        // return view('tests.index')->with('testProfiles', $testProfiles, 'tests', $tests);
    }
    public function store(){
        $test = new Test();
        $test->test_profile_id = request('test_profile_id');
        $test->name = request('name');
        $test->reference_value = request('reference_value');
        $test->save();
		return redirect('test')->with('success', 'Test Created!');
    }
}