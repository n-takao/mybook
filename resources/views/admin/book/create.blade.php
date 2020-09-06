<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>reader Book</title>
    </head>
    <body>
        @extends('layouts.front')
        
        @section('title', '本の紹介作成ページ')
        
        @section('content')
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <h2 class="logo">読本の新規紹介作成</h2>
                        <p>あなたにお勧めしたい一冊</p>
                        <form actio="{{ action('Admin\Bookcontroller@create') }}" method="post" enctype="multipart/form-data">
                            @if(count($errors) > 0)
                            <ul>
                                @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                                @endforeach
                            </ul>
                            @endif
                            <div class="form-group row">
                                <label class="col-md-2">本の名前と著者</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-md-2">画像</label>
                                <div class="col-md-10">
                                    <input type="file" class="form-control-file" name="image">
                                </div>
                            </div>
                            <div class="form-group row">
                             <label class="col-md-2">本の思い出</label>
                             　<div class="col-md-10">
                            　　　<textarea class="form-control" name="body" rows="20">{{ old('body') }}</textarea>
                             　</div>
                            </div>   
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="更新"＞
                        </form>
                    </div>
                </div>
            </div>
        </header>
    </body>
</html>
                                
                                    
                                 
                       