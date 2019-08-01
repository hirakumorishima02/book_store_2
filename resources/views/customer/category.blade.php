@extends('layout')
@section('title', $category->category .'ジャンルの書籍')
@section('body')

<div class="container">
    <section class="follow-item">
        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
            <div class="uk-card-media-left uk-cover-container">
                <img src="/images/novel.jpg" alt="" uk-cover>
                <canvas width="300" height="200"></canvas>
            </div>
            <div id="follow_item">
                <div class="uk-card-body">
                    <h1 class="uk-card-title">{{$category->category}}</h1>
                </div>
            </div>
        </div>
<hr class="uk-divider-icon">
        @if(isset($bookList[0]))
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
        @foreach($bookList as $val)
        <tr>
            <td><img src="{{$val->photo_path}}" width="50" height="50"></td>
            <td>{{$val->title}}</td>
            <td>{{$val->author}}</td>
            <td>{{$val->price}}円</td>
            <td><a href="/book/{{$val->id}}">詳細</a></td>
        </tr>
        @endforeach
        @else
        <p>まだ書籍はありません。</p>
        @endif
    </tbody>
</table>
</div>


@endsection