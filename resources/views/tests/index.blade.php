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
  <div class="row justify-content-center">
    <div class="col-md-12">
      {{-- <a href="{{ route('patients.create')}}" class="btn btn-primary"><i class="fa fa-eye"></i></a> --}}
      <form method="POST" action="{{ route('test.store') }}">
        @csrf
        <div class="form-group row">
          <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Test Profile') }}</label>
          <div class="col-md-6">
            <select class="custom-select" name="test_profile_id">
              @foreach ($testProfiles as $testProfile)
              <option value="{{$testProfile->id}}">{{$testProfile->name}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Test Name') }}</label>
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
          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Reference Value') }}</label>
          <div class="col-md-6">
            <input id="name" type="text" class="form-control @error('reference_value') is-invalid @enderror" name="reference_value" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>
        <div class="form-group row mb-0">
          <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
            {{ __('Add Test') }}
            </button>
          </div>
        </div>
      </form>
      <div class="row my-2">
        <table class="table">
          @if (count($testProfiles) > 0)
          @foreach ($testProfiles as $testProfile)
          <ul>
            <h4>{{$testProfile->name}}</h4>
            @foreach ($testProfile->tests as $test)
              <li>{{$test->name}}</li>
            @endforeach
          </ul>
            @endforeach
            @else 
            <p>No Test Profile</p>
            @endif
        </table>
    </div>
  </div>
</div>
@endsection