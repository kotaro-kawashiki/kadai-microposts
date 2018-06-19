@extends('layouts.app')

@section('content')
    @if (Auth::check())
     @if (Auth::user()->id == $user->id)
                      {!! Form::open(['route' => 'microposts.store']) !!}
                          <div class="form-group">
                              {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '2','placeholder' => 'how do you feel?']) !!}
                              {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
                          </div>
                      {!! Form::close() !!}
     @endif
        <div class="row">
            <aside class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            </aside>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                @if (count($microposts) > 0)
                    @include('microposts.microposts', ['microposts' => $microposts])
                @endif
            </div>
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center"><div id="my-element" style="transform: translate(0px) rotate(10deg);">
               <h1>Welcome to the Microposts</h1>
            </div>
               
                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection