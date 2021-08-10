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
    <div class="col-md-11">
      {{-- <a href="{{ route('patients.create')}}" class="btn btn-primary"><i class="fa fa-eye"></i></a> --}}
      <div class="card shadow-lg">
        <div class="card">
          <div class="card-body m-0 p-0">
            <div class="card-header">Add Test Profile</div>
            <div class="card-body">
              <form method="POST" action="{{ route('testProfile.store') }}">
                @csrf
                <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Profile Name') }}</label>
                  <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
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
                    {{ __('Add Profile') }}
                    </button>
                  </div>
                </div>
              </form>
              <table class="table my-2">
                @if (count($testProfiles) > 0)
                <tr>
                  @foreach ($testProfiles as $testProfile)
                    <td>{{$testProfile->name}}</td>
                  @endforeach
                @else 
                  <td>No Test Profile</td>
                @endif
                {{ $testProfiles->links() }}
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection