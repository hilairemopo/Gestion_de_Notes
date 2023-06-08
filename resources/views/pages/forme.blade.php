@extends('layouts.default1')
@section('contente')
    <div class="color-line"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="back-link back-backend">
                    <a href="releve" class="btn btn-primary">Back to Dashboard</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
            <div class="col-md-6 col-md-6 col-sm-6 col-xs-12">
                <div class="text-center custom-login">

                    <h2 style="color: #0E993C">Veuiller Remplir Les informartions </h2>
                </div>
                <div class="hpanel">
                    <div class="panel-body">
                        <form action="{{url('created')}}" id="loginForm" name="frs" method="post">
                            @csrf
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="sel1">Etudiant</label>
                                    <input type="text" class="form-control" value="{{$etudiant->id}}" name="etudiant_id" >
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="sel1">Annee Academique</label>
                                    <select class="form-control" id="sel1" name="anneacademique_id">
                                    @foreach($année as $an)

                                            <option value="{{$an->id}}">{{$an->annee}}</option>

                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Niveau</label>
                                    <select class="form-control" id="sel1" name="niveau_id">

                                        @foreach($niveau as $nv)

                                        <option value="{{$nv->id}}">{{$nv->niveau}}</option>

                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>filiere</label>
                                    <select class="form-control" id="sel1" name="filiere_id">

                                        @foreach($filiere as $fil)

                                            <option value="{{$fil->id}}">{{$fil->intitulefiliere}}</option>

                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="sel1">Datepaeiment</label>
                                    <input type="date" class="form-control"  name="datepaiement" >
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="sel1">Numeroderecue</label>
                                    <input type="text" class="form-control"  name="numeroderecue" >
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="sel1">Recue de  paiement</label>
                                    <input type="text" class="form-control"  name="RecuePaiement" >
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="sel1">Montant</label>
                                    <input type="text" class="form-control"  name="montant">
                                </div>

                                <div class="form-group col-lg-12">
                                    <label for="sel1">Banque</label>
                                    <input type="text" class="form-control"  name="Banque" >
                                </div>





                            </div>
                            <div class="text-center">
                                <button class="btn btn-success loginbtn" type="submit" name="btn">Valider</button>
                                <button class="btn btn-default" >Annuler</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p>Copyright © 2023 All rights reserved.</p>
            </div>
        </div>
    </div>

@stop
