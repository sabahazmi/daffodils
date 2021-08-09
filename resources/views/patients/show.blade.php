@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-header pb-0">
          {{-- <a href="/patients" class="btn btn-dark">
          <i class="fa fa-angle-left" aria-hidden="true"></i>
          </a> --}}
          <h4>Patient Details</h4>
          {{-- <p class="float-right mb-0"><a href="../reports/create/{{$patient->id}}" class="btn btn-primary">Report</a> --}}
          </p>
        </div>
        <div class="card-body">
          <table class="table">
            <tr>
              <td>Patient #</td>
              <td class="font-weight-bold text-danger">{{ $patient->id }}</td>
              <td >Created</td>
              <td>{{date('j M Y', strtotime($patient->created_at))}}</td>
             
            </tr><tr>
              <td>Name</td>
              <td class="font-weight-bold text-danger">{{ $patient->name }}</td>
            </tr><tr>

              <td >Gender</td>
              <td>{{ $patient->gender }}</td>
              <td >Age</td>
              <td>{{ $patient->age }} {{ $patient->age_count}}</td>
            </tr><tr>
              <td >Reffered By</td>
              <td>Dr Name</td>
            </tr><tr>
              <td >Mobile</td>

              <td>{{ $patient->mobile }}</td>
              <td >Email</td>

              <td>{{ $patient->email}} </td>
              
            </tr><tr>
               
              
              
             
              
            </tr>
                
              {{-- <td>Addres</td>
              <td>{{ $patient->address}}</td> --}}
            
              {{-- <td>
                <a href="/patients/{{$patient->id}}/edit" class="btn btn-primary">Edit</a>
              </td>
               --}}
             
          </table>
        </div>
      </div>
  </div>
  </div>
</div>

{{-- <div class="card">
  <table class="table">
      <tr>
        <th class="bg-dark text-light">Reports</th>
          
        <td>@foreach ($patient->reports as $report)
              <a href="/reports/{{$report->patient_id}}/{{$report->id}}">{{$report->created_at}}</a> <br>
              <a href="/reports/{{$report->patient_id}}/{{$report->id}}">{{$report->created_at}}</a> <br>
              <a href="/reports/{{$report->patient_id}}/{{$report->id}}">{{$report->created_at}}</a> <br>
            @endforeach
      </td>
      </tr>
      </table>
</div> --}}
@endsection

{{-- <td>
              <form method="POST" action="{{ route('patients.destroy', $patient->id) }}">
                  @method('DELETE')
                  @csrf
                  <button type="submit" class="float-right btn btn-danger">
                  <i class="fa fa-trash" aria-hidden="true"></i>
                  </button>
                </form>
              </td> --}}