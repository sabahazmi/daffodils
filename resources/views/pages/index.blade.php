@extends('layouts.app')

@section('content')
<div class="container">
    <div class="content">
            <div class="col-md-12">    
                <div class="card">
                  <div class="card-body">
                    <div class="row my-2">
                      <table class="table text-left">
                        @if (count($patients) > 0)
                          @foreach ($patients as $patients)
                          <ul>
                            <h4>{{$patients->name}}</h4>
                          </ul>
                          @endforeach
                        @else 
                          <p>No Patient.</p>
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