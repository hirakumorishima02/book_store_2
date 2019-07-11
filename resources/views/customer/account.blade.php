@extends('layout')
@section('title','アカウント情報')
@section('body')

<div class="container">
    <div class="uk-card uk-card-default uk-card-body uk-width-1">
        <div class="uk-text-large">
        <p>アカウント情報</p>
        </div>
            <table class="uk-table uk-table-hover uk-table-divider">
                <tr>
                    <td>お名前</td>
                    <td>森島啓</td>
                </tr>
                <tr>
                    <td>郵便番号</td>
                    <td>600-0000</td>
                </tr>
                <tr>
                    <td>住所</td>
                    <td>京都府京都市〇〇〇〇</td>
                </tr>
                <tr>
                    <td>email</td>
                    <td>ujinchu@gmail.com</td>
                </tr>
                <tr>
                    <td>電話番号</td>
                    <td>000-0000-0000</td>
                </tr>
                    <td>
                    <form action="/editAccount">
                        <button class="uk-button uk-button-primary">情報の編集</button>
                    </form>
                    </td>
                </tr>
        </table>
    </div>
</div>
@endsection