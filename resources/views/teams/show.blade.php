@extends('layouts.master')

@section('title')
    NBA :: {{$teams->name}}
@endsection

@section('content')
    <div class="jumbotron">

        <h1>{{$teams->name}}</h1>
        <p>&nbsp;</p>
        <div class="row">
            <div class="col-6"><img src="/images/nba-dummy.jpeg" alt="" class="img-fluid"></div>
            <div class="col-6">
                <h4>Address: {{$teams->address}}</h4>
                <h4>Email: {{$teams->email}}</h4>
                <h4>City: {{$teams->city}}</h4>
            </div>
        </div>

        <p>&nbsp;</p>
        <p>{{$teams->storyline}}</p>
    </div>


            @foreach ($teams->players as $player)
                <div class="jumbotron mb-5">
                    <h1><a href="{{ route('players',['id'=>$player->id]) }}">{{$player->first_name}} {{$player->last_name}}</a></h1>
                    <a href="{{ route('players',['id'=>$player->id]) }}" class="btn btn-primary float-right">Read More</a>
                </div>
            @endforeach


@endsection



