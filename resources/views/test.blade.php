<!DOCTYPE html>
<html>
<head>

<style>
    /* CSS to style the table and report card */
    table {
        border-collapse: collapse;
        width: 130%;
      }
      body{
          width: 22cm;
          height: 29.7cm;
          margin: 15cm;
          margin-top: 2cm;
      }
      th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
      }

      th {
        background-color: #f2f2f2;
      }
      .logo{
          padding-left:09%;
          padding-right: 3%;
          width: 15%;
      }
      /* CSS to style the second table */
      .small-table {
        width: 59%;
      }
      .intro{
        padding-left: 19.3%;
        font-size: 200%;
      }
      .intro1{
        padding-left: 6%;
        font-size: 150%;
      }
      .intro2{
        padding-left: 12%;
        font-size: 270%;
      }
      .intro3{
        margin-left: 48%;
        font-size: 120%;
      }
      .header{
        font-size: 101%;
      }
      .rebGauche{
          text-align: center;
          font-size: 125%;
      }
      .rebDroite{
          text-align: center;
          font-size: 125%;
      }
      .headerFlex{
          display:flex;
          align-items: center;
      }
      #Matricule{

          padding-left: 29%;
      }
      #Matricule1{
          padding-left: 56%;
      }
      #Matricule3{
          padding-left: 38.4%;
      }
      #Matricule4{
          padding-left: 6.5%;
      }
      #Matricule5{
          padding-left: 18%;
      }
      #Matricule2{
          padding-left: 45%      }
      #Matricule7{
          padding-left: 63%;
      }
      #tabs{
          text-align: center;
      }
      #legend{
        display: flex;
        align-items: center;
        margin-left: 10%;
        margin-top: 5%;
        padding-bottom: 5%;
      }
      #legend1{
        margin-left: 30%;
      }
      #legend2{
        width: 400px;
      }
      #legend3{
        width: 1700px;
      }
      #last{
        padding-left: 30%;
        text-align: center;
        font-size: large;
      }
      #last1{
        text-align: left;
      }
</style>
  <title>Releve de notes</title>
  <link rel="stylesheet" href="/styles.css">
</head>
<body>
  <header id="legend3">
    <div>
        <div class="headerFlex">
            <div class="rebGauche">
                <p>
                    <h3>REPUBLIQUE DU CAMEROUN<br></h3>
                    <i>Paix - Travail - Patrie</i>
                        <p>------------------</p>
                    <h3>UNIVERSITE DE YAOUNDE I</h3>
                </p>
            </div>
            <img class="logo" src="/img/logo.jpg" alt="Logo">
            <div class="rebDroite">
                <p>
                    <h3>REPUBLIC OF CAMEROON</h3>
                    <i>Peace - Work - Fatherland</i>
                           <p>----------------</p>
                    <h3>UNIVERSITY OF YAOUNDE I</h3>
                </p>
            </div>
        </div>
    </div>
    <div>
      <b class="intro">FACULTE DES SCIENCES</b> <br>
        <i class="intro1">BP/P.O Box 812 Yaoundé-CAMEROUN / Tel:222 234 496 / Email: diplome@facsciences.ut1.cm</i>
            <br><b class="intro2">RELEVE DE NOTES/TRANSCRIPT</b><br>
        <div class="intro3">
          <b>N°:</b>{{$data['etudiant']->matricule}}/DTP/{{$data['inscription']->niveau->niveau}}/FS/ICT/222021<br>
        </div>

    </div>
  </header>
  <section>
       <div class="header">

            <div>
                <b>Noms et Prénoms :</b> {{$data['etudiant']->nom}} {{$data['etudiant']->prenom}}
                <b id="Matricule">Matricule :</b>{{$data['etudiant']->matricule}}
                <br><i>Surname and Name : </i><i id="Matricule1">Registration N°:</i></p>
            </div>
            <div>
                <b>Né(e) le :</b>   {{$data['etudiant']->datenaiss}}
                <b id="Matricule">A : </b>  {{$data['etudiant']->lieu}}
                <br><i>Born on : </i><i id="Matricule3">At:</i></p>
            </div>
            <div>
                <b>Domaine</b> :</b> {{$data['inscription']->filiere->departement->nomdepartement}}
                <br><i>Domain : </i>
            </div>
            <div>
                <b>Niveau :</b> {{$data['inscription']->niveau->niveau}}
                <b id="Matricule4">Fillière :</b> {{$data['inscription']->filiere->intitulefiliere}}
                <br><i>Level : </i><i id="Matricule5">Discipline :</i></p>
            </div>
            <div>
                <b>Spécialité :</b> {{$data['inscription']->filiere->specialite->nomspecialite}}
                <b id="Matricule2">Année Academique :</b> {{$data['inscription']->anneAcademique->annee}}
                <br><i>Option : </i><i id="Matricule7"> Academic Year :</i></p>
            </div>
       </div>
    <table>
      <tr>
        <th id="tabs">Code UE</th>
        <th id="tabs">Intitulé de l'UE/UE Title</th>
        <th id="tabs">Crédit <br> Credit</th>
        <th id="tabs">Moy  <br>/100</th>
        <th id="tabs">Mention  <br>Grade</th>
        <th id="tabs">Semestre  <br>Semester</th>
        <th id="tabs">Année  <br>Year</th>
        <th id="tabs">Décision <br> Decision</th>
      </tr>
        @foreach( $data['notes'] as $note)
            <tr>

                <td id="tabs">{{$note->matiere?$note->matiere->codeue:"--"}}</td>
                <td>{{$note->matiere?$note->matiere->intituleue:"--"}}</td>
                <td>{{$note->matiere?$note->matiere->nbrecredit:"--"}}</td>
                <td>{{ $note->participation?$note->participation->appends["noteFinale"]:"pas de note"}}</td>
                <td id="tabs">{{ $note->mention}}</td>
                <td id="tabs">{{ $note->ue->session_id}}</td>
                <td id="tabs">2021</td>
                <td>{{ $note->decision}}</td>
            </tr>


        @endforeach
    </table>
    <div id="legend">
      <div>
        <br><u>Légende :</u><br>
        <div>
        <i>
          CA  : Capitalisé <br>
        CANT : Capitalisé Non Tranférable <br>
        NC   : Non Capitalisé
        </i>
        </div>
      </div>

      <div id="legend1">
        Crédits Capitalisés : <b> </b>{{$data['credit']->cca}}/{{$data['credit']->totalCredit}} (<b>{{$data['credit']->pourcentage}} %</b>)<br>
        Moyenne Générale Pondérée (MGP): <b>{{$data['mgp_decision']->mgp}}</b> /2 <br>
        Décision : <b>{{$data['mgp_decision']->decision}}</b>
      </div>
    </div>

    <table class="small-table">
      <tr>
        <th id="tabs">Notesur <br>100</th>
        <th id="tabs">Cote</th>
        <th id="tabs">Qualité de <br>points</th>
        <th id="tabs">Mention</th>
      </tr>
      <tr>
        <td id="tabs"> > = 80</td>
        <td id="tabs">A</td>
        <td id="tabs">4 , 00</td>
        <td id="tabs">Trés bien</td>
      </tr>
      <tr>
        <td id="tabs"> 75 - 79</td>
        <td id="tabs">A -</td>
        <td id="tabs">3 , 70</td>
        <td id="tabs">Bien</td>
      </tr>
      <tr>
        <td id="tabs"> 70 - 74</td>
        <td id="tabs">B +</td>
        <td id="tabs">3 , 30</td>
        <td id="tabs">Bien</td>
      </tr>
      <tr>
        <td id="tabs"> 65 - 69</td>
        <td id="tabs">B</td>
        <td id="tabs">3 , 00</td>
        <td id="tabs">Assez bien</td>
      </tr>
      <tr>
        <td id="tabs"> 60 - 64</td>
        <td id="tabs">B -</td>
        <td id="tabs">2 , 70</td>
        <td id="tabs">Assez bien</td>
      </tr>
      <tr>
        <td id="tabs"> 55 - 59</td>
        <td id="tabs">C +</td>
        <td id="tabs">2 , 30</td>
        <td id="tabs">Passable</td>
      </tr>
      <tr>
        <td id="tabs"> 50 - 54</td>
        <td id="tabs">C</td>
        <td id="tabs">2 , 00</td>
        <td id="tabs">Passable</td>
      </tr>
      <tr>
        <td id="tabs"> 45 - 49</td>
        <td id="tabs">C -</td>
        <td id="tabs">1 , 70</td>
        <td id="tabs">Crédits capitalisés mais <br>non tranferable </td>
      </tr>
      <tr>
        <td id="tabs"> 40 - 44</td>
        <td id="tabs">D +</td>
        <td id="tabs">1 , 30</td>
        <td id="tabs">Crédits capitalisés mais <br>non tranferable </td>
      </tr>
      <tr>
        <td id="tabs"> 35 - 39</td>
        <td id="tabs">D</td>
        <td id="tabs">1 , 00</td>
        <td id="tabs">Crédits capitalisés mais <br>non tranferable </td>
      </tr>
      <tr>
        <td id="tabs"> 30 - 35</td>
        <td id="tabs">E</td>
        <td id="tabs">0 , 00</td>
        <td id="tabs"> Echec </td>
      </tr>
      <tr>
        <td id="tabs"> < 20 </td>
        <td id="tabs">F</td>
        <td id="tabs">0 , 00</td>
        <td id="tabs"> Echec </td>
      </tr>
    </table>
  </section>
  <footer>
   <div  id="legend">
    <div id="legend2" >
     <em> Le president du jury <br> The president of the jury</em>
    </div>
    <div id="legend1">
   <em>  Yaounde,le ..............  <br>Le Chef de Departement   <br>The Head of Department</em>



    </div>
   </div>
   <div id="last">
    <p>NB: Il n'est délivré qu'un seul exemplaire de relevé de notes. Le titulaire peut établir et faire certifier des copies conformes.</p>
   <p>Only one transcript shall be delivered. It is the owner's interest to make certified true copies.</p>
   <p id="last1">1- Original</p>
    <p> <i>&copy;Copyrigth GICA - Imprimé &middot; le {{date('d/m/Y') }}</i></p>
   </div>
  </footer>
</body>
</html>
