@extends('layouts.app')

@section('pageTitle', 'Articles')

@section('content') <!--injecte ce contenu dans le yield -->

<div class="container">
    <div class="content">
        <h1 class="text-center">Mes articles</h1>
        <div class="row">

            @foreach ($articles as $post)
                <div class="col-md-6 text-center">
                    <h3>{{ $post->title }}</h3>
                    <p>{{ $post->body }}</p>
                    <a href="{{route('blog.show', $post->slug)}}" class="btn btn-default">BOUTON</a>
                </div>
            @endforeach

        </div>
    </div>
</div>


@endsection
