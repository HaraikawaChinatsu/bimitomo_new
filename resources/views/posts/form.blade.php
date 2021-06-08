{!! Form::open(['route' => 'posts.store']) !!}
    <div class="form-group">
        {{Form::label('title','調味料名:')}}
        {!! Form::text('title', null) !!}
    </div>
    <div class="form-group">
        {{Form::label('content','紹介文:')}}
        {!! Form::textarea('content', null, ['class' => 'form-control', 'rows' => '2']) !!}
    </div>
    <div class="form-group">
        {{Form::label('image','画像:')}}
        {{Form::file('file')}}
        <!--!! Form::image'image', null) !!}-->
    </div>
    <p>資料（任意）</p>
                   <input class="" name="image_file" type="file" value="{{ old('image_file') }}"><br>
                   <br>
    
    
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
    
        <!--!! Form::radio'', 'value', true); !!}-->
        <!--!! Form::radio'enmi','塩味', null, ['0', '1', '2', '3', '4', '5']) !!}<br>-->
        <!--<label class="radio-button">-->
            <!--{ Form::radio'enmi', '0', old'enmi')== '0' ? true: $post->enmi == '0'))? true:false, ['class' => 'radio-button__input']) }}-->
        <!--    { Form::radio'enmi', '0', old'enmi')== '0' ? true: $post->enmi == '0'))? true:false, ['class' => 'radio-button__input']) }}-->
        <!--    <span class="radio-button__icon">0</span>-->
        <!--</label>-->
        <!--<label class="radio-button">-->
        <!--    <span class="radio-button__icon">1</span>-->
        <!--</label>-->
        <!--<label class="radio-button">-->
        <!--    <span class="radio-button__icon">2</span>-->
        <!--</label>-->
        
        

<!--<div> -->
<!--   <label for="radio01" class="col-md-4 col-form-label text-md-right">塩味</label>-->
<!--   <div class="col-md-6">-->
<!--      <div class="form-check form-check-inline">-->
<!--         <input class="form-check-input" type="radio" id="inlineRadio00" name="radioGrp01" value="0">-->
<!--         <label class="form-check-label" for="inlineRadio01">0</label>-->
<!--      </div>-->
<!--      <div class="form-check form-check-inline">-->
<!--         <input class="form-check-input" type="radio" id="inlineRadio01"  name="radioGrp01" value="1" checked="checked">-->
<!--         <label class="form-check-label" for="inlineRadio02">1</label>-->
<!--      </div>-->
<!--      <div class="form-check form-check-inline">-->
<!--         <input class="form-check-input" type="radio" id="inlineRadio02"  name="radioGrp01" value="2">-->
<!--         <label class="form-check-label" for="inlineRadio03">2</label>-->
<!--      </div>-->
      
<!--    　<div class="form-check form-check-inline">-->
<!--         <input class="form-check-input" type="radio" id="inlineRadio03"  name="radioGrp01" value="3">-->
<!--         <label class="form-check-label" for="inlineRadio03">3</label>-->
<!--      </div>-->
<!--    　<div class="form-check form-check-inline">-->
<!--         <input class="form-check-input" type="radio" id="inlineRadio04"  name="radioGrp01" value="4">-->
<!--         <label class="form-check-label" for="inlineRadio03">4</label>-->
<!--      </div>-->
<!--    　<div class="form-check form-check-inline">-->
<!--         <input class="form-check-input" type="radio" id="inlineRadio05"  name="radioGrp01" value="5">-->
<!--         <label class="form-check-label" for="inlineRadio03">5</label>-->
<!--      </div>-->
<!--   </div>-->
<!--</div>-->


        {!! Form::submit('新規投稿', ['class' => 'btn btn-primary btn-block']) !!}

<!--<div class="form-group row">-->
<!--   <label for="radioGrp02" class="col-md-4 col-form-label text-md-right">好み２</label>-->
<!--   <div class="col-md-6">-->
<!--      foreach$rg02Datas as $r2key => $r2val)-->
<!--      <div class="form-check">-->
<!--         <input class="form-check-input" type="radio" id="radioGrp02" name="radioGrp02" value="{$r2key}}"-->
<!--            ifemptyold)) and $r2key == $rg02Checked) checked="checked"-->
<!--            elseif$r2key == old'radioGrp02'))) checked="checked"-->
<!--            endif-->
<!--         >-->
<!--         <label class="form-check-label" for="{$r2key}}">{$r2val}}</label>-->
<!--      </div>-->
<!--      endforeach-->
<!--   </div>-->
<!--</div>-->

{!! Form::close() !!}