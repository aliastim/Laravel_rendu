@extends('layouts.app')

@section('pageTitle', 'Commentaires')

@section('content') <!--injecte ce contenu dans le yield -->

<div class="container">
    <div class="content">
        <h1 class="text-center">Liste des commentaires</h1>
        <div class="row">

            @foreach ($comments as $post)
                <div class="col-md-6 text-center">
                    <h3>{{ $post->username }}</h3>
                    <p>{{ $post->comment }}</p>

                </div>
            @endforeach

        </div>
    </div>
</div>


@endsection
