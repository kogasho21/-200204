<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>recobuil</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <!-- OGP -->
    <meta property="og:title" content="recobuil">
    <meta property="og:url" content="">
    <meta property="og:description" content="recobuil">
    <meta property="og:site_name" content="recobuil">
    <meta property="og:type" content="website">

    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:500&display=swap" rel="stylesheet">
    <link href="../assets/css/slick.css" rel="stylesheet" type="text/css" media="all">
    <link href="../assets/css/common.css" rel="stylesheet" type="text/css" media="all">
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css" media="all">

    <!--javascript-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/object-fit-images/3.2.3/ofi.min.js"></script>
    <script src="../assets/js/slick.js"></script>
    <script src="../assets/js/script.js"></script>

</head>


<body class="mypage page">
    <!-- header -->
    <header class="l-header" role="banner">
        <div class="l-header__inner">
            <div class="logoArea">
                <h1 class="site__logo">
                    <a href="/"><img src="../assets/img/common/logo.svg" alt="recobuil" width="250"></a>
                </h1>
            </div>
            <nav class="l-navArea">
                <ul class="gnav">
                    <li><a href="/search_house/">■ 空き家を探す</a></li>
                    <li><a href="/search_building/">■ 好みの建物を探す</a></li>
                    <li><a href="/person/">■ 建築家の情報を見る</a></li>
                    <li><a href="/mypage/">■ マイページ</a></li>
                </ul>
            </nav>
        </div>
    </header>


    <!-- content start -->
    <div class="l-content">
        <main class="l-main" role="main">
            <section>
                <h2 class="u-center c-title">マイページ</h2>

                <div class="mypage__name">
                    <div class="imgArea">
                        <!-- <img src="../assets/img/person_dummy.jpg" alt=""> -->
                    </div>
                    <p class="profile__name">ユーザー名</p>
                </div>

                <form class="" method="post">
                    <h3 class="c-title">好きなジャンル</h3>
                    <div class="genre__list book">
                        <p class="genre__ttl">本</p>
                        <div class="genre__pick">
                            <div class="genre__item">
                                <p class="color-1">ミステリー<br>サスペンス</p>
                                <textarea name="genre" rows="2" cols="60"></textarea>
                            </div>
                            <div class="genre__item">
                                <p class="color-9">アート</p>
                                <textarea name="genre" rows="2" cols="60"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="genre__list book">
                        <p class="genre__ttl">服</p>
                        <div class="genre__pick">
                            <div class="genre__item">
                                <p class="color-2">ロック</p>
                                <textarea name="genre" rows="2" cols="60"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="genre__list book">
                        <p class="genre__ttl">映画</p>
                        <div class="genre__pick">
                            <div class="genre__item">
                                <p class="color-1">ミステリー<br>サスペンス</p>
                                <textarea name="genre" rows="2" cols="60"></textarea>
                            </div>
                            <div class="genre__item">
                                <p class="color-7">モダン</p>
                                <textarea name="genre" rows="2" cols="60"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="genre__list book">
                        <p class="genre__ttl">音楽</p>
                        <div class="genre__pick">
                            <div class="genre__item">
                                <p class="color-8">ジャズ</p>
                                <textarea name="genre" rows="2" cols="60"></textarea>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="fav__house">
                    <h3 class="c-title">登録している空き家</h3>
                    <div class="c-house__list">
                        <div class="house__item">
                            <div class="item__img">
                                <img src="../assets/img/dummy_01.jpg" alt="">
                            </div>
                            <div class="item__txt">
                                <dl>
                                    <dt>所在地：</dt>
                                    <dd>⼋⼥市</dd>
                                    <dt>⼟地⾯積：</dt>
                                    <dd>〇〇㎡</dd>
                                    <dt>建物⾯積：</dt>
                                    <dd>〇〇㎡</dd>
                                    <dt>建物構造：</dt>
                                    <dd>⽊造</dd>
                                </dl>
                            </div>
                        </div>

                        <div class="house__item">
                            <div class="item__img">
                                <img src="https://placehold.jp/18/c4c4c4/ffffff/504x326.png?text=dummy" alt="">
                            </div>
                            <div class="item__txt">
                                <dl>
                                    <dt>所在地：</dt>
                                    <dd>⼋⼥市</dd>
                                    <dt>⼟地⾯積：</dt>
                                    <dd>〇〇㎡</dd>
                                    <dt>建物⾯積：</dt>
                                    <dd>〇〇㎡</dd>
                                    <dt>建物構造：</dt>
                                    <dd>⽊造</dd>
                                </dl>
                            </div>
                        </div>

                        <div class="house__item">
                            <div class="item__img">
                                <img src="https://placehold.jp/18/c4c4c4/ffffff/504x326.png?text=dummy" alt="">
                            </div>
                            <div class="item__txt">
                                <dl>
                                    <dt>所在地：</dt>
                                    <dd>⼋⼥市</dd>
                                    <dt>⼟地⾯積：</dt>
                                    <dd>〇〇㎡</dd>
                                    <dt>建物⾯積：</dt>
                                    <dd>〇〇㎡</dd>
                                    <dt>建物構造：</dt>
                                    <dd>⽊造</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="fav__building">
                    <h3 class="c-title">登録している建築</h3>
                    <div class="c-building__list">
                        <div class="building__item">
                            <div class="item__img">
                                <img src="../assets/img/dummy_04.jpg" alt="">
                            </div>
                            <div class="item__txt">
                                <dl>
                                    <dt>⾦額:</dt>
                                    <dd>〇〇円</dd>
                                    <dt>敷地⾯積:</dt>
                                    <dd>〇〇㎡</dd>
                                    <dt>建物⾯積:</dt>
                                    <dd>〇〇㎡</dd>
                                    <dt>建物構造:</dt>
                                    <dd>⽊造</dd>
                                    <dt>タイプ:</dt>
                                    <dd>改修</dd>
                                </dl>
                            </div>
                            <div class="item__person">
                                <div class="person__img">
                                    <img src="../assets/img/person_dummy.jpg" alt="">
                                </div>
                                <div class="person__ttl">
                                    <p>前⽥紀貞アトリエ</p>
                                </div>
                            </div>
                        </div>

                        <div class="building__item">
                            <div class="item__img">
                                <img src="https://placehold.jp/18/c4c4c4/ffffff/504x326.png?text=dummy" alt="">
                            </div>
                            <div class="item__txt">
                                <dl>
                                    <dt>所在地:</dt>
                                    <dd>⼋⼥市</dd>
                                    <dt>⼟地⾯積:</dt>
                                    <dd>〇〇㎡</dd>
                                    <dt>建物⾯積:</dt>
                                    <dd>〇〇㎡</dd>
                                    <dt>建物構造:</dt>
                                    <dd>⽊造</dd>
                                    <dt>タイプ:</dt>
                                    <dd>改修</dd>
                                </dl>
                            </div>
                            <div class="item__person">
                                <div class="person__img">
                                    <!-- <img src="../assets/img/person_dummy.jpg" alt=""> -->
                                </div>
                                <div class="person__ttl">
                                    <p>テキストが入ります</p>
                                </div>
                            </div>
                        </div>

                        <div class="building__item">
                            <div class="item__img">
                                <img src="https://placehold.jp/18/c4c4c4/ffffff/504x326.png?text=dummy" alt="">
                            </div>
                            <div class="item__txt">
                                <dl>
                                    <dt>所在地:</dt>
                                    <dd>⼋⼥市</dd>
                                    <dt>⼟地⾯積:</dt>
                                    <dd>〇〇㎡</dd>
                                    <dt>建物⾯積:</dt>
                                    <dd>〇〇㎡</dd>
                                    <dt>建物構造:</dt>
                                    <dd>⽊造</dd>
                                    <dt>タイプ:</dt>
                                    <dd>新築</dd>
                                </dl>
                            </div>
                            <div class="item__person">
                                <div class="person__img">
                                    <!-- <img src="../assets/img/person_dummy.jpg" alt=""> -->
                                </div>
                                <div class="person__ttl">
                                    <p>テキストが入ります</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </main>

    </div><!-- /.l-content end -->

</body>

</html>
