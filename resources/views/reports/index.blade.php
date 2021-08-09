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
        <div class="card-header justify-content-center">
          </div>
        <div class="card-body">
         
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
