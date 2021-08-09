@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-header"><h1>Report Summary</h1></div>
                    <div class="card-body">
                       <table class="table table-striped">
                        <tr>    
                            <td>#</td>
                            <td>{{ $report->id }}</td>
                            <td>Name</td>
                            <td>{{ $report->name }}</td>
                            <td>Created</td>
                            <td>{{date('j M Y', strtotime($report->created_at))}}</td>
                        </tr>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
