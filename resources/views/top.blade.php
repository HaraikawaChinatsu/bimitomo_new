@extends('layouts.app')
@section('content')
    @if (Auth::check())
    
        ようこそ　{{ Auth::user()->name }}さん！
        
    @else
    	

            <div class="main-visual">
                <h2>Welcome to the BIMITOMO</h2>
                <!--!! link_to_route'signup.get', '新規登録', [], ['class' => 'btn btn-border']) !!}-->
            </div>

    @endif
@endsection

