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


<body class="search house page">
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
            <section>
                <h2 class="c-title">空き家を探す</h2>
                <form class="" method="post">
                    <div class="place_select">
                        <select>
                            <option value="北九州市">
                                北九州市</option>
                            <option value="福岡市">
                                福岡市</option>
                            <option value="大牟田市">
                                大牟田市</option>
                            <option value="久留米市">
                                久留米市</option>
                            <option value="直方市">
                                直方市</option>
                            <option value="飯塚市">
                                飯塚市</option>
                            <option value="田川市">
                                田川市</option>
                            <option value="柳川市">
                                柳川市</option>
                            <option value="八女市">
                                八女市</option>
                            <option value="筑後市">
                                筑後市</option>
                            <option value="大川市">
                                大川市</option>
                            <option value="行橋市">
                                行橋市</option>
                            <option value="豊前市">
                                豊前市</option>
                            <option value="中間市">
                                中間市</option>
                            <option value="小郡市">
                                小郡市</option>
                            <option value="筑紫野市">
                                筑紫野市</option>
                            <option value="春日市">
                                春日市</option>
                            <option value="大野城市">
                                大野城市</option>
                            <option value="宗像市">
                                宗像市</option>
                            <option value="太宰府市">
                                太宰府市</option>
                            <option value="古賀市">
                                古賀市</option>
                            <option value="福津市">
                                福津市</option>
                            <option value="うきは市">
                                うきは市</option>
                            <option value="宮若市">
                                宮若市</option>
                            <option value="嘉麻市">
                                嘉麻市</option>
                            <option value="朝倉市">
                                朝倉市</option>
                            <option value="みやま市">
                                みやま市</option>
                            <option value="糸島市">
                                糸島市</option>
                            <option value="那珂川市">
                                那珂川市</option>
                            <option value="宇美町">
                                宇美町</option>
                            <option value="篠栗町">
                                篠栗町</option>
                            <option value="志免町">
                                志免町</option>
                            <option value="須恵町">
                                須恵町</option>
                            <option value="新宮町">
                                新宮町</option>
                            <option value="久山町">
                                久山町</option>
                            <option value="粕屋町">
                                粕屋町</option>
                            <option value="芦屋町">
                                芦屋町</option>
                            <option value="水巻町">
                                水巻町</option>
                            <option value="岡垣町">
                                岡垣町</option>
                            <option value="遠賀町">
                                遠賀町</option>
                            <option value="小竹町">
                                小竹町</option>
                            <option value="鞍手町">
                                鞍手町</option>
                            <option value="桂川町">
                                桂川町</option>
                            <option value="筑前町">
                                筑前町</option>
                            <option value="東峰村">
                                東峰村</option>
                            <option value="大刀洗町">
                                大刀洗町</option>
                            <option value="大木町">
                                大木町</option>
                            <option value="広川町">
                                広川町</option>
                            <option value="香春町">
                                香春町</option>
                            <option value="添田町">
                                添田町</option>
                            <option value="糸田町">
                                糸田町</option>
                            <option value="川崎町">
                                川崎町</option>
                            <option value="大任町">
                                大任町</option>
                            <option value="赤村">
                                赤村</option>
                            <option value="福智町">
                                福智町</option>
                            <option value="苅田町">
                                苅田町</option>
                            <option value="みやこ町">
                                みやこ町</option>
                            <option value="吉富町">
                                吉富町</option>
                            <option value="上毛町">
                                上毛町</option>
                            <option value=" 築上町">
                                築上町</option>
                        </select>
                    </div>
                    <div class="mapArea">
                        <img src="{{ asset('/img/map.svg') }}" alt="" width="70%">
                    </div>

                    <p class="c-title">空き家(24件)</p>
                    <div class="col-xs-8 col-xs-offset-2">
                        <div class="mb-4">
                            @foreach ($akiyas as $akiya)
                            <p>{{ link_to("/akiya/{$akiya->id}/show", '続きを読む', array('class' => 'btn btn-primary')) }}</p>
                            <form action="{{ url('/akiya/favorite') }}" method="post">
                                @csrf
                                <input type="hidden" name="akiya_id" value="{{ $akiya->id }}" />
                                <input type="submit" value="お気に入り登録" class="btn btn-primary" />
                            </form>
                            {{ $akiya->akiya_id }}<br>
                            {{ $akiya->location }}<br>
                            {{ $akiya->landarea }}<br>
                            {{ $akiya->drivewayarea }}<br>
                            {{ $akiya->buildingarea }}<br>
                            {{ $akiya->buildingstructure }}<br>
                            @foreach ($akiya->image_paths as $image_path)
                            <img width="100" src="{{ $image_path }}">
                            @endforeach
                            @endforeach
                        </div>
                    </div>
                </form>

            </section>

        </main>

    </div><!-- /.l-content end -->

</body>

</html>
