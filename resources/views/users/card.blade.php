<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ $user->name }}</h3>
    </div>
    <div class="card-body">
        {{-- ユーザのメールアドレスをもとにGravatarを取得して表示 --}}
        <img class="rounded img-fluid" src="{{ Gravatar::get($user->email, ['size' => 500]) }}" alt="">
        
        {{-- @if($user->image == null)
        <img src="/storage/noimage.png" >
        @else
        <img src="{{$user->image}}" >
        @endif --}}
    </div>
</div>
{{-- フォロー／アンフォローボタン --}}
@include('user_follow.follow_button')