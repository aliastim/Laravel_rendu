@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">

            <h1>{{ $post->title }}</h1>
                @if($post->user)
                <h2><i>Auteur : {{$post->user->name}}</i></h2>
                @endif
            <p>{{ $post->body }}</p>

            </div>
            <div class="container">
            <div class="col-md-6 text-center col-md-offset-3">

                <hr>
                <h3 class="text-center">Votre commentaire</h3><br>
                <a href="{{route('comment.create')}}" class="btn btn-default">Votre commentaire</a>

            </div>
            </div>
        </div>
    </div>

@endsection