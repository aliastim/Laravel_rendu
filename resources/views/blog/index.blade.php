@extends('layouts.app')

@section('pageTitle', 'Articles')

@section('content') <!--injecte ce contenu dans le yield -->

<div class="container">
    <div class="content">
        <h1 class="text-center">Liste des articles</h1>
        <div class="row">

        @foreach ($posts as $post)
            <div class="col-md-6 text-center">
                <h3>{{ $post->title }}</h3>
                <p>{{ $post->body }}</p>
                <a href="{{route('blog.show', $post->slug)}}" class="btn btn-default">Découvrir</a>
            </div>
        @endforeach

        </div>
    </div>
</div>


@endsection
