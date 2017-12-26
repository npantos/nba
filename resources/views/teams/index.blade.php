@extends('layouts.master')

@section('title')
    NBA
@endsection

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/teams">Teams</a></li>
    </ol>
    <div class="row">
        @foreach ($teams as $team)
            <div class="col-6">
                <div class="jumbotron mb-5">
                    <h1><a href="{{ route('teams',['id'=>$team->id]) }}">{{$team->name}}</a></h1>
                    <a href="{{ route('teams',['id'=>$team->id]) }}" class="btn btn-primary float-right">Read More</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection