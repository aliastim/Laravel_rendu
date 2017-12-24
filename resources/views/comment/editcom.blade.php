@extends('layouts.app')

@section('pageTitle', 'Edition commentaire')

@section('content') <!--injecte ce contenu dans le yield -->

<div class="container">
    <div class="row">
        <h1 class="text-center">Modification de commentaires</h1>
        <br><br>

        @if(count($errors)> 0)
            <ul class="bg-danger">

                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endIf


        <form method="get" action="{{route('comment.update', $comment-> id)}}">

            <div class="form-group {{ $errors->has('username') ? 'has-error' : "" }}">
                <input class="form-control" type="text" name="username" id="username" placeholder="Username" value="{{ $comment-> username }}">
            </div>

            <br>

            <div class="form-group {{ $errors->has('comment') ? 'has-error' : "" }}">
                <textarea class="form-control" name=comment id=comment" placeholder="Comment" cols="30" rows="9">{{ $comment-> comment}}</textarea>
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}"> <!-- résout un bug -->
            <input class="btn btn-default" type="submit" value="Poster">
        </form>




    </div>
</div>


@endsection