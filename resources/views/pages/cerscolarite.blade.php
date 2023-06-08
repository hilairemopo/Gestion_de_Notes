<!DOCTYPE html>
<html>
<head>
    <title>Certificat de scolarite</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sc.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6  "  style=" border-right: solid;">
            <div class="row">
                <div class="col-md-4 text-center">

                    <h6 >REPUBLIQUE DU CAMEROUN</h6>
                    <div class="m-0">  <i>Paix-Travail-Patrie</i></div>
                    <h6>UNIVERSITE DE YAOUNDE I</h6>
                    <p>------------------</p>
                    <h6>FACULTE DES SCIENCES</h6>
                    BP: 812 Yaoundé <br>
                    Tél / Fax : (237) 22 23 44 96  <br>
                    Email: facsciences@uy1.******.cm

                </div>
                <div class="col-md-4 text-center">
                    <img class="logo" src="/img/logo.jpg" alt="Logo" width="185" />
                </div>
                <div class="col-md-4 text-center">

                    <h6>REPUBLIC OF CAMEROON</h6>
                   <div> <i>Peace-Work-Fatherland</i></div>
                    <h6>THE UNIVERSITY OF YAOUNDE I</h6>
                    <p>------------------</p>
                    <h6>FACULTY OF SCIENCE</h6>
                    P.O. Box 812 Yaounde
                    Tél / Fax : (227) 22 23 44 96 <br>
                    Email: facsciences@uy1.******.cm
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <h4 class="intro2">CERTIFICAT DE SCOLARITE  </h4>
                    <h4 class="intro">SCHOOL CERTIFICATE</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ">
                    <div  style="position: relative;left: 497px;">N°: <u>0001311/SBM/UY1/FS/D________</u></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 float-end">
                    <p >ANNEE ACADEMIQUE : <u>{{$info['anneeAcademique']->annee}}__________</u>
                        <p><i > ACADEMIC YEAR</i></p>

                    <div class="text-center">
                        <b>Le Doyen de la Faculté des Sciences, soussigné , atteste que:</b> <br>
                        <b><i>The Dean of the Faculty of Science undersigned certifies that:</i></b>
                    </div>

                    <div>
                        <b>M. Mlle <u>________________________________{{$info['etudiant']->nom}},{{$info['etudiant']->prenom}}_________________________________________________________________________________</u></b>
                        <br><i>Mr.Mme </i>
                    </div> <br>
                    <div>
                        <b>Né(e) le _________________________{{$info['etudiant']->datenaiss}}___________<u></u></b>
                        <b id="Matricule2">à <u>________________{{$info['etudiant']->lieu}}_________________________________</u> </b>
                        <br><i>Born on </i><i id="Matricule6">at:</i></p>
                    </div>
                    <div>
                        <b>Est inscrit (e) à la faculté des sciences sous le matricule </b>
                        <b id="Matricule5">Mle <u>___________{{$info['etudiant']->matricule}}_______________________</u> </b>
                        <br><i>Is registered in the faculty of Science under the registration number</i><i id="Matricule8"><b>Reg N°</b></i></p>
                    </div>
                    <div>
                        <b>Fillier <u>_________________{{$info['specialite']->nomspecialite}}________________________________</u></b>
                        <b id="Matricule2">Niveau <u>_________________{{$info['niveau']->niveau}}________________________</u> </b>
                        <br><i>Discipline </i><i id="Matricule3">Level</i></p>
                    </div>
                    <div>
                        <b>Option / Spécialité<u>______{{$info['filiere']->descriptionfiliere}}________________________</u></b>
                        <br><i>Option </i>
                    </div> <br>
                    <div id="last">
                        <b>En foi de quoi le présent certificat est établi et lui est delivré pour servir et valoir ce que de droit.</b> <br>
                        <b><i>In witness whereof the present certificate is issued.</i></b>
                    </div><br>
                    <div style="position: relative;left: 497px;">
                        <b>Yaoundé, le / de</b><br>
                        <b>P/Le Doyen de la Faculté des Sciences et P.O</b>
                        <br> <i>The Dean of the Faculty of Science</i>
                    </div>

                    <div style="
    margin-top: 79px;
">
                        <p>N.B: Un seul certificat de scolarité est délivrée par année et par niveau. <br><i>Only one success school certificate is issued for each year and each level</i></p>
                    </div>


                </div>
            </div>

            <div class="row" style="margin-top: 19px;">
                <div class="col-md-4"> <i id="Matricule2"> imprimé le : 27/01/2023 a 12:54</i></div>
                <div class="col-md-6">   <i id="Matricule8">Cellule informatique de la Faculté des Sciences</i></div>
                <div class="col-md-2">   <i id="Matricule5">Copyright GICA</i></div>





            </div>
        </div >

        <div class="col-md-6  ">
            <div class="row">
                <div class="col-md-4 text-center">

                    <h6 >REPUBLIQUE DU CAMEROUN</h6>
                    <div class="m-0">  <i>Paix-Travail-Patrie</i></div>
                    <h6>UNIVERSITE DE YAOUNDE I</h6>
                    <p>------------------</p>
                    <h6>FACULTE DES SCIENCES</h6>
                    BP: 812 Yaoundé <br>
                    Tél / Fax : (237) 22 23 44 96  <br>
                    Email: facsciences@uy1.******.cm

                </div>
                <div class="col-md-4 text-center">
                    <img class="logo" src="/img/logo.jpg" alt="Logo" width="185" />
                </div>
                <div class="col-md-4 text-center">

                    <h6>REPUBLIC OF CAMEROON</h6>
                    <div> <i>Peace-Work-Fatherland</i></div>
                    <h6>THE UNIVERSITY OF YAOUNDE I</h6>
                    <p>------------------</p>
                    <h6>FACULTY OF SCIENCE</h6>
                    P.O. Box 812 Yaounde
                    Tél / Fax : (227) 22 23 44 96 <br>
                    Email: facsciences@uy1.******.cm
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <h4 class="intro2">CERTIFICAT DE SCOLARITE  </h4>
                    <h4 class="intro">SCHOOL CERTIFICATE</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 ">
                    <div  style="position: relative;left: 497px;">N°: <u>0001311/SBM/UY1/FS/D________</u></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 float-end">
                    <p >ANNEE ACADEMIQUE : <u>{{$info['anneeAcademique']->annee}}__________</u>
                    <p><i > ACADEMIC YEAR</i></p>
                    <div class="text-center">
                        <b>Le Doyen de la Faculté des Sciences, soussigné , atteste que:</b> <br>
                        <b><i>The Dean of the Faculty of Science undersigned certifies that:</i></b>
                    </div>

                    <div>
                        <b>M. Mlle <u>________________________________{{$info['etudiant']->nom}},{{$info['etudiant']->prenom}}_________________________________________________________________________________</u></b>
                        <br><i>Mr.Mme </i>
                    </div> <br>
                    <div>
                        <b>Né(e) le _________________________{{$info['etudiant']->datenaiss}}___________<u></u></b>
                        <b id="Matricule2">à <u>________________{{$info['etudiant']->lieu}}_________________________________</u> </b>
                        <br><i>Born on </i><i id="Matricule6">at:</i></p>
                    </div>
                    <div>
                        <b>Est inscrit (e) à la faculté des sciences sous le matricule </b>
                        <b id="Matricule5">Mle <u>___________{{$info['etudiant']->matricule}}_______________________</u> </b>
                        <br><i>Is registered in the faculty of Science under the registration number</i><i id="Matricule8"><b>Reg N°</b></i></p>
                    </div>
                    <div>
                        <b>Fillier <u>_________________{{$info['specialite']->nomspecialite}}________________________________</u></b>
                        <b id="Matricule2">Niveau <u>_________________{{$info['niveau']->niveau}}________________________</u> </b>
                        <br><i>Discipline </i><i id="Matricule3">Level</i></p>
                    </div>
                    <div>
                        <b>Option / Spécialité<u>______{{$info['filiere']->descriptionfiliere}}________________________</u></b>
                        <br><i>Option </i>
                    </div> <br>
                    <div id="last">
                        <b>En foi de quoi le présent certificat est établi et lui est delivré pour servir et valoir ce que de droit.</b> <br>
                        <b><i>In witness whereof the present certificate is issued.</i></b>
                    </div><br>
                    <div style="position: relative;left: 497px;">
                        <b>Yaoundé, le / de</b><br>
                        <b>P/Le Doyen de la Faculté des Sciences et P.O</b>
                        <br> <i>The Dean of the Faculty of Science</i>
                    </div>

                    <div style="
    margin-top: 79px;
">
                        <p>N.B: Un seul certificat de scolarité est délivrée par année et par niveau. <br><i>Only one success school certificate is issued for each year and each level</i></p>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: 19px;">
                <div class="col-md-4"> <i id="Matricule2"> imprimé le : 27/01/2023 a 12:54</i></div>
                <div class="col-md-6">   <i id="Matricule8">Cellule informatique de la Faculté des Sciences</i></div>
                <div class="col-md-2">   <i id="Matricule5">Copyright GICA</i></div>





            </div>
        </div>
    </div>

</div>
</div>
</div>


</body>
</html>
