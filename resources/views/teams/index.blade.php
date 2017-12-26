@extends('layouts.master')

@section('title')
NBA
@endsection

@section('content')

    <div class="row">
        <div class="col-8">
            @foreach ($teams as $team)
                <div class="jumbotron mb-5">
                    <h1><a href="{{ route('teams',['id'=>$team->id]) }}">{{$team->name}}</a></h1>
                    <a href="{{ route('teams',['id'=>$team->id]) }}" class="btn btn-primary float-right">Read More</a>
                </div>
            @endforeach
        </div>
    </div>


@endsection