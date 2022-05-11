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
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation">
        </div>
      </div>
      <a href="index.php" class="logo"><b><span>Ma</span>Consultation<span>Medicale</span></b></a>
      <div style="margin:5px ">
        <div class="top-menu" style="margin:5px 900px">
          <ul class="nav pull-right top-menu">
            <li><a class="logout" href="index2.php" >home</a>
            </li>
          </ul>
        </div>
        <div class="top-menu"style="margin:5px 1000px">
          <ul class="nav pull-right top-menu" >
            <li><a class="logout" href="aboutus.php">AboutUs</a>
            </li>
          </ul>
        </div>
        <div class="top-menu" style="margin: 5px 1100px">
          <ul class="nav pull-right top-menu">
            <li><a class="logout" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.php"><img src="img/medecin.png" class="img-circle" width="100"></a></p>
          <h5 class="centered">CONSULTATION MEDICALE</h5>
          <li class="mt">
            <a  href="index.php">
              <img src="img/house-black-silhouette-without-door.png" width="25">
              <span style="font-size:15px"><strong>Accueil</strong></span>
            </a>
          </li>
          <li class="sub-menu">
            <a  href="listePatient.php">
                 <img src="img/patient.png" width="25">
                 <span style="font-size:15px"><strong>Patient</strong></span>
            </a>
          </li>
          <li class="sub-menu">
            <a class="active" href="listeConsultation.php">
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
              <img src="img/prescription.png" width="25">
              <span style="font-size:15px"><strong>Ordonnance</strong></span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="index2.php">
              <img src="img/logout.png" width="25">
              <span style="font-size:15px"> <strong>Déconnexion</strong></span>
            </a>
          </li>
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
</div>
<!--Formulaire -->
<div id="add_data_Modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header"style="background-color:#E74C3C">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title"  > <img src="image\immg13.png" width="70" ><strong> Fiche Consultation</strong></h2>
            </div>
            <div class="modal-body">
                <br/>
                <form method="post" id="insert_form" action="ajouterConsultation.php">
                    <div style="text-align:right">
                    <table>
                      <th>
                        <select name="nom" id="nom" class="form-control" >
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
                         <option value="<?=$select1['Nom_patient'].$select1['Prenom_patient'];?>"><?=$select1['Nom_patient']." ".$select1['Prenom_patient'];?></option><?php }?>
                        </select>
                        </th>
                        <th>
                        
                    <select name="id" id="id" class="form-control"  >
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
                         <option value="<?=$select1['Id_patient'];?>"><?="N°:".$select1['Id_patient'];?></option><?php }?>
                        </select>
                        </th>
                        <th>
                      
                    <label  style="position:relative;left:178px;" ><strong>Date Consultation (*)</strong></label>    
                    <input type="date" name="datecons" id="datecons"class="form-control"  style="background-color:#BBAE98;position:relative;left:160px;"/>
                     
                        </th>
                        </table>
                    <hr/>
                  
                        </div>
                <h4><b><u style="color:#791CF8;text-decoration:none;size:20px " > <img src="image\img1.png" width="50"style="margin:5px" >Antécédents </u></b></h4>
                    <div style="border-left:3px  solid #791CF8 ; margin-left:25px">
                    <div style="margin:30px">
                    <br>
                    <label>Antécédents Médicaux</label>
                    <select name="medic" id="medic" class="form-control" >
                    <?php 
                           try{
                              $bdd = new PDO('mysql:host=localhost;dbname=db_healthcare;charset=utf8', 'root', '');
                               $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                          }
                          catch(Exception $e)
                          {
                              die('Erreur : '.$e->getMessage());
                          }
                          $req1="select * from patient";
                          $select=$bdd->query($req1);?>
                        <?php
                        while($select1=$select->fetch()){?>
                         <option value="<?=$select1['Antecedents_medicaux'];?>"><?=$select1['Antecedents_medicaux'];?></option><?php }?>
                        </select>

                    <br/>
                    <label>Antécédents Chirurgicaux</label>
                    <select name="chirurg" id="chirurg" class="form-control" >
                    <?php 
                           try{
                              $bdd = new PDO('mysql:host=localhost;dbname=db_healthcare;charset=utf8', 'root', '');
                               $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                          }
                          catch(Exception $e)
                          {
                              die('Erreur : '.$e->getMessage());
                          }
                          $req1="select * from patient";
                          $select=$bdd->query($req1);?>
                        <?php
                        while($select1=$select->fetch()){?>
                         <option value="<?=$select1['Antecedents_chirurgiicaux'];?>"><?=$select1['Antecedents_chirurgiicaux'];?></option><?php }?>
                        </select>
                    <br/>
                    </div>
                    </div>
                    <h4><b><u style="color:#DB0073;text-decoration:none;size:20px" > <img src="image\immg15.png" width="50" >Constantes Vitales </u></b></h4>
                    <div style="border-left:3px  solid #DB0073; margin-left:25px">
                    <div style="margin:30px">
                    <label>Poids (Kg)</label>
                    <input type="text" name="poids" id="poids" class="form-control" />
                    <br/>
                    <label>La taille (Cm)</label>
                    <input type="text" name="taille" id="taille" class="form-control" />
                    <br/>
                    <label>Température (C°)</label>
                    <input type="text" name="temp" id="temp" class="form-control"/>
                    <br/>
                    <label>Fréquence cardiaque</label>
                    <input type="text" name="frequence" id="frequence" class="form-control"/>
                    <br/>
                    <label>Glycemie (g/l)</label>
                    <input type="text" name="glycemie" id="glycemie" class="form-control"/>
                    <br/>
                    <label>Pression artérielle</label>
                    <input  name="pression" id="pression" class="form-control" />
                    <br/>
                    </div>
                    </div>
                    <h4><b><u style="color:#FFCB60;text-decoration:none;size:20px "><img src="image\immg16.png" width="60"style="margin:5px" >Résultat </u></b></h4>
                    <div style="border-left:3px  solid #FFCB60 ; margin-left:25px">
                    <div style="margin:30px">
                    <br>
                    <label>Diagnostique médicale</label>
                    <textarea type="text" name="diagn" id="diagn" class="form-control"></textarea>
                    <br/>
                    <label>Symptome</label>
                    <textarea type="text" name="symptome" id="symptome" class="form-control"></textarea>
                    <br/>
                    <label>Maladie</label>
                    <input type="text" name="maladie" id="maladie" class="form-control"/>
                    <br/>
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
<div >
    <h2 style="font-style:solid ; color:#F7230C; font-family:cursive"><img src="image\immg13.png" width="100" style="margin:6px"><strong>TABLE CONSULTATIONS</strong></h2>
</div>
<div align="right">
     <button type="button" name="ajout" id="ajout" class="btn btn-primary"onclick="$('#add_data_Modal').modal('show');" style="background-color:#16B84E"><img src="image\pluss.png" width="30">
          <strong> Ajouter</strong> </button> 
   <button onclick=window.location.href='implistco.php' class="btn btn-primary" onclick="$('#add_data_Modal').modal('show');"style="background-color:#2C75FF"><img src="image\20.png" width="30">
    <strong> Imprimer</strong></button>
</div>
<br/>

<div class="table-responsive" id="table_consultation">
     <div style="background-color:#E74C3C; text-align:center;color:black;font-size:20px">
       <strong>Consultations de Patient</strong>
     </div>
    <table id="autoGeneratedID" role="grid" class="table table-sm" >
        <thead >
        <tr>
        <th id="nom" role="gridcell">Patient</th>
            <th id="id" role="gridcell">N° consultation</th>
          
            <th id="datecons" role="gridcell">Date de consultation</th>
            <th id="motif" role="gridcell">Motif de consultation</th>
            <th id="details" role="gridcell" >Details</th>
        </tr>
        </thead>
          <tbody>
    <?php
     try
     {
         $bdd = new PDO('mysql:host=localhost;dbname=db_healthcare;charset=utf8', 'root', '');
     }
     catch(Exception $e)
     {
             die('Erreur : '.$e->getMessage());
     }
   
     $req=$bdd->query('SELECT patient.Nom_patient,patient.Prenom_patient,consultation.Date_consultation,consultation.symptome,consultation.Id_consultation FROM consultation  INNER JOIN patient ON consultation.Id_patient=patient.Id_patient ');
     while ($donnees = $req->fetch()){
            ?>
            <tr>
            <td id="nom" role="gridcell"><?php echo $donnees['Nom_patient']." ".$donnees['Prenom_patient'];?></td>
                <td id="id" role="gridcell"><?php $requete=$bdd->query("SELECT count(patient.Nom_patient)   from consultation INNER JOIN patient ON consultation.Id_patient =patient.Id_patient  WHERE patient.Nom_patient ="."'".$donnees['Nom_patient']."'"." AND Date_consultation <= "."'".$donnees['Date_consultation']."'"." ORDER BY Date_consultation")->fetch(); echo 'consultation N°: '.reset($requete); ?></td>
             
                <td id="datecons" role="gridcell"><?php echo $donnees['Date_consultation'];?></td>
                <td id="motif" role="gridcell"><?php echo $donnees['symptome'];?></td>
                <td>
                   <a  href= " modifierConsultation.php?edit=<?php echo $donnees['Id_consultation'];?>"
                         ><img src="image\img14.png " style="width:28px"></a>
                   <a  href= " supprimerConsultation.php?delete=<?php echo $donnees['Id_consultation'];?>"
                         ><img src="image\img13.png " style="width:26px" ></a> 
                   <a href="detailsConsultation.php?idp=<?php echo $donnees['Id_consultation'];?>"><img src="image\img15.png " style="width:30px"></a>
                </td> 
            </tr>
            <?php
            }
            $req->closeCursor(); ?>
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
    /******************************* SUPPRIMER Patient*******************/
    $(document).on('click', '.delete_data', function(){
        var id = $(this).attr("id");
        if(confirm("êtes vous sûr de supprimer ce patient?"))
        {
            $.ajax({
                url:"SupprimerPatient.php",
                method:"POST",
                data:{id:id},
                success:function(data){
                    $('#table_consultation').html('<div class="alert alert-success">'+data+'</div>');
                    $('#autoGeneratedID').DataTable().destroy();
                    window.location.reload();
                }
            });
            setInterval(function(){
                $('#table_consultation').html('');
            }, 5000);
        }
    });
</script>
   </section>
    </section>
>
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
