<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>recobuil</title>
    <meta https-equiv="X-UA-Compatible" content="IE=edge">
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
    <link href="{{ asset('/css/slick.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('/css/common.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css" media="all">

    <!--javascript-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/object-fit-images/3.2.3/ofi.min.js"></script>
    <script src="{{ asset('/js/slick.js') }}"></script>
    <script src="{{ asset('/js/script.js') }}"></script>

</head>


<body class="step page">
    <!-- header -->
    <header class="l-header" role="banner">
        <div class="l-header__inner">
            <div class="logoArea">
                <h1 class="site__logo">
                    <a href="/"><img src="{{ asset('/img/common/logo.png') }}" alt="recobuil" width="250"></a>
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

    <div class="l-content">
        <main class="l-main" role="main">
            <section class="step__list u-center">
                <h2>Step1</h2>
                <ul class="flow">
                    <li class="active">本</li>
                    <li class="active">服</li>
                    <li class="active">映画</li>
                    <li class="active">音楽</li>
                </ul>
                <h3 class="c-title">好きな音楽のジャンルは？</h3>
                <p>必ず⼀つ選んでください</p>
                <form class="" action="" method="post">
                    <ul class="step__list">
                        <li>
                            <input type="checkbox" class="checkbox" id="checkbox-1" name="group" />
                            <label for="checkbox-1" class="btn">メタル</label>
                        </li>
                        <li>
                            <input type="checkbox" class="checkbox" id="checkbox-2" name="group" />
                            <label for="checkbox-2" class="btn">ロック</label>
                        </li>
                        <li>
                            <input type="checkbox" class="checkbox" id="checkbox-3" name="group" />
                            <label for="checkbox-3" class="btn">フォークソング</label>
                        </li>
                        <li>
                            <input type="checkbox" class="checkbox" id="checkbox-4" name="group" />
                            <label for="checkbox-4" class="btn">レゲエ</label>
                        </li>
                        <li>
                            <input type="checkbox" class="checkbox" id="checkbox-5" name="group" />
                            <label for="checkbox-5" class="btn">テクノポップ</label>
                        </li>
                        <li>
                            <input type="checkbox" class="checkbox" id="checkbox-6" name="group" />
                            <label for="checkbox-6" class="btn">ハードコア</label>
                        </li>
                        <li>
                            <input type="checkbox" class="checkbox" id="checkbox-7" name="group" />
                            <label for="checkbox-7" class="btn">オルタナ</label>
                        </li>
                        <li>
                            <input type="checkbox" class="checkbox" id="checkbox-8" name="group" />
                            <label for="checkbox-8" class="btn">ジャズ</label>
                        </li>
                        <li>
                            <input type="checkbox" class="checkbox" id="checkbox-9" name="group" />
                            <label for="checkbox-9" class="btn">演歌</label>
                        </li>
                        <li>
                            <input type="checkbox" class="checkbox" id="checkbox-10" name="group" />
                            <label for="checkbox-10" class="btn">その他</label>
                        </li>
                    </ul>
                </form>
                <ul class="pagelink">
                    <li><a href="/step03" class="c-linkBtn prev">前へ</a></li>
                    <li><a href="/akiya" class="c-linkBtn next">登録</a></li><br>
                    <li><a href="/matching" class="c-linkBtn next">仕組み(提出用)</a></li>
                </ul>
            </section><!-- .step__list end-->
        </main>
    </div><!-- /.l-content end -->
</body>

</html>
