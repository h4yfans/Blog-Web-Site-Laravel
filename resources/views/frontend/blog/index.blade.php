@extends('layouts.master')

@section('title')
    Blog Index
@endsection

@section('styles')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
@endsection

@section('content')
    @foreach($posts as $post)
        <article class="blog-post">
            <h3>{{$post->title}}</h3>
            <span class="subtitle">{{$post->author}} | {{$post->created_at}}</span>
            <p>{{$post->body}}</p>
            <a href="#">Read More</a>
        </article>

    @endforeach

    @if($posts->lastPage() > 1)
        <section class="pagination">
            @if($posts->currentPage() !== 1)
                <a href="{{$posts->previousPageUrl() }}"><i class="fa fa-caret-left"></i></a>
            @endif
            @if($posts->currentPage() !== $posts->lastPage())
                <a href="{{$posts->nextPageUrl() }}"><i class="fa fa-caret-right"></i></a>
            @endif
        </section>
    @endif
@endsection