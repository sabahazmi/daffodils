@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-body m-0 p-0">

                <div class="card-header">Add Patient</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('patients.store') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('Mobile') }}</label>

                            <div class="col-md-6">
                                <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autofocus autocomplete="mobile">

                                @error('mobile')
                                    <span class="invalid-feedback" id="mobile_error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" >

                                @error('name')
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

                            <div class="col-md-2">
                                <input id="age" type="text" class="form-control" name="age" required autocomplete="age">
                            </div>
                            <div class="col-md-6">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="age_count" id="inlineRadio" value="year">
                                <label class="form-check-label" for="inlineRadio"> Year</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="age_count" id="inlineRadio" value="month">
                                <label class="form-check-label" for="inlineRadio"> Month</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="age_count" id="inlineRadio" value="day">
                                <label class="form-check-label" for="inlineRadio"> Day</label>
                                </div>
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
            <div id="result"></div>


            <script type="application/javascript">
                $(document).ready(function(){
            
                    $('#mobile').on('change', function(){
            
                        var mobile = $('#mobile').val();
            
                        $.ajax({

                            type:"GET",
                            url: '/patients/create/check',
                            data: {mobile: $('#mobile').val()},
                            success: function(response) {
                                response = JSON.parse(response);
                                for (var patient of response) {
                                    console.log(patient);
                                }
                            }



                            });
            
            
                    });
            
                });
                </script>
        </div>
    </div>
</div>
@endsection