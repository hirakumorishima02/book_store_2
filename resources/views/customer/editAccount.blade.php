@extends('layout')
@section('title','アカウント編集画面')
@section('body')

<div class="container">
    <div class="uk-card uk-card-default uk-card-body uk-width-1">
        <div class="uk-text-large">
        <p>アカウント情報</p>
        </div>
            <table class="uk-table uk-table-hover uk-table-divider">
                @if(isset($userInfo)&&isset($user))
                <form action="/updateAccount" method="post">
                {{ csrf_field() }}
                <tr>
                    <td>お名前</td>
                    <td><input class="uk-input" type="text" name="name" value="{{$user->name}}"></td>
                </tr>
                <tr>
                    <td>郵便番号</td>
                    <td><input class="uk-input" type="text" name="zip_code" value="{{$userInfo->zip_code}}"></td>
                </tr>
                <tr>
                    <td>住所</td>
                    <td><input class="uk-input" type="text" name="address" value="{{$userInfo->address}}"></td>
                </tr>
                <tr>
                    <td>email</td>
                    <td><input class="uk-input" type="text" name="email" value="{{$user->email}}"></td>
                </tr>
                <tr>
                    <td>電話番号</td>
                    <td><input class="uk-input" type="text" name="tel" value="{{$userInfo->tel}}"></td>
                </tr>
                <tr>
                    <td>
                        <button class="uk-button uk-button-primary" onclick='return confirm("編集を完了しますか？");'>編集完了</button>
                    </td>
                </tr>
                @else
                <form action="/addAccount" method="post">
                {{ csrf_field() }}
                <tr>
                    <td>お名前</td>
                    <td><input class="uk-input" type="text" name="name" value="{{$user->name}}"></td>
                </tr>
                <tr>
                    <td>郵便番号</td>
                    <td><input class="uk-input" type="text" name="zip_code"></td>
                </tr>
                <tr>
                    <td>住所</td>
                    <td><input class="uk-input" type="text" name="address"></td>
                </tr>
                <tr>
                    <td>email</td>
                    <td><input class="uk-input" type="text" name="email" value="{{$user->email}}"></td>
                </tr>
                <tr>
                    <td>電話番号</td>
                    <td><input class="uk-input" type="text" name="tel"></td>
                </tr>
                <tr>
                    <td>
                        <button class="uk-button uk-button-primary" onclick='return confirm("編集を完了しますか？");'>編集完了</button>
                    </td>
                </tr>
                @endif
            </form>
        </table>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</div>

@endsection