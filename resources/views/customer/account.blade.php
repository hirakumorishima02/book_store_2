@extends('layout')
@section('title','アカウント情報')
@section('body')

<div class="container">
    <div class="uk-card uk-card-default uk-card-body uk-width-1">
        <div class="uk-text-large">
        <p>アカウント情報</p>
        </div>
            @if(isset($userInfo)||isset($user))
            <table class="uk-table uk-table-hover uk-table-divider">
                <tr>
                    <td>お名前</td>
                    <td>{{$user->name}}</td>
                </tr>
                <tr>
                    <td>郵便番号</td>
                    <td>{{$userInfo->zip_code}}</td>
                </tr>
                <tr>
                    <td>住所</td>
                    <td>{{$userInfo->address}}</td>
                </tr>
                <tr>
                    <td>email</td>
                    <td>{{$user->email}}</td>
                </tr>
                <tr>
                    <td>電話番号</td>
                    <td>{{$userInfo->tel}}</td>
                </tr>
                    <td>
                        <a href="/editAccount"><button class="uk-button uk-button-primary">情報の編集</button></a>
                    </td>
                </tr>
        </table>
        @else
        まだアカウント情報がありません。<br>
        <a href="/editAccount"><button class="uk-button uk-button-primary">情報の登録</button></a>
        @endif
    </div>
</div>
@endsection