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
                <p>{{ $post->user_id }}</p>

            </div>
            <div class="container">
            <div class="col-md-6 text-center col-md-offset-3">

                <hr>
                <h3 class="text-center">Votre commentaire</h3><br>
                <form method="get" action="{{route('comment.create')}}">
                    <input type="hidden" name="numarticle" id="numarticle" value="{{ $post->title }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="btn btn-default" value="Votre commentaire">
                </form>
            </div>

                <div class="col-md-6 text-center col-md-offset-3">

                    <hr>
                    <h3 class="text-center">Liste des commentaires</h3><br>

                </div>

                @foreach ($comments as $post2)
                    @if ($post2->numarticle == $post->title)
                    <div class="col-md-6 text-center">
                        <h3>{{ $post2->username }}</h3>
                        <p>{{ $post2->comment }}</p>
                        <a href="{{route('comment.update', $post2->id)}}" class="btn btn-default">Modifer/Supprimer</a>

                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

@endsection