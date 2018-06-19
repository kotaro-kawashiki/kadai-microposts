@extends('layouts.app')

@section('content')
   @include('commons.user_icon')
            @if (Auth::user()->id == $user->id)
                  {!! Form::open(['route' => 'microposts.store']) !!}
                      <div class="form-group">
                          {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '2','placeholder' => 'how do you feel?']) !!}
                          {!! Form::submit('Post', ['class' => 'btn btn-success btn-block']) !!}
                      </div>
                  {!! Form::close() !!}
            @endif
            @if (count($microposts) > 0)
                @include('microposts.microposts', ['microposts' => $microposts])
            @endif
        </div>
    </div>
@endsection