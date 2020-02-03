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


<div class="col-xs-8 col-xs-offset-2">

    <div class="mb-4">
        <p>{{ link_to("/build/create", '建築物を新規作成する', array('class' => 'btn btn-primary')) }}</p>
        <hr />
    </div>

    @isset($builds)
    @foreach($builds as $build)

    <h2>建築物ID：{{ $build->build_id }}
    </h2>
    <p>事務所名：{{ $build->office}}</p>
    <p>場所：{{$build->place}}</p>
    <p>竣工日：{{$build->completionDate}}</p>
    <p>{{ link_to("/build/{$build->build_id}/show", '続きを読む', array('class' => 'btn btn-primary')) }}</p>
    <hr />

    @endforeach
    @endisset


</div>

@stop