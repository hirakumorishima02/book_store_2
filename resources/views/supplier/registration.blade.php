<!DOCTYPE html>
<html>
<head>
    <title>商品登録</title>
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
@if($user_id == 1 || $user_id == 2)
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
<h2>商品登録</h2>
@if ($errors->any())
    <div>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    </div>
@endif
<table class="uk-table uk-table-divider uk-table-striped">
    <thead>
        <tr>
            <td>商品名</td>
            <td>著者名</td>
            <td>出版社</td>
            <td>ISBN</td>
            <td>価格</td>
            <td>画像パス</td>
            <td>本の状態</td>
            <td>本のカテゴリー</td>
        </tr>
    </thead>
    <tbody>
<form action="/registrateNewBook" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <tr>
            <td><input type="text" name="title"></td>
            <td><input type="text" name="author"></td>
            <td><input type="text" name="publisher"></td>
            <td><input type="text" name="isbn"></td>
            <td><input type="text" name="price"></td>
            <td><input type="file" name="photo_path"></td>
            <td>
                <select name="status">
                    <option value="1">新品同様</option>
                    <option value="2">古本</option>
                    <option value="3">汚い</option>
                    <option></option>
                </select>
            </td>
            <td>
                <select name="category_id">
                    <option value="1">小説</option>
                    <option value="2">ノンフィクション</option>
                    <option value="3">ビジネス</option>
                    <option value="4">漫画</option>
                    <option value="5">その他</option>
                </select>
            </td>
        </tr>
        <tr><td><input type="submit" value="登録"></td></tr>
</form>
</tbody>
</table>
</body>
@else
管理者用画面です。
<a href="/user">戻る</a>
@endif
</html>
