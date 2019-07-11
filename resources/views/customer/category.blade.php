@extends('layout')
@section('title','ユーザートップページ')
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
                    <h3 class="uk-card-title">小説</h3>
                    <p>依頼文です。 依頼文です。 依頼文です。 依頼文です。 依頼文です。 依頼文です。 </p>
                </div>
            </div>
        </div>
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
        <tr>
            <td><img src="/images/bussiness.jpg" width="50" height="50"></td>
            <td>SHOE DOG</td>
            <td>〇〇　〇〇</td>
            <td>120円</td>
            <td><a href="/book">詳細</a></td>
        </tr>
    </tbody>
</table>
</div>

<hr class="uk-divider-icon">
@endsection