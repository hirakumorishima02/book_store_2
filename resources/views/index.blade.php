<!DOCTYPE html>
<html>
<head>
    <title>トップページ</title>
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
                <li><a href="user.html">古本屋さん</a></li>
            </ul>
        </div>
        <div class="uk-navbar-right">
            <ul class="uk-navbar-nav">
                <li>
                    <a href="#">本のカテゴリー</a>
                    <div class="uk-navbar-dropdown">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li><a href="#">小説</a></li>
                            <li><a href="#">ノンフィクション</a></li>
                            <li><a href="#">ビジネス</a></li>
                            <li><a href="#">漫画</a></li>
                            <li><a href="#">その他</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="{{ url('/register') }}">新規会員登録</a></li>
                <li><a href="{{ url('/login') }}">ログイン</a></li>
            </ul>
        </div>
            <div class="uk-margin">
                <form class="uk-search uk-search-default">
                    <span uk-search-icon></span>
                    <input class="uk-search-input" type="search" placeholder="本の検索">
                </form>
            </div>
    </nav>
</header>
<div class="container">
    <section class="new-item uk-background-muted" style="padding-bottom:100px;">
    <div class="uk-card uk-card-default uk-card-body" style="z-index: 980;text-align:center;" uk-sticky="bottom: #offset"><h3>新着本のご案内</h3></div>
    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow>

    <ul class="uk-slideshow-items" style="height:1000px;">
        <li>
    <div class="uk-child-width-expand@s uk-text-center本のタイトル" uk-grid="parallax: 150">
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top uk-height-small"><img src="/images/light.jpg" alt=""></div>
            <a href="item.html">
                <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">本のタイトル</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 100x;">
                        価格　　120円<br>
                        著書　　田中太郎<br>
                        出版社　本の友の会<br>
                        ISBN　　978-4-7710-1067-3<br>
                        </p>
                </div>
            </a>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top uk-height-small"><img src="/images/light.jpg" alt=""></div>
            <a href="item.html">
                  <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">本のタイトル</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 100x;">
                        価格　　120円<br>
                        著書　　田中太郎<br>
                        出版社　本の友の会<br>
                        ISBN　　978-4-7710-1067-3<br>
                        </p>
                </div>
            </a>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top uk-height-small"><img src="/images/light.jpg" alt=""></div>
            <a href="item.html">
                  <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">本のタイトル</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 100x;">
                        価格　　120円<br>
                        著書　　田中太郎<br>
                        出版社　本の友の会<br>
                        ISBN　　978-4-7710-1067-3<br>
                        </p>
                </div>
            </a>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top uk-height-small"><img src="/images/light.jpg" alt=""></div>
            <a href="item.html">
                  <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">本のタイトル</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 100x;">
                        価格　　120円<br>
                        著書　　田中太郎<br>
                        出版社　本の友の会<br>
                        ISBN　　978-4-7710-1067-3<br>
                        </p>
                </div>
            </a>
        </div>
    </div>
    </div>
    <div class="uk-child-width-expand@s uk-text-center" uk-grid="parallax: 150">
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top uk-height-small"><img src="/images/light.jpg" alt=""></div>
            <a href="item.html">
                <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">本のタイトル</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 70px;">依頼内容の説明です。　依頼内容の説明です。　依頼内容の説明です。　依頼内容の説明です。</p>
                </div>
            </a>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top uk-height-small"><img src="/images/light.jpg" alt=""></div>
            <a href="item.html">
                  <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">本のタイトル</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 100x;">
                        価格　　120円<br>
                        著書　　田中太郎<br>
                        出版社　本の友の会<br>
                        ISBN　　978-4-7710-1067-3<br>
                        </p>
                </div>
            </a>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top uk-height-small"><img src="/images/light.jpg" alt=""></div>
            <a href="item.html">
                  <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">本のタイトル</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 100x;">
                        価格　　120円<br>
                        著書　　田中太郎<br>
                        出版社　本の友の会<br>
                        ISBN　　978-4-7710-1067-3<br>
                        </p>
                </div>
            </a>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top uk-height-small"><img src="/images/light.jpg" alt=""></div>
            <a href="item.html">
                  <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">本のタイトル</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 100x;">
                        価格　　120円<br>
                        著書　　田中太郎<br>
                        出版社　本の友の会<br>
                        ISBN　　978-4-7710-1067-3<br>
                        </p>
                </div>
            </a>
        </div>
    </div>
    </div>
        </li>
        
        
        <li>
               <div class="uk-child-width-expand@s uk-text-center本のタイトル" uk-grid="parallax: 150">
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top uk-height-small"><img src="/images/light.jpg" alt=""></div>
            <a href="item.html">
                <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">本のタイトル</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 70px;">依頼内容の説明です。　依頼内容の説明です。　依頼内容の説明です。　依頼内容の説明です。</p>
                </div>
            </a>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top uk-height-small"><img src="/images/light.jpg" alt=""></div>
            <a href="item.html">
                  <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">本のタイトル</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 100x;">
                        価格　　120円<br>
                        著書　　田中太郎<br>
                        出版社　本の友の会<br>
                        ISBN　　978-4-7710-1067-3<br>
                        </p>
                </div>
            </a>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top uk-height-small"><img src="/images/light.jpg" alt=""></div>
            <a href="item.html">
                  <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">本のタイトル</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 100x;">
                        価格　　120円<br>
                        著書　　田中太郎<br>
                        出版社　本の友の会<br>
                        ISBN　　978-4-7710-1067-3<br>
                        </p>
                </div>
            </a>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top uk-height-small"><img src="/images/light.jpg" alt=""></div>
            <a href="item.html">
                  <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">本のタイトル</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 100x;">
                        価格　　120円<br>
                        著書　　田中太郎<br>
                        出版社　本の友の会<br>
                        ISBN　　978-4-7710-1067-3<br>
                        </p>
                </div>
            </a>
        </div>
    </div>
    </div>
    <div class="uk-child-width-expand@s uk-text-center" uk-grid="parallax: 150">
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top uk-height-small"><img src="/images/light.jpg" alt=""></div>
            <a href="item.html">
                <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">本のタイトル</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 70px;">依頼内容の説明です。　依頼内容の説明です。　依頼内容の説明です。　依頼内容の説明です。</p>
                </div>
            </a>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top uk-height-small"><img src="/images/light.jpg" alt=""></div>
            <a href="item.html">
                  <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">本のタイトル</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 100x;">
                        価格　　120円<br>
                        著書　　田中太郎<br>
                        出版社　本の友の会<br>
                        ISBN　　978-4-7710-1067-3<br>
                        </p>
                </div>
            </a>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top uk-height-small"><img src="/images/light.jpg" alt=""></div>
            <a href="item.html">
                  <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">本のタイトル</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 100x;">
                        価格　　120円<br>
                        著書　　田中太郎<br>
                        出版社　本の友の会<br>
                        ISBN　　978-4-7710-1067-3<br>
                        </p>
                </div>
            </a>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top uk-height-small"><img src="/images/light.jpg" alt=""></div>
            <a href="item.html">
                  <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">本のタイトル</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 100x;">
                        価格　　120円<br>
                        著書　　田中太郎<br>
                        出版社　本の友の会<br>
                        ISBN　　978-4-7710-1067-3<br>
                        </p>
                </div>
            </a>
        </div>
    </div>
    </div>
        </li>
        
        
        <li>
               <div class="uk-child-width-expand@s uk-text-center本のタイトル" uk-grid="parallax: 150">
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top uk-height-small"><img src="/images/light.jpg" alt=""></div>
            <a href="item.html">
                <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">本のタイトル</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 70px;">依頼内容の説明です。　依頼内容の説明です。　依頼内容の説明です。　依頼内容の説明です。</p>
                </div>
            </a>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top uk-height-small"><img src="/images/light.jpg" alt=""></div>
            <a href="item.html">
                  <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">本のタイトル</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 100x;">
                        価格　　120円<br>
                        著書　　田中太郎<br>
                        出版社　本の友の会<br>
                        ISBN　　978-4-7710-1067-3<br>
                        </p>
                </div>
            </a>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top uk-height-small"><img src="/images/light.jpg" alt=""></div>
            <a href="item.html">
                  <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">本のタイトル</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 100x;">
                        価格　　120円<br>
                        著書　　田中太郎<br>
                        出版社　本の友の会<br>
                        ISBN　　978-4-7710-1067-3<br>
                        </p>
                </div>
            </a>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top uk-height-small"><img src="/images/light.jpg" alt=""></div>
            <a href="item.html">
                  <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">本のタイトル</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 100x;">
                        価格　　120円<br>
                        著書　　田中太郎<br>
                        出版社　本の友の会<br>
                        ISBN　　978-4-7710-1067-3<br>
                        </p>
                </div>
            </a>
        </div>
    </div>
    </div>
    <div class="uk-child-width-expand@s uk-text-center" uk-grid="parallax: 150">
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top uk-height-small"><img src="/images/light.jpg" alt=""></div>
            <a href="item.html">
                <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">本のタイトル</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 70px;">依頼内容の説明です。　依頼内容の説明です。　依頼内容の説明です。　依頼内容の説明です。</p>
                </div>
            </a>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top uk-height-small"><img src="/images/light.jpg" alt=""></div>
            <a href="item.html">
                  <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">本のタイトル</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 100x;">
                        価格　　120円<br>
                        著書　　田中太郎<br>
                        出版社　本の友の会<br>
                        ISBN　　978-4-7710-1067-3<br>
                        </p>
                </div>
            </a>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top uk-height-small"><img src="/images/light.jpg" alt=""></div>
            <a href="item.html">
                  <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">本のタイトル</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 100x;">
                        価格　　120円<br>
                        著書　　田中太郎<br>
                        出版社　本の友の会<br>
                        ISBN　　978-4-7710-1067-3<br>
                        </p>
                </div>
            </a>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top uk-height-small"><img src="/images/light.jpg" alt=""></div>
            <a href="item.html">
                  <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">本のタイトル</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 100x;">
                        価格　　120円<br>
                        著書　　田中太郎<br>
                        出版社　本の友の会<br>
                        ISBN　　978-4-7710-1067-3<br>
                        </p>
                </div>
            </a>
        </div>
    </div>
    </div>
        </li>
    </ul>

    <a class="uk-slidenav-large uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-slidenav-large uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

</div>
    </section>
<hr class="uk-divider-icon">
    <section class="follow-item"  id="category">
    <div class="uk-card uk-card-default uk-card-body" style="z-index: 980;text-align:center;" uk-sticky="bottom: #offset"><h3>カテゴリー</h3></div>
    <a href="item.html">
        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
            <div class="uk-card-media-left uk-cover-container">
                <img src="/images/novel.jpg" alt="" uk-cover>
                <canvas width="300" height="200"></canvas>
            </div>
            <div id="follow_item">
                <div class="uk-card-body">
                    <h3 class="uk-card-title">小説</h3>
                    <p>依頼文です。 依頼文です。 依頼文です。 依頼文です。 依頼文です。 依頼文です。 </p>
                </div>
            </div>
        </div>
    </a>
    <a href="item.html">
        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
            <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
                <img src="/images/nonfiction.png" alt="" uk-cover>
                <canvas width="300" height="200"></canvas>
            </div>
            <div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title">ノンフィクション</h3>
                    <p>依頼文です。 依頼文です。 依頼文です。 依頼文です。 依頼文です。 依頼文です。 </p>
                </div>
            </div>
        </div>
    </a>
    <a href="item.html">
        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
            <div class="uk-card-media-left uk-cover-container">
                <img src="/images/bussiness.jpg" alt="" uk-cover>
                <canvas width="300" height="200"></canvas>
            </div>
            <div id="follow_item">
                <div class="uk-card-body">
                    <h3 class="uk-card-title">ビジネス</h3>
                    <p>依頼文です。 依頼文です。 依頼文です。 依頼文です。 依頼文です。 依頼文です。 </p>
                </div>
            </div>
        </div>
    </a>
    <a href="item.html">
        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
            <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
                <img src="/images/comic.jpg" alt="" uk-cover>
                <canvas width="300" height="200"></canvas>
            </div>
            <div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title">漫画</h3>
                    <p>依頼文です。 依頼文です。 依頼文です。 依頼文です。 依頼文です。 依頼文です。 </p>
                </div>
            </div>
        </div>
    </a>
    <a href="item.html">
        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
            <div class="uk-card-media-left uk-cover-container">
                <img src="/images/others.jpg" alt="" uk-cover>
                <canvas width="300" height="200"></canvas>
            </div>
            <div id="follow_item">
                <div class="uk-card-body">
                    <h3 class="uk-card-title">その他</h3>
                    <p>依頼文です。 依頼文です。 依頼文です。 依頼文です。 依頼文です。 依頼文です。 </p>
                </div>
            </div>
        </div>
    </a>
    </section>
</div>
<hr class="uk-divider-icon">
<footer style="height:300px;" class="uk-background-muted">
<div class="uk-position-relative">
    <div class="uk-position-top">
        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
            <div class="uk-navbar-left">
                <ul class="uk-navbar-nav">
                    <li class="uk-active"><a href="#">TOP</a></li>
                    <li>
                        <a href="#">menu</a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="#category">本のカテゴリー</a></li>
                                <li><a href="/register">新規会員登録</a></li>
                                <li><a href="/login">ログイン</a></li>
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