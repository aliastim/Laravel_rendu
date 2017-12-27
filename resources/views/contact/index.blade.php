@extends('layouts.app')

@section('pageTitle', 'Contacts')

@section('content') <!--injecte ce contenu dans le yield -->

<div class="container">
    <div class="content">
        <h1 class="text-center">Liste des demandes de contact</h1><br>
        <div class="row">


                <div class="col-md-12 text-center">
                    <table class="table table-hover">

                        <tr class="active">
                            <td><B>Nom</B></td>
                            <td><B>Prénom</B></td>
                            <td><B>Email</B></td>
                            <td><B>Objet</B></td>
                            <td><B>Sujet</B></td>
                        </tr>

                        @foreach ($contacts as $post)

                            <tr class="">
                                <td>{{ $post->name }}</td>
                                <td>{{ $post->firstname }}</td>
                                <td>{{ $post->email }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->subject }}</td>
                            </tr>

                        @endforeach

                    </table>
                </div>


        </div>
    </div>
</div>


@endsection
