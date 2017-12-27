@extends('layouts.master')

@section('title')
    NBA :: {{$teams->name}}
@endsection

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/teams">Teams</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('teams',['id'=>$teams->id]) }}">{{$teams->name}}</a></li>
    </ol>
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
            <h1><a href="{{ route('players',['id'=>$player->id]) }}">{{$player->first_name}} {{$player->last_name}}</a>
            </h1>
            <a href="{{ route('players',['id'=>$player->id]) }}" class="btn btn-primary float-right">Read More</a>
        </div>
    @endforeach
    <form method="POST" action="{{ route('comments') }}">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="body">Comments</label>
            <textarea class="form-control" id="content" name="content"></textarea>

        </div>
        <input type="hidden" name="team_id" value="{{$teams->id}}">
        <input type="hidden" name="user_id" value="{{Auth()->user()->id}}">


        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    @if (count($errors->all()) > 0)
        @foreach($errors->all() as $error)
            <div class="form-group">
                <div class="alert alert-danger">
                    <li>{{ $error }}</li>
                </div>
            </div>
        @endforeach
    @endif
    @foreach ($teams->comments as $comment)

        <div class="card border-dark mb-3">
            <div class="card-header">{{$comment->user->name}}</div>
            <div class="card-body">
                <p class="card-text">{{$comment->content}}</p>
            </div>
        </div>

    @endforeach

@endsection



