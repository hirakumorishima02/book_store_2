@extends('layout')
@section('title','ユーザートップページ')
@section('body')

<div class="container">
    <section class="new-item uk-background-muted" style="padding-bottom:100px;">
    <div class="uk-card uk-card-default uk-card-body" style="z-index: 980;text-align:center;" uk-sticky="bottom: #offset"><h3>新着本のご案内</h3></div>
    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow>

    <ul class="uk-slideshow-items" style="height:1000px;">
        <li>
    <div class="uk-child-width-expand@s uk-text-center本のタイトル" uk-grid="parallax: 150">
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top uk-height-small"><img src="{{$bookList[$i]['photo_path']}}" alt=""></div>
            <a href="/book/{{$bookList[$i]['id']}}">
                <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">{{$bookList[$i]['title']}}</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 100x;">
                        価格　　{{$bookList[$i]['price']}}円<br>
                        著書　　{{$bookList[$i]['author']}}<br>
                        出版社　{{$bookList[$i]['publisher']}}会<br>
                        ISBN　　{{$bookList[$i]['isbn']}}<br>
                        </p>
                </div>
            </a>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top uk-height-small"><img src="{{$bookList[$j]['photo_path']}}" alt=""></div>
            <a href="/book/{{$bookList[$j]['id']}}">
                <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">{{$bookList[$j]['title']}}</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 100x;">
                        価格　　{{$bookList[$j]['price']}}円<br>
                        著書　　{{$bookList[$j]['author']}}<br>
                        出版社　{{$bookList[$j]['publisher']}}会<br>
                        ISBN　　{{$bookList[$j]['isbn']}}<br>
                        </p>
                </div>
            </a>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top uk-height-small"><img src="{{$bookList[$k]['photo_path']}}" alt=""></div>
            <a href="/book/{{$bookList[$k]['id']}}">
                <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">{{$bookList[$k]['title']}}</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 100x;">
                        価格　　{{$bookList[$k]['price']}}円<br>
                        著書　　{{$bookList[$k]['author']}}<br>
                        出版社　{{$bookList[$k]['publisher']}}会<br>
                        ISBN　　{{$bookList[$k]['isbn']}}<br>
                        </p>
                </div>
            </a>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top uk-height-small"><img src="{{$bookList[$l]['photo_path']}}" alt=""></div>
            <a href="/book/{{$bookList[$l]['id']}}">
                <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">{{$bookList[$l]['title']}}</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 100x;">
                        価格　　{{$bookList[$l]['price']}}円<br>
                        著書　　{{$bookList[$l]['author']}}<br>
                        出版社　{{$bookList[$l]['publisher']}}会<br>
                        ISBN　　{{$bookList[$l]['isbn']}}<br>
                        </p>
                </div>
            </a>
        </div>
    </div>
    </div>
    <div class="uk-child-width-expand@s uk-text-center" uk-grid="parallax: 150">
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top uk-height-small"><img src="{{$bookList[$i]['photo_path']}}" alt=""></div>
            <a href="/book/{{$bookList[$i]['id']}}">
                <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">{{$bookList[$i]['title']}}</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 100x;">
                        価格　　{{$bookList[$i]['price']}}円<br>
                        著書　　{{$bookList[$i]['author']}}<br>
                        出版社　{{$bookList[$i]['publisher']}}会<br>
                        ISBN　　{{$bookList[$i]['isbn']}}<br>
                        </p>
                </div>
            </a>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top uk-height-small"><img src="{{$bookList[$k]['photo_path']}}" alt=""></div>
            <a href="/book/{{$bookList[$k]['id']}}">
                <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">{{$bookList[$k]['title']}}</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 100x;">
                        価格　　{{$bookList[$k]['price']}}円<br>
                        著書　　{{$bookList[$k]['author']}}<br>
                        出版社　{{$bookList[$k]['publisher']}}会<br>
                        ISBN　　{{$bookList[$k]['isbn']}}<br>
                        </p>
                </div>
            </a>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top uk-height-small"><img src="{{$bookList[$j]['photo_path']}}" alt=""></div>
            <a href="/book/{{$bookList[$j]['id']}}">
                <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">{{$bookList[$j]['title']}}</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 100x;">
                        価格　　{{$bookList[$j]['price']}}円<br>
                        著書　　{{$bookList[$j]['author']}}<br>
                        出版社　{{$bookList[$j]['publisher']}}会<br>
                        ISBN　　{{$bookList[$j]['isbn']}}<br>
                        </p>
                </div>
            </a>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top uk-height-small"><img src="{{$bookList[$l]['photo_path']}}" alt=""></div>
            <a href="/book/{{$bookList[$l]['id']}}">
                <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">{{$bookList[$l]['title']}}</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 100x;">
                        価格　　{{$bookList[$l]['price']}}円<br>
                        著書　　{{$bookList[$l]['author']}}<br>
                        出版社　{{$bookList[$l]['publisher']}}会<br>
                        ISBN　　{{$bookList[$l]['isbn']}}<br>
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
            <div class="uk-card-media-top uk-height-small"><img src="{{$bookList[$i]['photo_path']}}" alt=""></div>
            <a href="/book/{{$bookList[$i]['id']}}">
                <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">{{$bookList[$i]['title']}}</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 100x;">
                        価格　　{{$bookList[$i]['price']}}円<br>
                        著書　　{{$bookList[$i]['author']}}<br>
                        出版社　{{$bookList[$i]['publisher']}}会<br>
                        ISBN　　{{$bookList[$i]['isbn']}}<br>
                        </p>
                </div>
            </a>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top uk-height-small"><img src="{{$bookList[$j]['photo_path']}}" alt=""></div>
            <a href="/book/{{$bookList[$j]['id']}}">
                <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">{{$bookList[$j]['title']}}</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 100x;">
                        価格　　{{$bookList[$j]['price']}}円<br>
                        著書　　{{$bookList[$j]['author']}}<br>
                        出版社　{{$bookList[$j]['publisher']}}会<br>
                        ISBN　　{{$bookList[$j]['isbn']}}<br>
                        </p>
                </div>
            </a>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top uk-height-small"><img src="{{$bookList[$k]['photo_path']}}" alt=""></div>
            <a href="/book/{{$bookList[$k]['id']}}">
                <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">{{$bookList[$k]['title']}}</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 100x;">
                        価格　　{{$bookList[$k]['price']}}円<br>
                        著書　　{{$bookList[$k]['author']}}<br>
                        出版社　{{$bookList[$k]['publisher']}}会<br>
                        ISBN　　{{$bookList[$k]['isbn']}}<br>
                        </p>
                </div>
            </a>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top uk-height-small"><img src="{{$bookList[$l]['photo_path']}}" alt=""></div>
            <a href="/book/{{$bookList[$l]['id']}}">
                <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">{{$bookList[$l]['title']}}</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 100x;">
                        価格　　{{$bookList[$l]['price']}}円<br>
                        著書　　{{$bookList[$l]['author']}}<br>
                        出版社　{{$bookList[$l]['publisher']}}会<br>
                        ISBN　　{{$bookList[$l]['isbn']}}<br>
                        </p>
                </div>
            </a>
        </div>
    </div>
    </div>
    <div class="uk-child-width-expand@s uk-text-center" uk-grid="parallax: 150">
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top uk-height-small"><img src="{{$bookList[$i]['photo_path']}}" alt=""></div>
            <a href="/book/{{$bookList[$i]['id']}}">
                <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">{{$bookList[$i]['title']}}</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 100x;">
                        価格　　{{$bookList[$i]['price']}}円<br>
                        著書　　{{$bookList[$i]['author']}}<br>
                        出版社　{{$bookList[$i]['publisher']}}会<br>
                        ISBN　　{{$bookList[$i]['isbn']}}<br>
                        </p>
                </div>
            </a>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top uk-height-small"><img src="{{$bookList[$k]['photo_path']}}" alt=""></div>
            <a href="/book/{{$bookList[$k]['id']}}">
                <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">{{$bookList[$k]['title']}}</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 100x;">
                        価格　　{{$bookList[$k]['price']}}円<br>
                        著書　　{{$bookList[$k]['author']}}<br>
                        出版社　{{$bookList[$k]['publisher']}}会<br>
                        ISBN　　{{$bookList[$k]['isbn']}}<br>
                        </p>
                </div>
            </a>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top uk-height-small"><img src="{{$bookList[$j]['photo_path']}}" alt=""></div>
            <a href="/book/{{$bookList[$j]['id']}}">
                <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">{{$bookList[$j]['title']}}</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 100x;">
                        価格　　{{$bookList[$j]['price']}}円<br>
                        著書　　{{$bookList[$j]['author']}}<br>
                        出版社　{{$bookList[$j]['publisher']}}会<br>
                        ISBN　　{{$bookList[$j]['isbn']}}<br>
                        </p>
                </div>
            </a>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top uk-height-small"><img src="{{$bookList[$l]['photo_path']}}" alt=""></div>
            <a href="/book/{{$bookList[$l]['id']}}">
                <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">{{$bookList[$l]['title']}}</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 100x;">
                        価格　　{{$bookList[$l]['price']}}円<br>
                        著書　　{{$bookList[$l]['author']}}<br>
                        出版社　{{$bookList[$l]['publisher']}}会<br>
                        ISBN　　{{$bookList[$l]['isbn']}}<br>
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
            <div class="uk-card-media-top uk-height-small"><img width="50%" height="50%" src="{{$bookList[$i]['photo_path']}}" alt=""></div>
            <a href="/book/{{$bookList[$i]['id']}}">
                <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">{{$bookList[$i]['title']}}</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 100x;">
                        価格　　{{$bookList[$i]['price']}}円<br>
                        著書　　{{$bookList[$i]['author']}}<br>
                        出版社　{{$bookList[$i]['publisher']}}会<br>
                        ISBN　　{{$bookList[$i]['isbn']}}<br>
                        </p>
                </div>
            </a>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top uk-height-small"><img src="{{$bookList[$j]['photo_path']}}" alt=""></div>
            <a href="/book/{{$bookList[$j]['id']}}">
                <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">{{$bookList[$j]['title']}}</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 100x;">
                        価格　　{{$bookList[$j]['price']}}円<br>
                        著書　　{{$bookList[$j]['author']}}<br>
                        出版社　{{$bookList[$j]['publisher']}}会<br>
                        ISBN　　{{$bookList[$j]['isbn']}}<br>
                        </p>
                </div>
            </a>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top uk-height-small"><img src="{{$bookList[$k]['photo_path']}}" alt=""></div>
            <a href="/book/{{$bookList[$k]['id']}}">
                <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">{{$bookList[$k]['title']}}</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 100x;">
                        価格　　{{$bookList[$k]['price']}}円<br>
                        著書　　{{$bookList[$k]['author']}}<br>
                        出版社　{{$bookList[$k]['publisher']}}会<br>
                        ISBN　　{{$bookList[$k]['isbn']}}<br>
                        </p>
                </div>
            </a>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top uk-height-small"><img src="{{$bookList[$l]['photo_path']}}" alt=""></div>
            <a href="/book/{{$bookList[$l]['id']}}">
                <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">{{$bookList[$l]['title']}}</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 100x;">
                        価格　　{{$bookList[$l]['price']}}円<br>
                        著書　　{{$bookList[$l]['author']}}<br>
                        出版社　{{$bookList[$l]['publisher']}}会<br>
                        ISBN　　{{$bookList[$l]['isbn']}}<br>
                        </p>
                </div>
            </a>
        </div>
    </div>
    </div>
    <div class="uk-child-width-expand@s uk-text-center" uk-grid="parallax: 150">
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top uk-height-small"><img src="{{$bookList[$i]['photo_path']}}" alt=""></div>
            <a href="/book/{{$bookList[$i]['id']}}">
                <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">{{$bookList[$i]['title']}}</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 100x;">
                        価格　　{{$bookList[$i]['price']}}円<br>
                        著書　　{{$bookList[$i]['author']}}<br>
                        出版社　{{$bookList[$i]['publisher']}}会<br>
                        ISBN　　{{$bookList[$i]['isbn']}}<br>
                        </p>
                </div>
            </a>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top uk-height-small"><img src="{{$bookList[$k]['photo_path']}}" alt=""></div>
            <a href="/book/{{$bookList[$k]['id']}}">
                <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">{{$bookList[$k]['title']}}</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 100x;">
                        価格　　{{$bookList[$k]['price']}}円<br>
                        著書　　{{$bookList[$k]['author']}}<br>
                        出版社　{{$bookList[$k]['publisher']}}会<br>
                        ISBN　　{{$bookList[$k]['isbn']}}<br>
                        </p>
                </div>
            </a>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top uk-height-small"><img src="{{$bookList[$j]['photo_path']}}" alt=""></div>
            <a href="/book/{{$bookList[$j]['id']}}">
                <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">{{$bookList[$j]['title']}}</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 100x;">
                        価格　　{{$bookList[$j]['price']}}円<br>
                        著書　　{{$bookList[$j]['author']}}<br>
                        出版社　{{$bookList[$j]['publisher']}}会<br>
                        ISBN　　{{$bookList[$j]['isbn']}}<br>
                        </p>
                </div>
            </a>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top uk-height-small"><img src="{{$bookList[$l]['photo_path']}}" alt=""></div>
            <a href="/book/{{$bookList[$l]['id']}}">
                <div class="uk-card uk-card-default uk-card-body uk-grid-margin">
                    <h3 class="uk-card-title">{{$bookList[$l]['title']}}</h3>
                    <p style="overflow: hidden;text-overflow: ellipsis;height: 100x;">
                        価格　　{{$bookList[$l]['price']}}円<br>
                        著書　　{{$bookList[$l]['author']}}<br>
                        出版社　{{$bookList[$l]['publisher']}}会<br>
                        ISBN　　{{$bookList[$l]['isbn']}}<br>
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
    <section class="follow-item" id="category">
    <div class="uk-card uk-card-default uk-card-body" style="z-index: 980;text-align:center;" uk-sticky="bottom: #offset"><h3>カテゴリー</h3></div>
    <a href="/category/1">
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
    <a href="/category/2">
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
    <a href="/category/3">
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
    <a href="/category/4">
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
    <a href="/category/5">
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
@endsection