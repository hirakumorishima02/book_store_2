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
<nav class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-left">
        <ul class="uk-navbar-nav">
            <li><a href="/orders">注文一覧</a></li>
            <li><a href="/registration">商品登録</a></li>
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
        <form action="updateOrderStates">
        @foreach($orderList as $order)
        <tr>
            <td>{{$order->book->title}}</td>
            <td>田中太郎</td>
            <td>600-0000</td>
            <td>京都府京都市〇〇〇〇</td>
            <td>
                    <select name="status">
                        <option value="1">未発送</option>
                        <option value="2">発送済み</option>
                        <option value="3">キャンセル</option>
                        <option></option>
                    </select>
            </td>
        </tr>
        <input type="submit" value="状態の更新">
        </form>
    </tbody>
</table>
</body>
</html>