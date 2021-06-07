@extends('layouts.app')

@section('content')
    @if (Auth::check())
        {{ Auth::user()->name }}
    @else
    
    <!--<div class="center jumbotron">-->
    <!--    <div class="text-center">-->
            <div class="main-visual">
                <h2>Welcome to the BIMITOMO</h2>
                <!--!! link_to_route'signup.get', '新規登録', [], ['class' => 'btn btn-border']) !!}-->
            </div>
    <!--    </div>-->
    <!--</div>-->
    @endif
@endsection

