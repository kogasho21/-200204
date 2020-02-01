@extends('layouts.app')
@section('content')

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
                        <div class="item__img">
                            <img src="{{ asset('/img/dummy_01.jpg) }}" alt="">
                        </div>
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
</div>
</form>

</section>

</main>

</div><!-- /.l-content end -->

</body>

</html>

@stop
