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


<body class="home">
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
                    <li>■ 空き家を探す</li>
                    <li><a href="/search_building/">■ 好みの建物を探す</a></li>
                    <li><a href="/person/">■ 建築家の情報を見る</a></li>
                    <li><a href="/mypage/">■ マイページ</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="l-content">
        <main class="l-main" role="main">
            <section>
                <h2 class="c-title">空き家を探す</h2>
                <form class="" method="post">
                    <div class="place_select">
                        <select>
                            <option value="八女市">
                                八女市</option>
                            <option value="八女市">
                                八女市</option>
                        </select>
                    </div>
                    <div class="mapArea">
                        <img src="{{ asset('/img/map.png') }}" alt="">
                    </div>

                    <p class="c-title"><span>八女市</span>の空き家(○○件)</p>
                    <div class="c-house__list">
                        <div class="house__item">
                            <div class="item__txt">
                                <dl>
                                    @foreach ($akiyas as $akiya)
                                    {{ $akiya->akiya_id }}
                                    <dt>所在地：</dt>
                                    <dd>{{ $akiya->location }}</dd>
                                    <dt>⼟地⾯積：</dt>
                                    <dd>{{ $akiya->landarea }}</dd>
                                    <dt>私道⾯積：</dt>
                                    <dd>{{ $akiya->drivewayarea }}</dd>
                                    <dt>建物⾯積：</dt>
                                    <dd>{{ $akiya->buildingarea }}</dd>
                                    <dt>建物構造：</dt>
                                    <dd>{{ $akiya->buildingstructure }}</dd>
                                    @foreach ($akiya->image_paths as $image_path)
                                    <img width=" 100" src="{{ $image_path }}">
                                    @endforeach
                                    @endforeach
                                </dl>
                                <span class="icon-fav"></span>
                            </div>
                        </div>
                    </div>
                </form>

            </section>

        </main>

    </div><!-- /.l-content end -->

</body>

</html>
