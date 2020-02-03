{{--@extends('layouts.app')--}}
@extends('mypage.layouts.default')

@section('content')
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
                    @foreach ($favorites as $favorite)
                    <div class="house__item">
                        <div class="item__img">
                            @if (!empty($favorite->akiya->image_paths[0]))
                            <img width="100" src="{{ $favorite->akiya->image_paths[0] }}">
                            @else
                            <img src="{{ asset('/assets/img/dummy_01.jpg') }}" alt="">
                            @endif
                        </div>
                        <div class="item__txt">
                            <dl>
                                <dt>所在地：</dt>
                                <dd>{{ $favorite->akiya->location }}</dd>
                                <dt>⼟地⾯積：</dt>
                                <dd>{{ $favorite->akiya->landarea }}</dd>
                                <dt>建物⾯積：</dt>
                                <dd>{{ $favorite->akiya->buildingarea }}</dd>
                                <dt>建物構造：</dt>
                                <dd>{{ $favorite->akiya->buildingstructure }}</dd>
                            </dl>
                        </div>
                    </div>
                    @endforeach
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
@endsection
