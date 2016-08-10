@extends('app')

@section('header')
    <style>
        .col-sm-4 {
            background-color: lightgrey;
            border: 1px dashed black;
            text-align: center;
            height: 80px;
            padding-top: 30px;
        }
    </style>
@stop

@section('content')
    @foreach($cards as $card)
        <div class="row">
            <div class="col-sm-4"><a href="/cards/{{ $card->id }}">{{ $card->title }}</a></div>
            <div class="col-sm-4"><a href="/cards/{{ $card->id }}">{{ $card->created_at }}</a></div>
            <div class="col-sm-4"><a href="/cards/{{ $card->id }}">{{ $card->updated_at }}</a></div>
        </div>
    @endforeach
@stop
