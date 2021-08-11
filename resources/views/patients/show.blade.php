@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-6 col-sm-12">
    <table class="table">
            <tr>
              <h3 class="text-center mt-1">Patient Details</h3>
            </tr>
            <tr>
              <td>Patient #</td>
              <td>{{ $patient->id }}</td>
            </tr><tr>
              <td>Name</td>
              <td>{{ $patient->name }}</td>
              </tr><tr>
              <td >Created</td> 
              <td>{{date('j M Y', strtotime($patient->created_at))}}</td>
            </tr><tr>
              <td >Gender</td>
              <td>{{ $patient->gender }}</td>
            </tr><tr> 
              <td >Age</td>
              <td>{{ $patient->age }} {{ $patient->age_count}}</td>
            </tr><tr>
              <td >Reffered By</td>
              <td>Dr Name</td>
            </tr><tr>
              <td >Mobile</td>
              <td>{{ $patient->mobile }}</td>
            </tr><tr>
              <td >Email</td>
              <td>{{ $patient->email}} </td>
            </tr><tr>
              <td>Aadhaar</td>
              <td>{{ $patient->aadhaar}}</td>
            </tr><tr>
              <td>Address</td>
              <td class="col-2 text-truncate">{{ $patient->address}}</td>             
              </tr>
          </table>
    </div>
    <div class="col-md-6 col-sm-12">
    <table class="table">
            <tr>
              <h3 class="text-center mt-1">Patient Reports</h3>
            </tr>
            <tr>
            <ul>

            @foreach ($patient->reports as $report)
            <li> 
            Report: <a href="/reports/{{$report->patient_id}}/{{$report->id}}">{{$report->created_at}}</a>
            </li>
            @endforeach
            </ul>  
          </tr>
          </table>
    </div>
  </div>
</div>
{{-- <div class="card">
  <table class="table">
      <tr>
        <th class="bg-dark text-light">Reports</th>
          
        <td>
      </td>
      </tr>
      </table>
</div> --}}
@endsection
