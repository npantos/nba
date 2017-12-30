@extends('layouts.master')

@section('title')
    NBA
@endsection

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/news">News</a></li>
        <li class="breadcrumb-item active">Page {{ $news->currentPage() }}</li>

    </ol>
    <div class="row">
        @foreach ($news as $one_news)
            <div class="col-6">
                <div class="jumbotron mb-5">
                    <h1><a href="{{ route('news',['id'=>$one_news->id]) }}">{{$one_news->title}}</a></h1>
                    <p>Author: {{$one_news->user->name}}</p>
                    <p><img class="img-fluid" src="{{$one_news->image}}" alt=""></p>
                    <p>{{str_limit($one_news->content, $limit = 150, $end = '...')}}</p>
                    <a href="{{ route('news',['id'=>$one_news->id]) }}" class="btn btn-primary float-right">Read More</a>
                </div>
            </div>
        @endforeach
            {{ $news->links() }}
    </div>
@endsection