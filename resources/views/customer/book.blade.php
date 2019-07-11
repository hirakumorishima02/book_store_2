@extends('layout')
@section('title',$book->title)
@section('body')

<div class="container">
    <!--本の情報と画像-->
    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
        <div class="uk-card-media-left uk-cover-container" style="height:300px;width:200px;">
            <img src="{{$book->photo_path}}" alt="" uk-cover>
        </div>
        <!--本情報-->
        <div>
            <div style="margin-left:50px;">
                <div class="uk-text-large">
                <p>書籍情報</p>
                </div>
                <table class="uk-table uk-table-hover uk-table-divider">
                    <tbody>
                        <tr>
                            <td class="uk-width-small">タイトル</td>
                            <td>{{$book->title}}</td>
                        </tr>
                        <tr>
                            <td class="uk-width-small">金額</td>
                            <td>{{$book->price}}円</td>
                        </tr>
                        <tr>
                            <td class="uk-width-small">出版社</td>
                            <td>{{$book->publisher}}</td>
                        </tr>
                        <tr>
                            <td class="uk-width-small">ISBN</td>
                            <td>{{$book->isbn}}</td>
                        </tr>
                        <tr>
                            <td class="uk-width-small">本の状態</td>
                            <td>{{$status}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--本の情報と画像ここまで-->
<!--応募フォーム-->
<div style="width:700px;margin: 0 auto;">
<form action="/bookToCart" method="post">
{{ csrf_field() }}
    <fieldset class="uk-fieldset">
    <p style="text-align:center;margin-top:10px;" uk-margin>
        <button class="uk-button uk-button-primary uk-button-large" name="cart_item" value="{{$book->id}}">カートに入れる</button>
    </p>
    </fieldset>
</form>
</div>
</div>

@endsection