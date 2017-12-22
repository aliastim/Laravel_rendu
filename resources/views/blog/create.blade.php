@extends('layouts.app')

@section('content') <!--injecte ce contenu dans le yield -->

<div class="container">
    <div class="row">
        <h1 class="text-center">Formulaire de création d'articles</h1>
        <br><br>

        @if(count($errors)> 0)
        <ul class="bg-danger">

            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endIf


        <form method="POST" action="{{route('blog.store')}}" class="text-center"> <!-- on appelle la méthode store qui permet de créer des utilisateurs-->
            {{ csrf_field() }}

            <div class="form-group {{ $errors->has('title') ? 'has-error' : "" }}">
            <input class="form-control" type="text" name="title" id="title" placeholder="Title" value="{{ old('title') }}">
            </div>

            <br>

            <div class="form-group {{ $errors->has('title') ? 'has-error' : "" }}">
            <textarea class="form-control" name="body" id="body" placeholder="Texte" cols="30" rows="9">{{ old('body')}}</textarea>
            </div>

            <br>

            <div class="form-group">
                <select name="status" id="" class="form-control">
                    <option value="0">Brouillon</option>
                    <option value="1">Publié</option>
                </select>

            </div>

            <br>

            <input class="btn btn-default" type="submit" value="Sauvegarder">

        </form>


    </div>
</div>


@endsection
