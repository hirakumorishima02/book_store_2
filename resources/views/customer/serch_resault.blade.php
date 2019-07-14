@extends('layout')
@section('title',$keyword.'の検索結果')
@section('body')

<h4>{{ $keyword }}の検索結果</h4>

    <table class="uk-table">
    <thead>
        <tr>
            <td></td>
            <td>タイトル</td>
            <td>著者</td>
            <td>価格</td>
            <td></td>
        </tr>
    </thead>
    <tbody>
        @foreach($books as $val)
        <tr>
            <td><img src="{{$val->photo_path}}" width="50" height="50"></td>
            <td>{{$val->title}}</td>
            <td>{{$val->author}}</td>
            <td>{{$val->price}}円</td>
            <td><a href="/book/{{$val->id}}">詳細</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection