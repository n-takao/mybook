@extends('layouts.front')
@section('title', '本の紹介の編集')

@section('content')

<div class="conteiner">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>本の紹介の編集</h2>
            <form action="{{ ('Admin\Bookcontroller@update') }}" method="post" enctype="multipart/form-data">
                @if (count($errors) > 0)
                <ul>
                    @foreach($errors->all() as $e)
                    <li>{{$e}}</li>
                    @endforeach
                </ul>
                @endif
                <div class="form-group row">
                    <label class="col-md-2" for="title">著者と本の紹介</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="title" value="{{ $books_form->title }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2" for="body">本の思い出</label>
                    <div class="col-md-10">
                         <textarea class="form-control" name="body" rows="20">{{ $books_form->body }}</textarea>
                    </div>
                </div>
                <div class="forform-proup row">
                    <label class="col-md-2" for="image">画像</label>
                </div>
                    <div class="col-md-10">
                        <input type="file" class="form-control-file" name="image">
                        <div class="form-text text-info">
                            設定中: {{ $books_form->image_path }}
                        </div>
                        <div class="form-check">
                            <lavel class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="renove" value="true">画像を削除
                            </lavel>
                        </div>
                    </div>
                </div>
            　　<div class="form-group row">
            　　  <div class="col-md-10">
            　　      <input type="hidden" name="id" value="{{ $books_form->id }}">
            　　      {{ csrf_field() }}
            　　      <input type="submit" class="btn  btn-primary" value="更新">
            　　  </div>
            　</div>
         </form>  
     </div>
   </div>
 </div>
 @endsection
                    