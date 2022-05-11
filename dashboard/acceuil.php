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
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

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

<body>
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
        <!--  notification end -->
      </div>
      <div style="margin:5px ">
<div class="top-menu" style="margin:5px 900px">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="index2.php">home</a></li>
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
            <a class="active" href="acceuil.php">
            <img src="img/house-black-silhouette-without-door.png" width="25">
            <span style="font-size:15px"><strong>Accueil</strong></span>
              </a>
          </li>
          <li class="sub-menu" >
            <a  href="listePatient.php">
            <img src="img/patient.png" width="25">
              <span style="font-size:15px"><strong>Patient</strong></span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="listeConsultation.php">
              <!--<i class="fa fa-cogs"></i>-->
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
            <a href="dossier.php">
              <img src="img/document.png" width="25">
              <span style="font-size:15px"><strong>Dossier Medical</strong></span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="ordonnance.php">
              <!--<i class="fa fa-th"></i>-->
              <img src="img/prescription.png" width="25">
              <span style="font-size:15px"><strong>Ordonnance</strong></span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="index2.php " >
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
      

<div>
    <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    
    <link rel='stylesheet prefetch' href='http://cdn.datatables.net/1.10.10/css/dataTables.bootstrap.min.css'>


    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    
</div>

<!-- la liste patients "table" -->

<div >
    <h1 style="font-style:solid ; color:#E74C3C; font-family:cursive;font-size:50px;"><img src="image\doctor1.png" width="80" style="margin:6px ; ">ACCEUIL</h1>
</div>
<table>
  <thead>
    <th>
<div style=" border: 3px solid white; background-color:#2E86C1 ; text-align: center; width: 260px;margin-right: 28px;color:white;"> <strong>Patient</strong></div>
<div style=" border: 3px solid #2E86C1;  width: 260px; height: 90px;padding-right: 8px; ">
  <img src="img\img1.png" width="68px" style="margin-left: 10px;margin-top: -35px;" > 
  <span style="font-size:55px;margin-left: 105px;">  
    <?php
$conn = new mysqli("localhost", "root", "", "db_healthcare");
$sql = "SELECT * FROM patient";
if ($result=mysqli_query($conn,$sql)) {
    $rowcount=mysqli_num_rows($result);
    echo $rowcount; 
}
?></span> 
</div></th>

<th>
<div style=" border: 3px solid white; background-color:#2ECC71  ; text-align: center; width: 260px;margin-right: 28px;color:white;"> <strong>Rendez-Vous</strong></div>
<div style=" border: 3px solid #2ECC71 ;  width: 260px; height: 90px;padding-right: 8px;">
  <img src="image\cl.jpg" width="82px" style="margin-left: 5px; margin-top: -25px;">
  <span style="font-size:55px;margin-left: 100px;">  
    <?php
$conn = new mysqli("localhost", "root", "", "db_healthcare");
$sql = "SELECT * FROM rdv";
if ($result=mysqli_query($conn,$sql)) {
    $rowcount=mysqli_num_rows($result);
    echo $rowcount; 
}
?></span> 
</div></th>

<th><div style=" border: 3px solid white; background-color:#E74C3C  ; text-align: center; width: 260px;margin-right: 28px;color:white;"> <strong>Consultation</strong></div>
<div style=" border: 3px solid #E74C3C ;  width: 260px; height: 90px;">
  <img src="image\cs.png" width="68px" style="margin-left: 5px; margin-top: -25px;">
  <span style="font-size:55px;margin-left: 105px;">  
    <?php
$conn = new mysqli("localhost", "root", "", "db_healthcare");
$sql = "SELECT * FROM consultation";
if ($result=mysqli_query($conn,$sql)) {
    $rowcount=mysqli_num_rows($result);
    echo $rowcount; 
}
?></span>
</div>
</th>
<th><div style=" border: 3px solid white; background-color:#BB8FCE  ; text-align: center; width: 260px;margin-right: 28px;color:white;"> <strong>Dossier Médicale</strong></div>
<div style=" border: 3px solid #BB8FCE ;  width: 260px; height: 90px;">
  <img src="image\medical-file.png" width="60px" style="margin-left: 5px; margin-top: -25px;">
  <span style="font-size:55px;margin-left: 105px;">  
    <?php
$conn = new mysqli("localhost", "root", "", "db_healthcare");
$sql = "SELECT * FROM dossierMedicale";
if ($result=mysqli_query($conn,$sql)) {
    $rowcount=mysqli_num_rows($result);
    echo $rowcount; 
}
?></span>
</div>
</th>

</thead>
</table>
<div align="right">
</div>
<br/>

<table>
  <th>
<div class="table-responsive" id="table_patient">
<div style=" border: 3px solid white; background-color:#2E86C1 ; text-align: center;width: 550px;margin-right: 15px;color:white;font-size:20px ;"> <strong>Patient</strong></div>
    <table id="autoGeneratedID" role="grid" class="table  table-bordered" style="width: 550px;">
        <!-- le head du tableau-->
        <thead >
        <tr style="background-color:white">
            <th id="nom"role="gridcell">Nom</th>
            <th id="prenom" role="gridcell">Prénom</th>
            <th id="adresse" role="gridcell">Adresse</th>
           
        </tr>
        </thead>
     
          <tbody style="font-weight: normal;">
    
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
     
     // Si tout va bien, on peut continuer
     
     
     $reponse = $bdd->query('SELECT * FROM patient LIMIT 0, 3');
     
     // On affiche chaque entrée une à une
     while ($donnees = $reponse->fetch()){
            ?>
            <tr>

               
                <td id="nom" role="gridcell"><?php echo $donnees['Nom_patient'];?></td>
                <td id="prenom" role="gridcell"><?php echo $donnees['Prenom_patient'];?></td>
                
                <td id="adresse" role="gridcell"><?php echo $donnees['Adresse_patient'];?></td>
                
                
               
                
            </tr>
            <?php
            }
            $reponse->closeCursor(); // Termine le traitement de la requête?>

        </tbody>
   
        </table>
</th>
<th>
        <div style=" border: 1px solid white; background-color:#2ECC71 ; text-align: center;width: 550px;color:white;font-size:20px ;"> <strong>Rendez-vous</strong></div>
    <table id="autoGeneratedID" role="grid" class="table  table-bordered" style="width: 550px;">
        <!-- le head du tableau-->
        <thead >
        <tr style="background-color:white">
            <th id="nom"role="gridcell">Patient</th>
            <th id="nom_rdv"role="gridcell">Nom rendez-vous</th>
            <th id="date" role="gridcell">Date</th>
            <th id="HD" role="gridcell">Heure debut</th>
            <th id="HF" role="gridcell">Heure fin</th>
            
        </tr>
        </thead>
     
          <tbody style="font-weight: normal;">
    
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
     
     // Si tout va bien, on peut continuer
     
     // On récupère tout le contenu de la table jeux_video
     //$reponse = $bdd->query('SELECT * FROM rdv');
     $req=$bdd->query('SELECT patient.Nom_patient,patient.Prenom_patient,rdv.Titre,rdv.Date_rendez_vous,rdv.Heure_debut,rdv.Heure_fin FROM rdv INNER JOIN patient ON rdv.Id_patient=patient.Id_patient LIMIT 0, 3');
     // On affiche chaque entrée une à une
     while ($donnees = $req->fetch()){
            ?>
            <tr>
                <td id="nom" role="gridcell"><?php echo $donnees['Nom_patient']." ".$donnees['Prenom_patient'];?></td>
                <td id="nom_rdv" role="gridcell"><?php echo $donnees['Titre'];?></td>
                <td id="date" role="gridcell"><?php echo $donnees['Date_rendez_vous'];?></td>
                <td id="HD" role="gridcell"><?php echo $donnees['Heure_debut'];?></td>
                <td id="HF" role="gridcell"><?php echo $donnees['Heure_fin'];?></td>
            </tr>
            <?php
            }
            $reponse->closeCursor(); // Termine le traitement de la requête?>

        </tbody>
   
        </table>
        </th>
      
   </table>   



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
        <a style="color:#7F8FA6" href="aboutus.php#pc"> Politique de confidentialité </a> | <a style="color:#7F8FA6" href="aboutus.php#qf"> Conditions d'utilisation</a><br>
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
        image: 'image/doctor1.png',
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















