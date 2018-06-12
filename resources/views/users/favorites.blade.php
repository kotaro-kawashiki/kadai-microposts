@extends('layouts.app')

@section('content')
    @include('commons.user_icon')
         @if(count($microposts) > 0)
                @include('microposts.microposts', ['microposts' => $microposts])
            @endif
        </div>
    </div>
@endsection