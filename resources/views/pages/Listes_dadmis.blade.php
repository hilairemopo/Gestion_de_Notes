<!DOCTYPE html>
<html>
<head>
    <title>Liste Des Admis</title>
     <link rel="stylesheet" href="{{ asset('css/stylesliste.css') }}">
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
                Tél : 222 234 496 / Email: <br><br>
                diplome@facsciences.uy1.cm
                </p>
            </div>
            <img class="logo" src="/img/logo.jpg" alt="Logo" width="185" />
            <div class="rebDroite">
                <p>
                <h3>REPUBLIC OF CAMEROON</h3>
                <i>Peace - Work - Fatherland</i>
                <h3>UNIVERSITY OF YAOUNDE I</h3>
                <b>FACULTE DES SCIENCES</b> <br><br>
                BP/P.O.Box 812 Yaoundé-CAMEROUN / <br><br>
                Tél : 222 234 496 / Email: <br><br>
                diplome@facsciences.uy1.cm
                </p>
            </div>
        </div>
    </div>
    <div>
        <b class="intro2">LISTE DES ADMIS</b> <br> <br>
        <div class="intro1">FILIERE : {{$filiere->specialite->nomspecialite}}  <br>
        </div>
        <br><div class="intro3">SPECIALITE : {{$filiere->intitulefiliere}}- {{$filiere->descriptionfiliere}}-</div> <br>
        <div class="intro4">GRADE : L2 SEMESTRE : Tous Année académique : 2021-2022</div>
    </div> <br>
</header>
<section>
    <table>
        <tr>



            <th id="tabs">NUM</th>
            <th id="tabs">NOM & PRENOM</th>
            <th id="tabs">MATRICULE</th>
            <th id="tabs">%CAP</th>
            <th id="tabs">MGP</th>
            <th id="tabs">DEC</th>

        </tr>

        @foreach($inscription as $insc)
        <tr>
        <td>{{$insc->inscription->etudiant->id}} </td>
            <td>{{$insc->inscription->etudiant->nom}} {{$insc->inscription->etudiant->prenom}}</td>
            <td>{{$insc->inscription->etudiant->matricule}}</td>
            <td>CAP</td>
            <td>{{$insc->mgps}}</td>
            <td>ADMIS</td>

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
            <th id="tabs">ECHEC</th>
            <th id="tabs">%ECHEC</th>

        </tr>
        <tr>
            <td id="tabs1">{{$filiere->intitulefiliere}}</td>
            <td id="tabs1">{{$niveau->id}}</td>
            <td id="tabs1">{{$niveau->niveau}}</td>
            <td id="tabs1">{{$annee->annee}}</td>
            <td id="tabs1">0</td>
            <td id="tabs1">{{ $countInscription }}</td>
            <td id="tabs1">{{$nomberAdmins}}</td>
            <td id="tabs1">{{$nomberAdmins/ $countInscription }}</td>
            <td id="tabs1">0</td>
            <td id="tabs1">{{$countInscription-$nomberAdmins}}</td>
            <td id="tabs1">{{($countInscription-$nomberAdmins)/$countInscription}}</td>

        </tr>
    </table>
</footer>
</body>
</html>
