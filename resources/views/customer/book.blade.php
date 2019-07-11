@extends('layout')
@section('title','書籍情報')
@section('body')

<div class="container">
    <!--本の情報と画像-->
    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
        <div class="uk-card-media-left uk-cover-container" style="height:300px;width:200px;">
            <img src="/images/bussiness.jpg" alt="" uk-cover>
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
                            <td>〇〇〇〇〇〇〇〇〇〇</td>
                        </tr>
                        <tr>
                            <td class="uk-width-small">金額</td>
                            <td>120円</td>
                        </tr>
                        <tr>
                            <td class="uk-width-small">出版社</td>
                            <td>本の友の会</td>
                        </tr>
                        <tr>
                            <td class="uk-width-small">ISBN</td>
                            <td>978-4-7710-1067-3</td>
                        </tr>
                        <tr>
                            <td class="uk-width-small">本の状態</td>
                            <td>非常に良い</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--本の情報と画像ここまで-->
<!--応募フォーム-->
<div style="width:700px;margin: 0 auto;">
<form action="/confirmSubscribe">
    <fieldset class="uk-fieldset">
    <p style="text-align:center;margin-top:10px;" uk-margin>
        <button class="uk-button uk-button-primary uk-button-large">カートに入れる</button>
    </p>
    </fieldset>
</form>
</div>
</div>

@endsection