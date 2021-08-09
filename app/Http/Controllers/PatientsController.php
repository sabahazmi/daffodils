<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Report;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $patients = Patient::latest()->get();
        return view('patients.index')->with('patients', $patients);
    }
    public function findPatientByMobile(Request $request){
            // get the search term
    $mobile = $request->input('mobile');
        echo $mobile;
    // search the members table
    $patients = DB::table('patients')->where('mobile', '=', "$mobile")->get();
    // $patients = Patient::where('mobile', 'Like', $mobile)->get();


    // return the results
    return response()->json($patients);
      
     }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patients.create');
    }  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //Create Patient
        $patient = new Patient;
        $patient->name = $request->input('name');
        $patient->mobile = $request->input('mobile');
        $patient->gender = $request->input('gender');
        $patient->age = $request->input('age');
        $patient->age_count = $request->input('age_count');
        $patient->email = $request->input('email');
        $patient->address = $request->input('address');
        $patient->save();
        return redirect('patients')->with('success', 'Patient Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $patient = Patient::find($id);
        if($patient){
            return view("patients.show", array('patient' => $patient));
        }else{
            
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient = Patient::find($id);
        return view('patients.edit')->with('patient', $patient);   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //Create Patient
        $patient = Patient::find($id);
        $patient->name = $request->input('name');
        $patient->mobile = $request->input('mobile');
        $patient->gender = $request->input('gender');
        $patient->age = $request->input('age');
        $patient->age_count = $request->input('age_count');
        $patient->email = $request->input('email');
        $patient->address = $request->input('address');
        $patient->save();
        return redirect('patients')->with('success', 'Patient Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = Patient::find($id);
        $patient->delete();
        return redirect('patients')->with('success', 'Patient Deleted');
    }
}