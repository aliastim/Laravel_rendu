@extends('layouts.app')

@section('pageTitle', 'Demande de contact')

@section('content') <!--injecte ce contenu dans le yield -->

<div class="container">
    <div class="row">
        <h1 class="text-center">Demande de contact</h1>
        <br><br>

        @if(count($errors)> 0)
            <ul class="bg-danger">

                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endIf


        <form method="POST" action="{{route('contact.store')}}" class="text-center"> <!-- on appelle la méthode store qui permet de créer des utilisateurs-->
            {{ csrf_field() }}

            <div class="form-group {{ $errors->has('name') ? 'has-error' : "" }}">
                <input class="form-control" type="text" name="name" id="name" placeholder="Name" value="{{ old('name') }}">
            </div>

            <br>

            <div class="form-group {{ $errors->has('firstname') ? 'has-error' : "" }}">
                <input class="form-control" type="text" name="firstname" id="firstname" placeholder="Firstname" value="{{ old('firstname') }}">
            </div>

            <br>

            <div class="form-group {{ $errors->has('email') ? 'has-error' : "" }}">
                <input class="form-control" type="text" name="email" id="email" placeholder="Email" value="{{ old('email') }}">
            </div>

            <br>

            <div class="form-group {{ $errors->has('title') ? 'has-error' : "" }}">
                <input class="form-control" type="text" name="title" id="title" placeholder="Title" value="{{ old('title') }}">
            </div>

            <br>

            <div class="form-group {{ $errors->has('subject') ? 'has-error' : "" }}">
                <textarea class="form-control" name="subject" id="subject" placeholder="Subject" cols="30" rows="9">{{ old('subject')}}</textarea>
            </div>

            <br>

            <br>

            <input class="btn btn-default" type="submit" value="Envoyer">

        </form>

        <br>


    </div>
</div>


@endsection
