<!DOCTYPE html>
<html>
<head>
    <title>Proces Verbale</title>
    <link rel="stylesheet" href="{{ asset('css/stylespvr.css') }}">
</head>
<body>
<header id="legend3">
    <div>
        <div class="headerFlex">
            <div class="rebGauche">
                <p>
                <h3>REPUBLIQUE DU CAMEROUN<br></h3>
                <i>Paix - Travail - Patrie</i>
                <h3>UNIVERSITE DE YAOUNDE I</h3>
                <b>FACULTE DES SCIENCES</b> <br><br>
                BP/P.O.Box 812 Yaoundé-CAMEROUN / <br><br>
                Tél : 222 234 496 / Email:
                diplome@facsciences.uy1.cm
                </p>
            </div>
            <img class="logo" src="/img/logo.jpg" alt="Logo">
            <div class="rebDroite">
                <p>
                <h3>REPUBLIC OF CAMEROON</h3>
                <i>Peace - Work - Fatherland</i>
                <h3>UNIVERSITY OF YAOUNDE I</h3>
                <b>FACULTE DES SCIENCES</b> <br><br>
                BP/P.O.Box 812 Yaoundé-CAMEROUN / <br><br>
                Tél : 222 234 496 / Email:
                diplome@facsciences.uy1.cm
                </p>
            </div>
        </div>
    </div>
    <div>
        <b class="intro2">PROCES VERBAL RECAPITULATIF</b> <br> <br>
        <div class="intro1">{{$filiere->intitulefiliere}}- {{ $filiere->descriptionfiliere}}<br>
        </div>
        <br><div class="intro3">SPECIALITE : {{$filiere->specialite_id}}</div> <br>
        <div class="intro4">GRADE :{{$niveau->niveau}} SEMESTRE : Tous Année académique : {{$annee->annee}}</div>
    </div> <br>
    </div>
</header>
<section>
    <table>
        <tr>
            <th id="tabs">NUM</th>
            <th id="tabs">NOMS ET PRENOMS</th>
            <th id="tabs">MATRICULE</th>
            <th id="tabs">NIVEAU</th>
            @foreach($matieres as $matiere)
            <th id="tabs">{{$matiere->intituleue}}</th>
            @endforeach
            <th id="tabs">Crd</th>
            <th id="tabs">Crd</th>
            <th id="tabs">%CAP</th>
            <th id="tabs">MGP</th>
            <th id="tabs">DEC</th>
        </tr>
        <tr>
            <th id="tabs"></th>
            <th id="tabs"></th>
            <th id="tabs"></th>
            <th id="tabs"></th>
            @foreach($matieres as $matiere)
                <td id="tabs">{{$matiere->nbrecredit}}</td>


            @endforeach


            <th id="tabs">CAP</th>
            <th id="tabs">CHOI</th>
            <th id="tabs"></th>
            <th id="tabs"></th>
            <th id="tabs"></th>


        </tr>
        @foreach($etudiants as $etudiant)
        <tr>

            <td id="tabs">{{$etudiant->etudiant->id}}</td>
                <td id="tabs">{{$etudiant->etudiant->nom}}{{$etudiant->etudiant->prenom}} <br> </td>
                <td id="tabs">{{$etudiant->etudiant->matricule}}</td>
            <td>{{$niveau->niveau}}</td>


            @foreach($matieres as $matiere)
                <td>
               {{\App\Http\Controllers\PvrController::getNoteMatiere($matiere->id,$etudiant)}}
            </td>
                @endforeach

             <td> </td>
            <td> {{$nbrecredit}}</td>
            <td> </td>
            <td>  {{$etudiant->decision->mgp}}</td>
            <td>  {{$etudiant->decision->decision}}</td>


        </tr>

        @endforeach





    </table>
</section>
<footer>
    <div id="last">
        <p><b>#################################</b></p>
        <p><b>TAUX DE REUSSITE</b></p>
        <p><b>#################################</b></p>
    </div>
    <table>
        <tr>
            <th id="tabs">Filière</th>
            <th id="tabs">Grade</th>
            <th id="tabs">Niveau</th>
            <th id="tabs">Année</th>
            <th id="tabs">Semestre</th>
            <th id="tabs">Effectifs</th>
            <th id="tabs">ADMIS</th>
            <th id="tabs">%ADMIS</th>
            <th id="tabs">AUTORISE</th>
            <th id="tabs">%AUTORISE</th>
            <th id="tabs">ECHEC</th>
            <th id="tabs">%ECHEC</th>
        </tr>
        <tr>
            <td id="tabs1">ICT</td>
            <td id="tabs1">L</td>
            <td id="tabs1">{{$niveau->niveau}} </td>
            <td id="tabs1">{{$annee->annee}}</td>
            <td id="tabs1">0</td>
            <td id="tabs1"> 11</td>
            <td id="tabs1">{{$nomberAdmins}}</td>
            <td id="tabs1">78,57</td>
            <td id="tabs1">0</td>
            <td id="tabs1">0.000</td>
            <td id="tabs1">18</td>
            <td id="tabs1">21.42</td>
        </tr>
    </table>
</footer>
</body>
</html>
