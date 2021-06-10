@extends('layouts.app')
@section('content')
    @if (Auth::check())
<h2>ようこそ　{{ Auth::user()->name }}さん！</h2>
        <div class="main-visual2">
                <h3>調味料を使った「味変」や「ちょい足し」で<br>
                    いつもの食卓をよりおいしく、楽しく、美しく！<br>
                    地域や国に根付いたユニークな調味料を投稿し<br>
                    新しい味を発見しましょう。</h3>
        </div>
        
    @else
    	

            <div class="main-visual">
                <h2>Welcome to the BIMITOMO</h2>
                <!--!! link_to_route'signup.get', '新規登録', [], ['class' => 'btn btn-border']) !!}-->
            </div>

    @endif
@endsection

