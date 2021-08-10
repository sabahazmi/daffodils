@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                    <div class="card-body">
                        <h2 class="bg-dark text-light text-center">{{ $test->name }}</h2>
                       <table class="table-responsive b-0">
                        <tr>
                            <td>Created</td>
                            <td class="p-2">{{date('j M Y', strtotime($test->created_at))}}</td>
                        </tr><tr>
                            <td>Reference value</td>
                            <td class="p-2">{{$test->reference_value}}</td>
                        </tr><tr>
                            <td>Profile</td>
                            <td class="p-2"><a href="/testProfile/{{$test->testProfile->id}}">{{$test->testProfile->name}}</a></td>

                        </tr>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
