@extends('layouts.master')

@section('title')
NBA
@endsection

@section('content')

    <div class="row">
        <div class="col-8">
            @foreach ($players as $player)
                <div class="jumbotron mb-5">
                    <h1><a href="{{ route('players',['id'=>$player->id]) }}">{{$player->first_name}} {{$player->last_name}}</a></h1>
                    <a href="{{ route('players',['id'=>$player->id]) }}" class="btn btn-primary float-right">Read More</a>
                </div>
            @endforeach
        </div>
    </div>


@endsection