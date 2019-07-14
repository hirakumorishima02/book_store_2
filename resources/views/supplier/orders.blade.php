<!DOCTYPE html>
<html>
<head>
    <title>注文一覧</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.6/css/uikit.min.css" />
    <!-- UIkit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.6/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.6/js/uikit-icons.min.js"></script>
    <!--jQuery-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
</head>
<body>
@if($user_id == 1)
<nav class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-right">
        <ul class="uk-navbar-nav">
            <li>
                <a href="#">本のカテゴリー</a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li><a href="/category/1">小説</a></li>
                        <li><a href="/category/2">ノンフィクション</a></li>
                        <li><a href="/category/3">ビジネス</a></li>
                        <li><a href="/category/4">漫画</a></li>
                        <li><a href="/category/5">その他</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="/account">アカウント情報</a></li>
            <li><a href="/cart">カート</a></li>
            <li><a href="/logout">ログアウト</a></li>
            @if($user_id == 1)
            <li><a href="/orders">注文一覧</a></li>
            <li><a href="/registration">商品登録</a></li>
            @endif
        </ul>
    </div>
</nav>
    <h2>注文一覧</h2>
    <table class="uk-table uk-table-divider uk-table-striped">
        <thead>
            <tr>
                <td>商品名</td>
                <td>顧客名</td>
                <td>郵便番号</td>
                <td>住所</td>
                <td>状態</td>
            </tr>
        </thead>
        <tbody>
            <form action="/updateOrderStatus" method="post">
            {{csrf_field()}}
            <?php $num = 0 ?>
            @foreach($orders as $order)
            <tr>
                <!--Modelのリレーション-->
                <td>{{$order->orders->title}}</td>
                <td>{{$order->ordersToUser->name}}</td>
                <td>{{$order->ordersToUserInfo->zip_code}}</td>
                <td>{{$order->ordersToUserInfo->address}}</td>
                <td>
                    <select name="status[]" onchange="submit(this.form)">
                        @if($order->status == 1)
                        <option value="1" selected>未発送</option>
                        <option value="2">発送済み</option>
                        <option value="3">キャンセル</option>
                        @elseif($order->status == 2)
                        <option value="1">未発送</option>
                        <option value="2" selected>発送済み</option>
                        <option value="3">キャンセル</option>
                        @else
                        <option value="1">未発送</option>
                        <option value="2">発送済み</option>
                        <option value="3" selected>キャンセル</option>
                        @endif
                    </select>
                </td>
            </tr>
            <input type="hidden" name="book_id[]" value="{{$order->id}}">
            <?php $num++ ?>
            @endforeach
            <input type="hidden" value="{{$num}}" name="num">
            </form>
        </tbody>
    </table>
@else
管理者用画面です。
<a href="/user">戻る</a>
@endif
</body>
</html>