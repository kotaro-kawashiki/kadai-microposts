@extends('layouts.app')

@section('content')
    @include('commons.user_icon')
            @include('users.users', ['users' => $users])
        </div>
    </div>
@endsection
