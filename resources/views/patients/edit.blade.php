@extends('layouts.app')
@section('content')
<div class="container">
<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card">
      <div class="card-body">
        <div class="card-header">Edit Patient</div>
        <div class="card-body">
          <form method="POST" action="{{ route('patients.update', $patient->id) }}">
            @method('PATCH')
            @csrf
            <div class="form-group row">
              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
              <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $patient->name }}" required autocomplete="name" autofocus>
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
                <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ $patient->mobile }}" required autocomplete="mobile">
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
                  <option @if ($patient->gender == 'Male')
                    selected                      
                  @endif value="Male">Male</option>
                  <option 
                  @if ($patient->gender == 'Female')
                    selected                      
                  @endif value="Female">Female</option>
                  <option 
                  @if ($patient->gender == 'Others')
                    selected 
                  @endif value="Others">Others</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>

              <div class="col-md-2">
                  <input id="age" type="text" class="form-control" name="age" required autocomplete="age" value="{{ $patient->age }}">
              </div>
              <div class="col-md-6">
                  <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="age_count" id="inlineRadio" value="year" @if ($patient->age_count == 'year') checked @endif>
                  <label class="form-check-label" for="inlineRadio"> Year</label>
                  </div>
                  <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="age_count" id="inlineRadio" value="month" @if ($patient->age_count == 'month') checked @endif>
                  <label class="form-check-label" for="inlineRadio"> Month</label>
                  </div>
                  <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="age_count" id="inlineRadio" value="day" @if ($patient->age_count == 'day') checked @endif>
                  <label class="form-check-label" for="inlineRadio"> Day</label>
                  </div>
              </div>
          </div>
            <div class="form-group row">
              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('email') }}</label>

              <div class="col-md-6">
                  <input id="email" type="email" class="form-control" name="email" value="{{ $patient->email }}" required autocomplete="email">
              </div>
          </div>

          <div class="form-group row">
              <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('address') }}</label>

              <div class="col-md-6">
                  <textarea id="address" class="form-control" name="address" required autocomplete="address">{{ $patient->address }}</textarea>
              </div>
          </div>
            <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                  <i class="fa fa-floppy-o text-white" aria-hidden="true"></i>
                {{ __('Save') }}
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection