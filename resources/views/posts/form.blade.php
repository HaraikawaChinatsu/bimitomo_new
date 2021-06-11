{!! Form::open(['route' => 'posts.store', 'files' => true, 'enctype' => 'multipart/form-data']) !!}
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
        {!! Form::file('file',['name' => 'image', 'enctype' => 'multipart/form-data']) !!}
    </div>

    <div class="form-group">
         {{Form::label('塩味:')}}
        @php
        $enmis = ['0', '1', '2', '3', '4', '5'];
        @endphp
    @foreach($enmis as $enmi)
        @php
        $checked = false;
        if ($enmi === 3) {
            $checked = true;
        }
        @endphp
        <div class="custom-control custom-radio custom-control-inline mb-3">
            {!! Form::radio('enmi', $enmi, $checked, ['class' => 'custom-control-input', 'id' => $enmi]) !!}
            {!! Form::label($enmi, $enmi, ['class' => 'custom-control-label']) !!}
        </div>
    @endforeach
    </div>
    
    <div class="form-group">
         {{Form::label('甘味:')}}
        @php
        $amamis = ['0', '1', '2', '3', '4', '5'];
        @endphp
    @foreach($amamis as $amami)
        @php
        $checked = false;
        if ($amami === 3) {
            $checked = true;
        }
        @endphp
        <div class="custom-control custom-radio custom-control-inline mb-3">
            {!! Form::radio('amami', $amami, $checked, ['class' => 'custom-control-input', 'id' => $amami]) !!}
            {!! Form::label($amami, $amami, ['class' => 'custom-control-label']) !!}
        </div>
    @endforeach
    </div>
    
    <div class="form-group">
        {{Form::label('苦味:')}}
        @php
        $nigamis = ['0', '1', '2', '3', '4', '5'];
        @endphp
    @foreach($nigamis as $nigami)
        @php
        $checked = false;
        if ($nigami === 3) {
            $checked = true;
        }
        @endphp
        <div class="custom-control custom-radio custom-control-inline mb-3">
            {!! Form::radio('nigami', $nigami, $checked, ['class' => 'custom-control-input', 'id' => $nigami]) !!}
            {!! Form::label($nigami, $nigami, ['class' => 'custom-control-label']) !!}
        </div>
    @endforeach
    </div>
    
    <div class="form-group">
        {{Form::label('酸味:')}}
        @php
        $sanmis = ['0', '1', '2', '3', '4', '5'];
        @endphp
    @foreach($sanmis as $sanmi)
        @php
        $checked = false;
        if ($sanmi === 3) {
            $checked = true;
        }
        @endphp
        <div class="custom-control custom-radio custom-control-inline mb-3">
            {!! Form::radio('sanmi', $sanmi, $checked, ['class' => 'custom-control-input', 'id' => $sanmi]) !!}
            {!! Form::label($sanmi, $sanmi, ['class' => 'custom-control-label']) !!}
        </div>
    @endforeach
    </div>
     
     <div class="form-group">
        {{Form::label('旨味:')}}
        @php
        $umamis = ['0', '1', '2', '3', '4', '5'];
        @endphp
    @foreach($umamis as $umami)
        @php
        $checked = false;
        if ($umami === 3) {
            $checked = true;
        }
        @endphp
        <div class="custom-control custom-radio custom-control-inline mb-3">
            {!! Form::radio('umami', $umami, $checked, ['class' => 'custom-control-input', 'id' => $umami]) !!}
            {!! Form::label($umami, $umami, ['class' => 'custom-control-label']) !!}
        </div>
    @endforeach
    </div>

        {!! Form::submit('新規投稿', ['class' => 'btn btn-primary btn-block']) !!}

{!! Form::close() !!}