@extends('layouts.master')

@section('title')
    NBA :: {{$players->first_name}} {{$players->last_name}}
@endsection

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/players">Players</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('players',['id'=>$players->id]) }}">{{$players->first_name}} {{$players->last_name}}</a></li>
    </ol>
    <div class="jumbotron">

        <p>&nbsp;</p>
        <div class="row">
            <div class="col-6"><img src="/images/nba-dummy.jpeg" alt="" class="img-fluid"></div>
            <div class="col-6">
                <h1>{{$players->first_name}} {{$players->last_name}}</h1>
                <h4>Email: {{$players->email}}</h4>
                <h4>Team: <a href="{{ route('teams',['id'=>$players->team->id]) }}">{{$players->team->name}}</a></h4>
            </div>
        </div>
    </div>
@endsection



