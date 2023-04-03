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

                    <h2 style="color: #0E993C">Veuiller Entrer les informations personnel de l'Etudiant</h2>
                </div>
                <div class="hpanel">
                    <div class="panel-body">
                        <form action="{{url('create')}}" id="loginForm" name="frs" method="post">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>Matricule</label>
                                    <input class="form-control" name="matricule">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="sel1">Nom</label>
                                    <input class="form-control" name="nom">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Prenom</label>
                                    <input class="form-control" name="prenom">
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Date De Naissance</label>
                                    <input class="form-control" name="datenaiss" type="date">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Lieu</label>
                                    <input class="form-control" name="lieu">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Sex</label>
                                    <select class="form-control" id="sel1" name="sex">


                                            <option >F</option>
                                             <option >M</option>


                                    </select>

                                </div>
                                </div>



                            </div>
                            <div class="text-cen" >
                                <button class="btn btn-success loginbtn" type="submit" name="btn">Valider</button>
                                <button class="btn btn-default">Annuler</button>
                            </div>
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
