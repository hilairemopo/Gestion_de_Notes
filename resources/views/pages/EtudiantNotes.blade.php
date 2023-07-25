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
      q      <div class="col-md-6 col-md-6 col-sm-6 col-xs-12">
                <div class="text-center custom-login">

                    <h2 style="color: #0E993C">Veuiller Entrer les informations personnel de l'Etudiant</h2>
                </div>
                <div class="hpanel">
                    <div class="panel-body">
                        <form action="{{url('create')}}" id="loginForm" name="frs" method="post">
                            <input type="hidden" value="{{$matricule}}" id="matricule">
                            <input type="hidden" value="{{$filiere}}" id="filiere">
                            <input type="hidden" value="{{$niveau}}" id="niveau">
                            {{csrf_field()}}
                            <table class="table">
                                <tr>
                                    <td>Matiere</td>
                                    <td>Note CC</td>
                                    <td>Note TP</td>
                                    <td>Note Examen</td>
                                    <td>Note Ratrappage</td>
                                </tr>
                                @foreach($matieres as $matiere)
                                <tr >
                                    <td>{{$matiere->intituleue}}</td>
                                    <td attr="{{$matiere->id}}"><input class="form-control saveNote" dataMatiereId="{{$matiere->id}}" dataCompo="cc"> </td>
                                    <td><input class="form-control saveNote" dataMatiereId="{{$matiere->id}}" dataCompo="tp"/></td>
                                    <td><input class="form-control saveNote" dataMatiereId="{{$matiere->id}}" dataCompo="examen"/></td>
                                    <td><input class="form-control saveNote" dataMatiereId="{{$matiere->id}}" dataCompo="ratrappage"/></td>
                                </tr>
                                @endforeach
                            </table>

                        </form>
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


