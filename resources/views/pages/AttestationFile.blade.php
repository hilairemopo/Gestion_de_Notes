<!DOCTYPE html>
<html>
<head>
    <title>ATTESTATION DE REUSSITE</title>

    <link rel="stylesheet" href="{{ asset('css/stylesAttestation.css') }}">
</head>
<body>
<div class="demo-wrap">


</div>
<div id="double">
    <div>
        <header id="legend3">
            <div>
                <div class="headerFlex">
                    <div class="rebGauche">
                        <p>
                        <h3>REPUBLIQUE DU CAMEROUN<br></h3>
                        <i>Paix-Travail-Patrie</i>
                        <h3>UNIVERSITE DE YAOUNDE I</h3>
                        <p>------------------</p>
                        <b>FACULTE DES SCIENCES</b>
                        BP: 812 Yaoundé <br>
                        Tél / Fax : (237) 22 23 44 96  <br>
                        Email: facsciences@uy1.******.cm
                        </p>
                    </div>
                    <img class="logo" src="/img/logo.jpg" alt="Logo" width="89px">
                    <div class="rebDroite">
                        <p>
                        <h3>REPUBLIC OF CAMEROON</h3>
                        <i>Peace-Work-Fatherland</i>
                        <h3>THE UNIVERSITY OF YAOUNDE I</h3>
                        <p>------------------</p>
                        <b>FACULTY OF SCIENCE</b>
                        P.O. Box 812 Yaounde <br>
                        Tél / Fax : (227) 22 23 44 96 <br>
                        Email: facsciences@uy1.******.cm
                        </p>
                    </div>

                </div>
            </div>
            <div>
                <b class="intro2">ATTESTATION DE REUSSITE AU</b>
                <b class="intro2"><h1>DIPLOME DE LICENCE  PROFESSIONNELLE</h1></b>
            </div>
            <div class="intro4">
                <b>N°: <u>__________________________</u></b><br>
            </div>
        </header>
        <section>
            <div class="header">
                <div>
                    <b id="Matricule7"> <u>Le Doyen de la Faculté des Sciences de l'Université de Yaoundé I, soussigné </u></b>
                    <br><i id="Matricule7">The Dean of the Faculty of Science of the University of Yaounde I, undersigned</i></p>

                    <div id="last">
                        <b>Vu le procès-verbal des délibérations du jury en date du <u>____juiellet ____________________________________</u></b>
                        <br><b><i>Mindful of the offiicial report of the deliberations of the jury dated</i></b><br>
                        <b> <br> atteste que:</b>
                        <b> <br> certify that</i></b>
                    </div><br>
                    <div>
                        <b>M. Mlle <u>____{{$inscription->etudiant->nom}}__</u></b>
                        <b id="Matricule5">Mle <u>_{{  $inscription->etudiant->matricule}}</u> </b>
                        <br><i>Mr/Mrs/Miss</i><i id="Matricule6"><b>Reg N°</b></i></p>


                    </div> <br>
                    <div>
                        <b>Né(e) le <u>{{$inscription->etudiant->datenaiss}}</u></b>
                        <b id="Matricule2">à <u>{{  $inscription->etudiant->lieu}}</u> </b>
                        <br><i>Born on </i><i id="Matricule6">at:</i></p>
                    </div>
                    <div>
                        <b>a subi avec succès, les épreuves sanctionnant l'examen de la </b>
                        <br><i>has successfully fulfilled the requirements for the</i></p>
                    </div>
                    <div>
                        <div>
                            <b>Licence professionelle de:  <u>________________________________________________________</u></b>
                            <br><i>Professional Bachelor's Degree in</i>
                        </div> <br>
                        <div>
                            <b> Spécialité / Option <u>{{ $inscription->filiere->descriptionfiliere}}</u></b>
                            <br><i>Speciality / Option </i>
                        </div> <br>
                        <b>Session de <i id="Matricule2">Juillet 2022</i> avec une Moyenne Générale Pindérée (MGP) de {{2*($decision)}}crédits : 180 et la Moyenne</b>

                        <br><i>Session  </i><b id="Matricule2">with a Cumulative Grade Point Average (GPA) of : --{{2*($decision)}}- credit : 180 and the Grade</b></p>
                    </div>

                    <div id="last">
                        <b>En foi de quoi le présent certificat est établi et lui est delivré pour servir et valoir ce que de droit.</b> <br>
                        <b><i>In witness whereof the present certificate is issued.</i></b>
                    </div><br>
                    <table class="small-table">
                        <tr>
                            <th id="borderLeft">Système</th>
                            <th> de notation</th>
                            <th  id="borderRight"> / Grading</th>
                        </tr>
                        <tr>
                            <td id="tabs">MGP/4</td>
                            <td id="tabs">C</td>
                            <td id="tabs">Mention/Grade</td>
                        </tr>
                        <tr>
                            <td id="tabs"> 75 - 79</td>
                            <td id="tabs">A -</td>
                            <td id="tabs">3 , 70</td>

                        </tr>
                        <tr>
                            <td id="tabs"> 70 - 74</td>
                            <td id="tabs">B +</td>
                            <td id="tabs">3 , 30</td>

                        </tr>
                        <tr>
                            <td id="tabs"> 65 - 69</td>
                            <td id="tabs">B</td>
                            <td id="tabs">3 , 00</td>

                        </tr>
                        <tr>
                            <td id="tabs"> 60 - 64</td>
                            <td id="tabs">B -</td>
                            <td id="tabs">2 , 70</td>

                        </tr>
                        <tr>
                            <td id="tabs"> 55 - 59</td>
                            <td id="tabs">C +</td>
                            <td id="tabs">2 , 30</td>

                        </tr>
                        <tr>
                            <td id="tabs"> 50 - 54</td>
                            <td id="tabs">C</td>
                            <td id="tabs">2 , 00</td>

                        </tr>
                        <tr>
                            <td id="tabs"> 45 - 49</td>
                            <td id="tabs">C -</td>
                            <td id="tabs">1 , 70</td>

                        </tr>

                    </table>
                    <div class="intro">
                        <b id="Matricule1">Yaoundé, le / de</b><br>

                    </div>
                    <b class="intro1">Le Chef du Departement de <i><u>INFORMATIQUE</u></i></b>
                    <br> <i class="intro1">The Head of the Department</i>

                    <div>
                        <p>N.B: Il n'est délivrée qu'une seul attestation de reussite : le titulaire pourra en faire autant de copies conformes qu'il voudra. Le dernier lui sera delivrée plustard. <br><i>Only one success testimonial is issued : it is the interest of the owner to make as many certified true copies as he/she may desire. The later will be issued later.</i></p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
</div>
</body>
</html>
