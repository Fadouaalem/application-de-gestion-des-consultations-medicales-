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
    
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.php" class="logo"><b><span>Ma</span>Consultation<span>Medicale</span></b></a>
      <!--logo end-->
      
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
            <a class="active" href="listeRdv.php">
           
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
            
              <img src="img/prescription.png" width="25">
              <span style="font-size:15px"><strong>Ordonnance</strong></span>
              </a>
         
          </li>
       
          <li class="sub-menu">
            <a href="index2.php">
             
              <img src="img/logout.png" width="25">
              <span style="font-size:15px"> <strong>Déconnexion</strong></span>
              </a>
      
        </ul>
    
      </div>
    </aside>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content" style="min-height:90vh">
       
       <section class="wrapper">
    
 
 <div>
     <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
     
     <link rel='stylesheet prefetch' href='http://cdn.datatables.net/1.10.10/css/dataTables.bootstrap.min.css'>
 
 
     <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
     <?php
     
     ?>
 </div>
 <!--Formulaire -->
 
 
 <div id="add_data_Modal" class="modal fade" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header"style="background-color:#01D758">
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                
                 <h2 class="modal-title"  > <img src="image\im1.jpg" class="img-circle"width="70"  ><strong>  Ajouter Rendez-Vous</strong></h2>
             </div>
             <div class="modal-body">
 
        
                 <form method="post" id="insert_form" action="ajouterRdv.php">
                 <div style="text-align:right">
                 <table>
                 <th>
                 <select name="nom" id="nom" class="form-control" >
                    <?php 
                           try{
                              // On se connecte à MySQL
                              $bdd = new PDO('mysql:host=localhost;dbname=db_healthcare;charset=utf8', 'root', '');
                                // echo 'success';
                          }
                          catch(Exception $e)
                          {
                              // En cas d'erreur, on affiche un message et on arrête tout
                               
                              die('Erreur : '.$e->getMessage());
                          }
                          $req1="select * from patient";
                          $select=$bdd->query($req1);?>
                        <?php
                        while($select1=$select->fetch()){?>
                          
                         <option value="<?=$select1['Nom_patient'].$select1['Prenom_patient'];?>"><?=$select1['Nom_patient']." ".$select1['Prenom_patient'];?></option><?php }?>
          
                        
                    </select></th>  
                 <th>
                 
                    <select name="id" id="id" class="form-control" >
                    <?php 
                           try{
                              $bdd = new PDO('mysql:host=localhost;dbname=db_healthcare;charset=utf8', 'root', '');
                          }
                          catch(Exception $e)
                          {
                              die('Erreur : '.$e->getMessage());
                          }
                          $req1="select * from patient";
                          $select=$bdd->query($req1);?>
                        <?php
                        while($select1=$select->fetch()){?>
                         <option value="<?=$select1['Id_patient'];?>"><?= "N°: ".$select1['Id_patient'];?></option><?php }?>
                        </select></th>
            
                    <th>
                    <label style="position:relative;left:160px;"><strong>Date Rendez-Vous (*)</strong></label><br/>
                    <input type="date" name="daterdv" id="daterdv"  style="background-color:#BBAE98;position:relative;left:160px;"  class="form-control"/>
                        </th></table>
                    <hr/>
                  </div>
                    
                    <table >
                       <tr >
                     <label style="font-size:25px"><strong>Titre Rendez-Vous</strong></label>
                     <input type="text" name="titre" id="titre"  style="font-size :26px;" />
                     <br/>
                     <br/>
                      </tr>
                      <tr >
                      <th >
                        
                     <label style="font-size:25px;"><strong>Heure début</strong></label>
                     <input type="time" name="heuredebut" id="heuredebut" style="margin-left:150px;" />
                        
                      
                     <label style="font-size:25px"><strong>Heure fin</strong></label>
                     <input type="time" name="heurefin" id="heurefin" style="margin-left:150px;"/>
                    
                     </td>
                     <td  rowspan="2">
                     <label style="font-size:25px;margin-left:80px;"><strong>Description_rdv</strong></label>
                     <textarea type="text" name="desc" id="desc"  style="margin-left:80px;font-size:23px;height:100px;"></textarea>
                    </td>
                       </tr>
                      </table>
                     
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
     <h2 style="font-style:solid ; color:black; font-family:cursive;font-size:50px"><img src="image\imgg.jpg" width="100" style="margin:6px"><strog>RENDEZ-VOUS</strong></h2>
 </div>
 <div align="right">
 
     <!--btn ajouter-->
     <button type="button" name="ajout" id="ajout" class="btn btn-primary"onclick="$('#add_data_Modal').modal('show');" style="background-color:#16B84E"><img src="image\pluss.png" width="30">
           <strong> Ajouter</strong> </button>  
     <button onclick=window.location.href='implistrdv.php' class="btn btn-primary" onclick="$('#add_data_Modal').modal('show');"style="background-color:#2C75FF"><img src="image\20.png" width="30">
    <strong> Imprimer</strong></button>
 </div>
 <br/>
 <div class="table-responsive" id="table_rdv">
 <div style="background-color:#34C924; text-align:center;color:black;font-size:20px">
       <strong>Rendez-vous</strong>
     </div>
     <table id="autoGeneratedID" role="grid" class="table table-sm">
         <!-- le head du tableau-->
         <thead >
         <tr >
              
        
            <th id="nom" role="gridcell" >Patient</th>
            <th id="id"role="gridcell">Rendez-Vous</th>
             <th id="titre" role="gridcell">Titre</th>
             <th id="daterdv" role="gridcell">Date </th>
              <th id="heuredebut" role="gridcell">Heure début</th>
              <th id="heurefin" role="gridcell">Heure Fin </th>
              <th id="desc" role="gridcell">Description rdv </th>
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
      
      // Si tout va bien, on peut continuer
      
      // On récupère tout le contenu de la table jeux_video
      $reponse = $bdd->query('SELECT patient.Nom_patient,patient.Prenom_patient,rdv.Titre,rdv.Date_rendez_vous,rdv.Heure_debut,rdv.Heure_fin,rdv.Id_rendez_vous,rdv.Id_patient,rdv.description  FROM rdv   INNER JOIN patient ON rdv.Id_patient =patient.Id_patient');
      
      // On affiche chaque entrée une à une
      while ($donnees = $reponse->fetch()){
             ?>
             <tr>
             <td id="nom" role="gridcell"><?php echo $donnees['Nom_patient']." ".$donnees['Prenom_patient'];?></td>
               <td id="id" role="gridcell"><?php $req=$bdd->query("SELECT count(patient.Nom_patient)   from rdv INNER JOIN patient ON rdv.Id_patient =patient.Id_patient  WHERE patient.Nom_patient ="."'".$donnees['Nom_patient']."'"." AND Date_rendez_vous <= "."'".$donnees['Date_rendez_vous']."'"." ORDER BY Date_rendez_vous")->fetch(); echo 'rendez-vous N°: '.reset($req); ?></td>
                
                
                 <td id="titre" role="gridcell"><?php echo $donnees['Titre'];?></td>
                 <td id="daterdv" role="gridcell"><?php echo $donnees['Date_rendez_vous'];?></td>
                 <td id="heuredebut" role="gridcell"><?php echo $donnees['Heure_debut'];?></td>
                 <td id="heurefin" role="gridcell"><?php echo $donnees['Heure_fin'];?></td>
                 <td id="desc" role="gridcell"><?php echo $donnees['description'];?></td>
                 <td>
 
                    <a  href= " modifierRdv.php?edit=<?php echo $donnees['Id_rendez_vous'];?>"
                          ><img src="image\img14.png " style="width:28px"></a>
                    <a  href= " supprimerRdv.php?delete=<?php echo $donnees['Id_rendez_vous'];?>"
                          ><img src="image\img13.png " style="width:26px"></a> 
                       
                    
                 </td>
                
                 
             </tr>
           
             <?php
             }
             $reponse->closeCursor(); // Termine le traitement de la requête?>
 
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