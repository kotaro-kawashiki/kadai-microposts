@extends('layouts.app')

@section('content')
    @include('commons.user_icon')
    {!! Form::open(['route' => 'microposts.store']) !!}
                      <div class="form-group">
                          {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '2']) !!}
                          {!! Form::submit('Post', ['class' => 'btn btn-success btn-block']) !!}
                      </div>
                  {!! Form::close() !!}
            @include('users.users', ['users' => $users])
        </div>
    </div>
@endsection