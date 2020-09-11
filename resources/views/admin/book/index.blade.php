@extends('layouts.front')
@section('title', '紹介した本の一覧')

@section('content')
    <div class="conteiner">
        <div class="col-md-8 mx-auto">
            <h2>BOOK一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\Bookcontroller@add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\Bookcontroller@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">著者と本の紹介</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                            
                        </div>
                    </div>
                </form>
            </div>
            
        </div>
        <div class="row">
            <div class="list-books col-md-11 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="20%">ID</th>
                                <th width="20%">著者と本の紹介</th>
                                <th width="50%">本の思い出</th>
                                <th width="10%">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $books)
                            <tr>
                                <th>{{ $books->id }}</th>
                                <td>{{ \Str::limit($books->title, 100) }}</td>
                                <td>{{ \Str::limit($books->body, 30000) }}</td>
                                <td>
                                    <div>
                                        <a href="{{ action('Admin\Bookcontroller@edit', ['id' =>$books->id]) }}">編集</a>
                                    </div>
                                    <div>
                                        <a href="{{ action('Admin\Bookcontroller@delete', ['id' =>$books->id]) }}">削除</a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
        
