@extends('layouts.app')
@section('content')

<div class="col-xs-8 col-xs-offset-2">
    <div class="mb-4">
        @foreach ($akiyas as $akiya)
        <p>{{ link_to("/akiya/{$akiya->id}/show", '続きを読む', array('class' => 'btn btn-primary')) }}</p>
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

@stop
