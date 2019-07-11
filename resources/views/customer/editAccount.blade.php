@extends('layout')
@section('title','アカウント編集画面')
@section('body')

<div class="container">
    <div class="uk-card uk-card-default uk-card-body uk-width-1">
        <div class="uk-text-large">
        <p>アカウント情報</p>
        </div>
            <table class="uk-table uk-table-hover uk-table-divider">
            <form action="/updateAccount">
                <tr>
                    <td>お名前</td>
                    <td><input class="uk-input" type="text" name="name" value="森島啓"></td>
                </tr>
                <tr>
                    <td>郵便番号</td>
                    <td><input class="uk-input" type="text" name="zip_code" value="600-0000"></td>
                </tr>
                <tr>
                    <td>住所</td>
                    <td><input class="uk-input" type="text" name="address" value="京都府京都市〇〇〇〇"></td>
                </tr>
                <tr>
                    <td>email</td>
                    <td><input class="uk-input" type="text" name="email" value="ujinchu@gmail.com"></td>
                </tr>
                <tr>
                    <td>電話番号</td>
                    <td><input class="uk-input" type="text" name="tel" value="000-0000-0000"></td>
                </tr>
                    <td>
                        <button class="uk-button uk-button-primary" onclick='return confirm("編集を完了しますか？");'>編集完了</button>
                    </td>
                </tr>
            </form>
        </table>
    </div>
</div>

@endsection