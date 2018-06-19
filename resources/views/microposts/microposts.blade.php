<ul class="media-list">
@foreach ($microposts as $micropost)
    <?php $user = $micropost->user; ?>
    <li class="media">
        <div class="panel panel-default">
            <div class="panel-heading well well-sm" style="margin-bottom:0;">
                {!! link_to_route('users.show', $user->name, ['id' => $user->id]) !!} <span class="text-muted">posted at {{ $micropost->created_at }}</span>
            </div>
            <div class="panel-body">
                <div class="media-left">
                    <img class="rounded-circle" src="{{ Gravatar::src($user->email, 50) }}" alt="">
                </div>
                <div class="media-body">
                    <div>
                        <p>{!! nl2br(e($micropost->content)) !!}</p>
                    </div>
                </div>
                <div class="media-right">
                    @include('user_favorite.favorite_button', ['user' => $user])
                    <div>
                        @if (Auth::user()->id == $micropost->user_id)
                            {!! Form::open(['route' => ['microposts.destroy', $micropost->id], 'method' => 'delete']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-warning btn-xs']) !!}
                            {!! Form::close() !!}
                        @endif
                      
                    </div>
                </div>
                
            </div>
        </div>
    </li>
@endforeach
</ul>
{!! $microposts->render() !!}