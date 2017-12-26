@extends('layouts.master')

@section('title')
    NBA
@endsection

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/players">Players</a></li>
    </ol>
    <div class="row">
        @foreach ($players as $player)
            <div class="col-6">
                <div class="jumbotron mb-5">
                    <h1>
                        <a href="{{ route('players',['id'=>$player->id]) }}">{{$player->first_name}} {{$player->last_name}}</a>
                    </h1>
                    <a href="{{ route('players',['id'=>$player->id]) }}" class="btn btn-primary float-right">Read
                        More</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection