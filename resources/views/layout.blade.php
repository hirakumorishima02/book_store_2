<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
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
<header>
    <nav class="uk-navbar-container" uk-navbar="mode: click">
        <div class="uk-navbar-left">
            <ul class="uk-navbar-nav">
                <li><a href="/user">古本屋さん</a></li>
            </ul>
        </div>
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
                @if($user_id == 2)
                <li><a href="/orders">注文一覧</a></li>
                <li><a href="/registration">商品登録</a></li>
                @endif
            </ul>
        </div>
            <div class="uk-margin">
                <form class="uk-search uk-search-default" action="serch" method="post">
                    {{ csrf_field() }}
                    <span uk-search-icon></span>
                    <input class="uk-search-input" type="search" placeholder="本の検索" name="keyword">
                </form>
            </div>
    </nav>
</header>
<hr class="uk-divider-icon">

@yield('body')

<hr class="uk-divider-icon">
<footer style="height:300px;" class="uk-background-muted">
<div class="uk-position-relative">
    <div class="uk-position-top">
        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
            <div class="uk-navbar-left">
                <ul class="uk-navbar-nav">
                    <li class="uk-active"><a href="#top">TOP</a></li>
                    <li>
                        <a href="#">menu</a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="/account">アカウント情報</a></li>
                                <li><a href="/cart">カート</a></li>
                                <li><a href="/logout">ログアウト</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#">開発者の他アプリ</a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="#">請求書&タスク管理</a></li>
                                <li><a href="#">Share House Australia</a></li>
                                <li><a href="#">健康管理</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>
</footer>
</div>
</body>
</html>