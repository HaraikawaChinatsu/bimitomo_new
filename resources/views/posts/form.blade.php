{!! Form::open(['route' => 'posts.store', 'files' => true]) !!}
    <div class="form-group">
        {{Form::label('title','調味料名:')}}
        {!! Form::text('title', null) !!}
    </div>
    <div class="form-group">
        {{Form::label('content','紹介文:')}}
        {!! Form::textarea('content', null, ['class' => 'form-control', 'rows' => '2']) !!}
    </div>
    <div class="form-group"> 
        {{Form::label('image','イメージ画像:')}}
        {!! Form::file('file') !!}
    </div>
    <div class="form-group">
        {{Form::label('umami','旨味:')}}
        {{ Form::radio('umami', '0', false, ['class' => 'radio-button__input']) }} 0
         {{ Form::radio('umami', '1', true, ['class' => 'radio-button__input']) }} 1
         {{ Form::radio('umami', '2', false, ['class' => 'radio-button__input']) }} 2
         {{ Form::radio('umami', '3', false, ['class' => 'radio-button__input']) }} 3
         {{ Form::radio('umami', '4', false, ['class' => 'radio-button__input']) }} 4
         {{ Form::radio('umami', '5', false, ['class' => 'radio-button__input']) }} 5
    </div>
    <div class="form-group">
        {{Form::label('enmi','塩味:')}}
        {{ Form::radio('enmi', '0', false, ['class' => 'radio-button__input']) }} 0
         {{ Form::radio('enmi', '1', true, ['class' => 'radio-button__input']) }} 1
         {{ Form::radio('enmi', '2', false, ['class' => 'radio-button__input']) }} 2
         {{ Form::radio('enmi', '3', false, ['class' => 'radio-button__input']) }} 3
         {{ Form::radio('enmi', '4', false, ['class' => 'radio-button__input']) }} 4
         {{ Form::radio('enmi', '5', false, ['class' => 'radio-button__input']) }} 5
    </div>
    
    <div class="form-group">
        {{Form::label('amami','甘味:')}}
        {{ Form::radio('amami', '0', false, ['class' => 'radio-button__input']) }} 0
         {{ Form::radio('amami', '1', true, ['class' => 'radio-button__input']) }} 1
         {{ Form::radio('amami', '2', false, ['class' => 'radio-button__input']) }} 2
         {{ Form::radio('amami', '3', false, ['class' => 'radio-button__input']) }} 3
         {{ Form::radio('amami', '4', false, ['class' => 'radio-button__input']) }} 4
         {{ Form::radio('amami', '5', false, ['class' => 'radio-button__input']) }} 5
    </div>
    
    <div class="form-group">
        {{Form::label('nigami','苦味:')}}
        {{ Form::radio('nigami', '0', false, ['class' => 'radio-button__input']) }} 0
         {{ Form::radio('nigami', '1', true, ['class' => 'radio-button__input']) }} 1
         {{ Form::radio('nigami', '2', false, ['class' => 'radio-button__input']) }} 2
         {{ Form::radio('nigami', '3', false, ['class' => 'radio-button__input']) }} 3
         {{ Form::radio('nigami', '4', false, ['class' => 'radio-button__input']) }} 4
         {{ Form::radio('nigami', '5', false, ['class' => 'radio-button__input']) }} 5
    </div>
    
    <div class="form-group">
        {{Form::label('sanmi','酸味:')}}
        {{ Form::radio('sanmi', '0', false, ['class' => 'radio-button__input']) }} 0
         {{ Form::radio('sanmi', '1', true, ['class' => 'radio-button__input']) }} 1
         {{ Form::radio('sanmi', '2', false, ['class' => 'radio-button__input']) }} 2
         {{ Form::radio('sanmi', '3', false, ['class' => 'radio-button__input']) }} 3
         {{ Form::radio('sanmi', '4', false, ['class' => 'radio-button__input']) }} 4
         {{ Form::radio('sanmi', '5', false, ['class' => 'radio-button__input']) }} 5
    </div>

        {!! Form::submit('新規投稿', ['class' => 'btn btn-primary btn-block']) !!}

{!! Form::close() !!}