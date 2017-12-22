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
        </div>
    </div>

@endsection