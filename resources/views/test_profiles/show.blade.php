@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                    <div class="card-body">
                        <h2>{{ $testProfile->name }}</h2>
                        <div>
                        @if (count($testProfile->tests) > 0)
                            <ul class="bg-light br-1 mr-4">
                                @foreach ($testProfile->tests as $test)
                                <li><a href="../test/{{$test->id}}">{{$test->name}}</a></li>
                                @endforeach
                            </ul>
                        @else
                            <p class="ml-4 text-danger text-bold">No test in this profile.</p>
                        @endif
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
