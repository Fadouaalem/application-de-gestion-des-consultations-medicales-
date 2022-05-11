<?php
        require_once 'dbconnect.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>MaConsultationMedicale</title>
  <!-- Favicons -->
  <link href="img/favicon.png" rel="shortcut icon" type="image/png">
  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>

  
</head>

<body >
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.php" class="logo"><b><span>Ma</span>Consultation<span>Medicale</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
      </div>
      <div style="margin:5px ">
<div class="top-menu" style="margin:5px 900px">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="index2.php" >home</a></li>
        </ul>
      </div>
      <div class="top-menu"style="margin:5px 1000px">
        <ul class="nav pull-right top-menu" >
          <li><a class="logout" href="aboutus.php">AboutUs</a></li>
        </ul>
      </div>
      <div class="top-menu" style="margin: 5px 1100px">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="contact.php">Contact</a></li>
        </ul>
      </div>
</div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="img/medecin.png" class="img-circle" width="100"></a></p>
         <h5 class="centered">CONSULTATION MEDICALE</h5>
          <li class="mt">
            <a  href="index.php">
            <img src="img/house-black-silhouette-without-door.png" width="25">
            <span style="font-size:15px"><strong>Accueil</strong></span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="listePatient.php">
            <img src="img/patient.png" width="25">
              <span style="font-size:15px"><strong>Patient</strong></span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="listeConsultation.php">
              <img src="img/medical.png" width="25">
              <span style="font-size:15px"><strong>Consultation</strong></span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="listeRdv.php">
              <img src="img/consultant (1).png" width="30">
              <span style="font-size:15px"><strong>Rendez-vous </strong></span>
              </a>
          </li>
          <li class="sub-menu">
            <a class="active" href="dossier.php">
              <img src="img/document.png" width="25">
              <span style="font-size:15px"><strong>Dossier Medical</strong></span>
              </a>          </li>
          <li class="sub-menu">
            <a href="ordonnance.php">
              <!--<i class="fa fa-th"></i>-->
              <img src="img/prescription.png" width="25">
              <span style="font-size:15px"><strong>Ordonnance</strong></span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="index2.php ">
              <!--<i class=" fa fa-bar-chart-o"></i>-->
              <img src="img/logout.png" width="25">
              <span style="font-size:15px"> <strong>Déconnexion</strong></span>
              </a>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
  <section id="main-content" style="min-height:90vh">
       
      <section class="wrapper">
     

  <?php 
                          try
                          {
                              // On se connecte à MySQL
                              $bdd = new PDO('mysql:host=localhost;dbname=db_healthcare;charset=utf8', 'root', '');
                                
                          }
                          catch(Exception $e)
                          {
                             
                               
                              die('Erreur : '.$e->getMessage());
                          }
$requet="select*from patient";
$select=$bdd->query($requet);    
$select0=$bdd->query($requet); 
$select4=$bdd->query($requet); 
?>
<div>
    <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    
    <link rel='stylesheet prefetch' href='http://cdn.datatables.net/1.10.10/css/dataTables.bootstrap.min.css'>


    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <?php
    //include 'home.php';
    ?>
</div>

<!-- fonction imprimer -->
<script>
function imprimer(divName) {
      var printContents = document.getElementById(divName).innerHTML;    
   var originalContents = document.body.innerHTML;      
   document.body.innerHTML = printContents;     
   window.print();     
   document.body.innerHTML = originalContents;
   }
</script>
 <?php 
                          try
                          {
                              // On se connecte à MySQL
                              $bdd = new PDO('mysql:host=localhost;dbname=db_healthcare;charset=utf8', 'root', '');
                                
                          }
                          catch(Exception $e)
                          {
                             
                               
                              die('Erreur : '.$e->getMessage());
                          }
$requet="select*from patient";
$select=$bdd->query($requet);    
$select0=$bdd->query($requet); 

?>

<!--Formulaire -->
 <div id='sectionAimprimer'>

<div id="add_data_Modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header"style="background-color:#BB8FCE ">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
               
                <h2 class="modal-title" style="color: black;" > <img src="image\img12.jpg" width="90" class="img-circle" ><strong> Fiche de Dossier</strong></h2>
            </div>
            <div class="modal-body">

                <br/>
                <form method="post" id="insert_form" action="ajouterDossier.php">
                   
                    <h4><b><u style="color:#AF7AC5 ;text-decoration:none;size:25px ;margin-right: 10px;" > <img src="image\medical-file.png" width="50" >                          Informations Dossier </u></b></h4>
                  
                    <div style=" margin-left:25px; border: 2px solid #AF7AC5 ;" >
                    <div style="margin:30px ">
                    <label><strong>N° Dossier</strong></label>
                    <input type="Number" name="id" id="id" class="form-control" />
                    <br/>
                    <label><strong> patient</strong></label>
                   <select name="nomp" id="nomp" class="form-control" >
                        
                          
                <?php
                        while($select1=$select->fetch()){?>
                          
                         <option value="<?=$select1['Id_patient'];?>"><?=$select1['Nom_patient']." ".$select1['Prenom_patient'];?></option><?php }?>

                    </select>
                    <br>
                    
                    <label for="id_patient"><strong>N° Patient</strong></label>
                    <select name="id_patient" id="id_patient" class="form-control" >
                      
                          
                <?php
                        while($select2=$select0->fetch()){?>
                          
                         <option value="<?=$select2['Id_patient'];?>"><?=$select2['Id_patient'];?></option><?php }?>
                        
                    </select>
                    <br/>
                    <label><strong>Nom Mutuelle</strong></label>
                    <input type="text" name="nomM" id="nomM" class="form-control" />
                    <br/>
                    <label><strong>Numéro Mutuelle</strong></label>
                    <input type="number" name="numero" id="numero" class="form-control"/>
                    <br/>
                    <label><strong>Date création</strong></label>
                    <input type="date" name="datecreation" id="datecreation" class="form-control"/>
                    <br/>
                    <label><strong>Nom médecin</strong></label>
                    <input type="text" name="nomMed" id="nomMed" class="form-control"/>
                    <br/>
                    <label><strong>prénom médecin</strong></label>
                    <input type="text" name="prenomMed" id="prenomMed" class="form-control"/>
                    <br/>
                   <label><strong>Spécialité médecin</strong></label>
                    <input type="text" name="specialite" id="specialite" class="form-control"/>
                    <br/>
                    </div>
                    </div>
                    </div>
                    <div class="modal-footer">
                    <button type="reset" class="btn btn-default" data-dismiss="modal" style="color:black;background-color:#DB1702"><strong>Annuler</strong> <img src="image\cancel.png" width="30"style="margin:5px" ></button>
                    <button type="submit" name="insert" id="insert" value="Enregistrer" class="btn btn-primary"style="color:black;background-color:#689D71"><strong>Enregistrer</strong> <img src="image\checkk.png" width="30"style="margin:5px" ></button>
                     
                    </div>
                    
                </form>
            </div>
          
        </div>
    </div>
</div>






<!-- la liste patients "table" -->

<div >
    <h2 style="font-style:solid ; color:#A569BD ; font-family:cursive;font-size:40px;"><img src="image\img10.png" width="90" style="margin:6px;"> DOSSIER MEDICALE</h2>
</div>
<div align="right">

    <!--btn ajouter-->
    <button type="button" name="ajout" id="ajout" class="btn btn-primary"onclick="$('#add_data_Modal').modal('show');" style="background-color:#16B84E"><img src="image\pluss.png" width="30">
          <strong> Nouveau</strong> </button>  
   
</div>
<br/>

<div class="table-responsive" id="table_patient">

    <table id="autoGeneratedID" role="grid" class="table table-bordered">
        <!-- le head du tableau-->
        <thead >
          <tr>
          <div style="  background-color:#A569BD  ; text-align: center; font-size: 28px;color:white;"> <strong >Dossiers médicaux des patients</strong></div>
           </tr>
        <tr style="background-color:white">
             
            <th id="nom" role="gridcell" >Patient</th>
            <th id="id" role="gridcell" >N° Dossier</th>
            <th id="date" role="gridcell">Date création</th>
            <th id="nomMed" role="gridcell">Nom médecin</th>
            <th id="prenomMed" role="gridcell">Prénom médecin</th>
            <th id="specialite" role="gridcell">Spécialité médecin</th>
            <th id="action" role="gridcell">Action</th>
        </tr>
        </thead>
     
          <tbody>
    
      <!--ici on recupere les donnee du tab de la bdd -->

    <?php
    
     try
     {
         // On se connecte à MySQL
         $bdd = new PDO('mysql:host=localhost;dbname=db_healthcare;charset=utf8', 'root', '');
     }
     catch(Exception $e)
     {
         // En cas d'erreur, on affiche un message et on arrête tout
             die('Erreur : '.$e->getMessage());
     }
     
     // Si tout va bien, on peut continuer:
//$reponse = $bdd->query('SELECT * FROM dossierMedicale');
     $req=$bdd->query('SELECT patient.Nom_patient,patient.Prenom_patient,dossierMedicale.Id_dossier_medicale,dossierMedicale.Date_creation,dossierMedicale.Nom_medecin,dossierMedicale.Prenom_medecin,dossierMedicale.Specialite_medecin  FROM dossierMedicale INNER JOIN patient ON patient.Id_patient=dossierMedicale.Id_patient');

     // On affiche chaque entrée une à une
     while ($donnees = $req->fetch()){
            ?>
            <tr>
              <td id="nom" role="gridcell"><?php echo $donnees['Nom_patient']." ".$donnees['Prenom_patient'];?></td>
                <td id="id" role="gridcell"><?php echo $donnees['Id_dossier_medicale'];?></td>
                <td id="date" role="gridcell"><?php echo $donnees['Date_creation'];?></td>
                <td id="nomMed" role="gridcell"><?php echo $donnees['Nom_medecin'];?></td>
                <td id="prenomMed" role="gridcell"><?php echo $donnees['Prenom_medecin'];?></td>
                <td id="specialite" role="gridcell"><?php echo $donnees['Specialite_medecin'];?></td>
               
                
                <td>

                   <a href= " modifierDossier.php?edit=<?php echo $donnees['Id_dossier_medicale'];?>"
                         ><img src="image\img14.png " style="width:28px"></a>
                   <a href= " supprimerdossier.php?delete=<?php echo $donnees['Id_dossier_medicale'];?>"
                         ><img src="image\img13.png " style="width:26px" ></a> 
                     <a href= " imprimerDossier.php?print=<?php echo $donnees['Id_dossier_medicale'];?>"
                         ><img src="image\printer.png " style="width:30px"></a>
                    <a href="detailsDossier.php?idp=<?php echo $donnees['Id_dossier_medicale'];?>"><img src="image\img15.png " style="width:30px"></a>
                </td>
               
                
            </tr>
            <?php
            }
            $req->closeCursor(); // Termine le traitement de la requête?>

        </tbody>
   
        </table>
</div>




<!-- pose problème  -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src='http://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js'></script>
<script src='http://cdn.datatables.net/1.10.10/js/dataTables.bootstrap.min.js'></script>

<!--ce script pour le fonctionnement des deux btn delete & edit il prend en parametre #idDuTABLEAU et fait appelle à modifier.php-->
<script>

    $(document).ready(function(){


        /* ici c'est le script de dataTable au lieu de faire appelle à index.js on l'a copié ici pour que ça fonctionne*/

        $('#autoGeneratedID').dataTable({
            "columnDefs": [
                { "orderable": false, "targets": 0 }//il y'avait 3 pour le double clique et modifier
            ]
        } );
        $('#autoGeneratedID td').attr('role', 'gridcell');
        $('#autoGeneratedID tr').attr('role', 'row');
        $('#autoGeneratedID th').attr('role', 'gridcell');
        $('#autoGeneratedID table').attr('role', 'grid');
         $('#autoGeneratedID td:nth-of-type(-n+3)').attr('contenteditable', 'true');

  });

    //bouton ajouter

   /* $('#ajout').click(function () {
        $('#insert').val("Valider");
        $('#insert_form')[0].reset();
    });


    /******************** bouton modifier*********************/

    $(document).on('click', '.edit_data', function () {
        var id = $(this).attr("id");
        $.ajax({
            url: "modierPatient.php",
            method: "POST",
            data: {id: id},
            dataType: "json",
            success: function (data) {
                //remplir les cases avec les anciens données
                $('#nom').val(data.nom);
                $('#prenom').val(data.prenom);
                $('#numSC').val(data.DateNaissance);
                $('#adresse').val(data.age);
                $('#adresse').val(data.adresse);
                $('#numTel').val(data.numTel_p);
                $('#dateN').val(data.DateNaissance_p);
                $('#dateR').val(data.DateRdv);
                $('#debut').val(data.dateD);
                $('#fin').val(data.dateF);
                $('#nlit').val(data.lit);

                $('#id').val(data.idPATIENT);

                $('#insert').val("Modifier");
                $('#add_data_Modal').modal('show');


            }

        });
    });

</script>

      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
   <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyright <strong>M</strong>a<strong>C</strong>onsultation<strong>M</strong>edicale 2021. Tous droits réservés 
        </p>
        <div class="credits">
        <a style="color:#7F8FA6"> Politique de confidentialité </a> | <a style="color:#7F8FA6"> Conditions d'utilisation</a><br>
        <img src="img/facebook.png" width="40px">  <img src="img/linkedin.png" width="40px">  <img src="img/twitter.png" width="40px">
        </div>
        <a href="index.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Bienvenue à MaConsultationMedicale!',
        // (string | mandatory) the text inside the notification
        text: 'survolez-moi pour activer le bouton de fermrture . Vous pouvez masquez la barre latérale gauche en cliquant sur le boutton à coté du logo',
        // (string | optional) the image to display on the left
        image:'image/doctor1.png',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
</body>

</html>
