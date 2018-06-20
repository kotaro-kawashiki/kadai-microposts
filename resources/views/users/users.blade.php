<script type="text/javascript">
　 $(function () {
	$('[data-toggle="popover"]').popover();
});
</script>

@if (count($users) > 0)
<ul style="list-style: none; display:inline-block;">
@foreach ($users as $user)
    @if($user->id != Auth::user()->id)
        <li style="display:inline-block;">
            <div class="rounded-circle">
                <button  class="btn btn-default" 
                         data-toggle="popover" 
                         title="{{$user->name}}" 
                         data-content="💬:{{$user->microposts()->count()}}    👤:{{$user->followings()->count()}}  👥:{{$user->followers()->count()}}❤:{{$user->favoritings()->count()}}"
                         data-trigger="hover"
                         >
                    <a href="{{route('users.show', ['id' => $user->id]) }}">
                   <img class="img-circle" src="{{ Gravatar::src($user->email, 100) }}" alt="">
                   </a>
                </button>
            </div>
            @include('user_follow.follow_button', ['user' => $user])
        </li>
    @endif
@endforeach

</ul>

{!! $users->render() !!}
@endif
