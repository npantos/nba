@extends('layouts.master')

@section('title')
    NBA :: {{$news->tite}}
@endsection

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/news">News</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('news',['id'=>$news->id]) }}">{{$news->title}}</a></li>
    </ol>
    <div class="jumbotron">
        <h1>{{$news->title}}</h1>
        <p>Author: {{$news->user->name}}</p>
        <p><img class="img-fluid" src="{{$news->image}}" alt=""></p>
        <p>{{$news->content}}</p>
    </div>


@endsection



