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
    <link href="./assets/css/slick.css" rel="stylesheet" type="text/css" media="all">
    <link href="./assets/css/common.css" rel="stylesheet" type="text/css" media="all">
    <link href="./assets/css/style.css" rel="stylesheet" type="text/css" media="all">

    <!--javascript-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/object-fit-images/3.2.3/ofi.min.js"></script>
    <script src="./assets/js/slick.js"></script>
    <script src="./assets/js/script.js"></script>

</head>


<body class="home">
    <!-- header -->
    <header class="l-header" role="banner">
        <div class="l-header__inner">
            <div class="logoArea">
                <h1 class="site__logo">
                    <a href="/"><img src="./assets/img/common/logo.svg" alt="recobuil" width="250"></a>
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
            <div class="main_visual">
                <h2 class="main_ttl">
                    「理想のライフスタイルの実現をサポート」
                    <span> recobuilとは理想のライフスタイルの実現をサポートする空き家リノベーションサービスです</span>
                </h2>
                <ul class="main-slide">
                    <li><img src="{{ asset('/img/slide_01.jpg') }}" alt=""></li>
                    <li><img src="{{ asset('/img/slide_02.jpg') }}" alt=""></li>
                    <li><img src="{{ asset('/img/slide_03.jpg') }}" alt=""></li>
                    <li><img src="{{ asset('/img/slide_04.jpg') }}" alt=""></li>
                    <li><img src="{{ asset('/img/slide_05.jpg') }}" alt=""></li>
                </ul>
            </div><!-- .main_visual end-->

            <section class="p-wrap">
                <div class="home-lead">
                    <p class="lead__ttl">"recobuilはあなたの理想にあったぴったりの⽣活を実現することができます"</p>
                    <p class="lead__txt">⾃然の近くで⼦供を育てたい、海の近くに住みたい、おしゃれな家で⽣活がしたい、、、<br>そんな⾃分の理想の暮らし⽅を理想の形で実現させることができます。</p>
                </div>

                <div class="home-how">
                    <h3>recobuilの使い⽅</h3>
                    <div class="how__list">
                        <div class="how__item item01">
                            <h4>①住みたい場所（空き家）を⾒つける</h4>
                            <img src="./assets/img/illust_01.png" alt="" width="260">
                            <div class="fBox">
                                <div class="fBox__img">
                                    <img src="./assets/img/illust_02.png" alt="" width="160">
                                </div>
                                <div class="fBox__txt">
                                    <ul>
                                        <li>・海の近く</li>
                                        <li>・庭付き</li>
                                        <li class="u-center">etc....</li>
                                    </ul>
                                </div>
                            </div>
                            <p>福岡各地の空き家から理想の場所を⾒つけます。</p>
                            <p>地⽅の空き家には、⾃然が多い、景⾊が素晴らしい、庭付きなどの場所が多くあります。</p>
                            <p>⾃分の理想に合わせられる場所選びで都会にはない付加価値が得られます。</p>
                        </div>

                        <div class="how__item item02">
                            <h4>②理想の建物のイメージを⾒つける</h4>
                            <img src="./assets/img/illust_03.png" alt="" width="260">
                            <p class="u-center">Aさんの好きなジャンル<br>↓<br>AIがAさん好みの建物をレコメンド</p>
                            <div class="fBox">
                                <div class="fBox__img">
                                    <img src="./assets/img/illust_04.png" alt="" width="150">
                                </div>
                                <div class="fBox__img">
                                    <img src="./assets/img/illust_05.png" alt="" width="150">
                                </div>
                            </div>
                            <p>あなたの趣味嗜好から、AIが分析し、あなたにぴったりの建物のイメージをレコメンドします。</p>
                            <p>あなたの見つけた理想の建物から、そのイメージを実現させてくれる建築家とマッチングします。</p>
                            <p>建築家とともに理想の住まいを作り上げていきます。</p>

                        </div>

                        <div class="how__item item03">
                            <h4>③理想の地域に理想の暮らしで住む</h4>
                            <div class="fBox">
                                <div class="fBox__img u-border">
                                    <img src="./assets/img/illust_02.png" alt="" width="150">
                                </div>
                                <p class="fBox__txt u-center">
                                    空き家
                                </p>
                            </div>
                            <p class="mark">×</p>
                            <div class="fBox">
                                <div class="fBox__img">
                                    <img src="./assets/img/illust_05.png" alt="" width="150">
                                </div>
                                <p class="fBox__txt u-center">
                                    「理想の住まい」
                                </p>
                            </div>
                            <p class="mark">×</p>
                            <div class="fBox last">
                                <div class="fBox__img imgCenter">
                                    <img src="./assets/img/illust_06.png" alt="" width="75">
                                </div>
                                <p class="fBox__txt u-center">
                                    「建築家」
                                </p>
                            </div>
                            <p>あなたは見つけた理想の場所で、理想の住まいでの暮らしを実現させます。</p>
                            <p class="u-large">新しい暮らしの始まりです。</p>
                        </div>
                    </div>
                </div><!-- .home-how end-->

                <a href="/step/" class="c-linkBtn next">次へ</a>
            </section>

        </main>

    </div><!-- /.l-content end -->

</body>

</html>
