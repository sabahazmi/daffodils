@extends('layouts.app')
@section('content')
<script>
  $(document).ready(function(){
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
</script>
<div class="container">
  <div class="row my-4 justify-content-center">
    <div class="col-md-12">    
      <div class="card">
        <div class="card-header justify-content-center">
          <input id="myInput" type="text" class="col-md-4 col-sm-12 form-control float-right" placeholder="Search..">

          {{-- <button type="button" class="float-left  btn btn-primary my-1" data-toggle="modal" data-target="#addForm">
          Add Patient
          </button> --}}
          
          
          <h3>
          Patients</h4>
          </div>
        <div class="card-body">
          <table class="table overflow-auto table-patient text-center" id="myTable">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Patient ID</th>
                <th scope="col">Name</th>
                <th scope="col">Date</th>
                <th scope="col">View | Edit</th>
              </tr>
            </thead>
            <tbody>
              @if(count($patients) > 0)
              @foreach($patients as $patient)
              <tr>
                <td scope="row">{{ $patient->id }}</td>
                <td>{{ $patient->name }}</td>
                <td>{{date('j M Y', strtotime($patient->created_at))}}</td>
                <td>
                  <a class="mr-2" href="/patients/{{$patient->id}}"><i style="color: #343a40 !important" class="fa fa-eye"></i></a>
                  <a href="/patients/{{$patient->id}}/edit"><i style="color: #343a40 !important" class="fa fa-pencil" aria-hidden="true"></i></a>
                </td>
              </tr>
              @endforeach
              @endif
            </tbody>
          </table>
          {{-- {{ $patients->links() }} --}}
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="addForm" tabindex="-1" role="dialog" aria-labelledby="addFormTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addFormTitle">Add Patient</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('patients.store') }}">
          @csrf
          <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
            <div class="col-md-6">
              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
              @error('name')
              <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('Mobile') }}</label>
            <div class="col-md-6">
              <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile">
              @error('mobile')
              <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
            <div class="col-md-6">
              <select class="custom-select" name="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Others">Others</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>
            <div class="col-md-6">
              <input id="age" type="text" class="form-control" name="age" required autocomplete="age">
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
            <div class="col-md-6">
              <input id="email" type="email" class="form-control" name="email" required autocomplete="email">
            </div>
          </div>
          <div class="form-group row">
            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
            <div class="col-md-6">
              <textarea id="address" class="form-control" name="address" required autocomplete="address"></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="aadhaar" class="col-md-4 col-form-label text-md-right">{{ __('Aadhaar') }}</label>
            <div class="col-md-6">
              <input id="aadhaar" type="text" class="form-control" name="aadhaar" required autocomplete="aadhaar">
            </div>
          </div>
          <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
              <button type="submit" class="btn btn-primary">
              {{ __('Add Patient') }}
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="addForm" tabindex="-1" role="dialog" aria-labelledby="addFormTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addFormTitle">Add Patient</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('patients.store') }}">
          @csrf
          <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
            <div class="col-md-6">
              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
              @error('name')
              <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('Mobile') }}</label>
            <div class="col-md-6">
              <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile">
              @error('mobile')
              <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
            <div class="col-md-6">
              <select class="custom-select" name="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Others">Others</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>
            <div class="col-md-6">
              <input id="age" type="text" class="form-control" name="age" required autocomplete="age">
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('email') }}</label>
            <div class="col-md-6">
              <input id="email" type="email" class="form-control" name="email" required autocomplete="email">
            </div>
          </div>
          <div class="form-group row">
            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('address') }}</label>
            <div class="col-md-6">
              <textarea id="address" class="form-control" name="address" required autocomplete="address"></textarea>
            </div>
          </div>
          <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
              <button type="submit" class="btn btn-primary">
              {{ __('Add Patient') }}
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection