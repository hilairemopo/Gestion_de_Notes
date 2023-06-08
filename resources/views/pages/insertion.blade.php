@extends('layouts.default1')
@section('contente')
    @include('includes.script')
    <div class="container">
   <h2 > Liste des Etudiant A inscrire</h2>
    <table class="table table-bordered">
        <thead style="color: #0E993C">
        <tr>
            <th>Matricule</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Date de Naissance</th>
            <th>Lieu</th>
            <th>Sex</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody style="color:#FFFFFF">
        @foreach($students as $student)
        <tr>

            <td>{{$student->matricule}}</td>
            <td>{{$student->nom}}</td>
            <td>{{$student->prenom}}</td>
            <td>{{$student->datenaiss}}</td>
            <td>{{$student->lieu}}</td>
            <td>{{$student->sex}}</td>
            <td>

                @if($student->isInscrit)

                    <a   href="#" class=" bouton-poster col m2 btn grey darken-2 text-success" >

                        Inscrit
                    </a>

                @else

                    <a   href="{{ url('form_inscription',$student-> id) }}"class=" bouton-poster col m2 btn grey darken-2 text-danger" >
                        Non Inscrit
                    </a>
                @endif
            </td>

        </tr>
        @endforeach
        </tbody>


    </table>

    </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <p>Copyright © 2023 All rights reserved.</p>
        </div>
    </div>
    </div>

@stop
