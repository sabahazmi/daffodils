@extends('layouts.app')

@section('content')
<div class="container">
    <div class="content">
            <div class="col-md-12">    
                <div class="card">
                    <div class="card-header">
                    <h3>Patients</h4>
                    </div>
                  <div class="card-body">
                    <div class="row my-2">
                      <table class="table text-left">
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

           
                      </tbody>
                    </table>
                    {{-- {{ $patients->links() }} --}}
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection