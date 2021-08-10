<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TestProfile;

class TestProfileController extends Controller
{
    public function index(){
        $testProfiles = TestProfile::latest()->paginate(6);
        return view("test_profiles.index")->with('testProfiles', $testProfiles);
    }
    public function create(){
        return view("test_profiles.create");
    }
    public function store(){
        $testProfile = new TestProfile();
        $testProfile->name = request('name');
        $testProfile->save();
		return redirect('testProfile')->with('success', 'Test Profile Created Created');
    }
    public function show($id)
    {   
        $testProfile = TestProfile::find($id);
        if($testProfile){
            return view("test_profiles.show", array('testProfile' => $testProfile));
        }else{
            
        }
    }
}