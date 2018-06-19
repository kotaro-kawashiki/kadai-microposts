@if (count($users) > 0)
<ul class="media-list">
@foreach ($users as $user)
    <li class="media">
        <div class="media-left rounded-circle">
            <a class="btn btn-lg" data-toggle="modal" data-target="#sampleModal">
                <img class="img-circle" src="{{ Gravatar::src($user->email, 50) }}" alt="">
            </a>
                <!-- モーダル・ダイアログ -->
                <div class="modal fade" id="sampleModal" tabindex="-1">
                	<div class="modal-dialog">
                		<div class="modal-content">
                			<div class="modal-header">
                				<button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                				<h4 class="modal-title">{{ $user->name }}</h4>
                			</div>
                			<div class="modal-body">
                			    <button class="btn btn-default btn-block" value="View profile">{!! link_to_route('users.show', 'View profile',  ['id' => $user->id ,'role' => 'button','class' => 'btn btn-default']) !!}</button>
                				@include('user_follow.follow_button', ['user' => $user])
                			</div>
                			<div class="modal-footer">
                			</div>
                			
                		</div>
                	</div>
                </div>
        </div>
        <div class="media-body">
            <div>
                
            </div>
            
        </div>
    </li>
@endforeach
</ul>
{!! $users->render() !!}
@endif
