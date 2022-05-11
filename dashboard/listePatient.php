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
      <a href="index.html" class="logo"><b><span>Ma</span>Consultation<span>Medicale</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
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
            <a  href="index.php">
            <img src="img/house-black-silhouette-without-door.png" width="25">
            <span style="font-size:15px"><strong>Accueil</strong></span>
              </a>
          </li>
          <li class="sub-menu">
            <a class="active" href="listePatient.php" >
            <!--<i class=" fa-user-injured"></i>-->
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
              <!--<i class="fa fa-book"></i>-->
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
$requet="select*from dossierMedicale";
$select=$bdd->query($requet);    


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
<!--Formulaire -->
 

<div id="add_data_Modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header"style="background-color:#0ABAB5">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
               
                <h2 class="modal-title"  > <img src="image\hospitalisation.png" width="70" ><strong> Fiche Patient</strong></h2>
            </div>
            <div class="modal-body">

                <br/>
                <form method="post" id="insert_form" action="ajouterPatient.php">
                   
                    <h4><b><u style="color:#1E7FCB;text-decoration:none;size:20px" > <img src="image\user.png" width="50" >Informations Patient </u></b></h4>
                    <div style="border-left:3px  solid #1E7FCB ; margin-left:25px">
                    <div style="margin:30px">
                    <label><strong>N° Patient</strong></label>
                    <input type="Number" name="id" id="id" class="form-control" />
                    <br/>
                  
                   
                    <label><strong>Nom</strong></label>
                    <input type="text" name="nom" id="nom" class="form-control" />
                    <br/>

                    <label><strong>Prénom</strong></label>
                    <input type="text" name="prenom" id="prenom" class="form-control"/>
                    <br/>
                    <label><strong>Date Naissance</strong></label>
                    <input type="date" name="datedenaissance" id="datedenaissance" class="form-control"/>
                    <br/>
                    <label><strong>Age</strong></label>
                    <input type="number" name="age" id="age" class="form-control"/>
                    <br/>
                    
                    <label><strong>Sexe Patient</strong></label>
                    <select  name="sexe" id="sexe" class="form-control" >
                    <option value="Femme">Femme</option>
                    <option value="Homme">Homme</option>
                    </select>
                    <br/>

                    <label><strong>Group_sanguin</strong></label>
                    <select  name="sanguin" id="sanguin" class="form-control">
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                     </select>
                    <br/>

                    <label><strong>Situation Familiale</strong></label>
                    <select name="SituationFamilial" id="SituationFamilial" class="form-control" >
                   
                    <option value="Marié(e)">Marié(e)</option>
                    <option value="Célibataire">Célibataire</option>
                    <option value="Divorsé(e)">Divorsé(e)</option>
                     </select>
                    <br/>
                    </div>
                    </div>
                    
                    <h4><b><u style="color:#1B019B;text-decoration:none;size:20px "><img src="image\img.png" width="50"style="margin:5px" >Coordonnées Patient </u></b></h4>
                    <div style="border-left:3px  solid #1B019B ; margin-left:25px">
                    <div style="margin:30px">
                    <br>
                    <label><strong>Email</strong></label>
                    <input type="text" name="email" id="email" class="form-control"/>
                    <br/>
                    <label><strong>Téléphone</strong></label>
                    <input type="text" name="telephone" id="telephone" class="form-control"/>
                    <br/>
                    <label><strong>Adresse</strong></label>
                    <input type="text" name="adresse" id="adresse" class="form-control"/>
                    <br/>
                    </div>
                    </div>
                     <h4><b><u style="color:#791CF8;text-decoration:none;size:20px " > <img src="image\img1.png" width="50"style="margin:5px" >Antécédents </u></b></h4>
                    <div style="border-left:3px  solid #791CF8 ; margin-left:25px">
                    <div style="margin:30px">
                    <br>
                    <label><strong>Antécédents Médicaux</strong></label>
                    <textarea type="text" name="medic" id="medic" class="form-control"></textarea>
                    <br/>
                    <label><strong>Antécédents Chirurgicaux</strong></label>
                    <textarea type="text" name="chirurg" id="chirurg" class="form-control"></textarea>
                    <br/>
                    </div>
                    </div>
                    <div class="modal-footer">
                    <button type="reset" class="btn btn-default" data-dismiss="modal" style="color:black;background-color:#DB1702"><strong>Annuler</strong> <img src="image\cancel.png" width="30"style="margin:5px" ></button>
                    <button type="submit" name="insert" id="insert" value="valider" class="btn btn-primary"style="color:black;background-color:#689D71"><strong>Enregistrer</strong> <img src="image\checkk.png" width="30"style="margin:5px" ></button>
                    </div>
                    
                </form>
            </div>

          
        </div>
    </div>
</div>







<!-- la liste patients "table" -->

<div >
    <h2 style="font-style:solid ; color:#1034A6; font-family:blippo,fantasy;font-size: 40px;"><img src="image\40.png" width="80" style="margin:6px;">TABLE PATIENTS</h2>
</div>
<div align="right">

    <!--btn ajouter-->
    <button type="button" name="ajout" id="ajout" class="btn btn-primary"onclick="$('#add_data_Modal').modal('show');" style="background-color:#16B84E"><img src="image\pluss.png" width="30">
          <strong> Nouveau</strong> </button>  
    <button onclick=window.location.href='implistpat.php' class="btn btn-primary" onclick="$('#add_data_Modal').modal('show');"style="background-color:#2C75FF"><img src="image\20.png" width="30">
    <strong> Imprimer</strong></button>
</div>
<br/>


<div class="table-responsive" id="table_patient">
 
    <table id="autoGeneratedID" role="grid" class="table table-striped table-bordered" >
        <!-- le head du tableau-->
        <thead >
         
        <tr style="background-color:#9E9E9E">
             
         
           <th id="id" role="gridcell" >N°</th>
            <th id="nom"role="gridcell">Nom</th>
            <th id="prenom" role="gridcell">Prénom</th>
            <th id="sexe" role="gridcell">Sexe</th>
             <th id="datedenaissance" role="gridcell">Date de naissance</th>
             <th id="email" role="gridcell">Email</th>
            <th id="age" role="gridcell">Age</th>
            <th id="telephone" role="gridcell">Téléphone</th>
            <th id="adresse" role="gridcell">Adresse</th>
       

            <th id="action" role="gridcell">Action</th>
        </tr>
        </thead>
     
    
          <tbody>
    
      <!--ici on recupere les donnee du tab de la bdd -->

    <?php
        require_once 'dbconnect.php';

     
     // On récupère tout le contenu de la table jeux_video
     $reponse = $bdd->query('SELECT * FROM patient');
     
     // On affiche chaque entrée une à une
     while ($donnees = $reponse->fetch()){
            ?>
            <tr>

                <td id="id" role="gridcell"><?php echo $donnees['Id_patient'];?></td>
                <td id="nom" role="gridcell"><?php echo $donnees['Nom_patient'];?></td>
                <td id="prenom" role="gridcell"><?php echo $donnees['Prenom_patient'];?></td>
                <td id="sexe" role="gridcell"><?php echo $donnees['Sexe_patient'];?></td>
                <td id="datedenaissance" role="gridcell"><?php echo $donnees['Date_naissance_patient'];?></td>
                <td id="email" role="gridcell"><?php echo $donnees['Email_patient'];?></td>
                <td id="age" role="gridcell"><?php echo $donnees['Age_patient'];?></td>
                <td id="telephone" role="gridcell"><?php echo $donnees['Telephone_patient'];?></td>
                <td id="adresse" role="gridcell"><?php echo $donnees['Adresse_patient'];?></td>
                
                <td>
              
                   <a  href= " modifierPatient.php?edit=<?php echo $donnees['Id_patient'];?>"
                         ><img src="image\edit.png " style="width:30px"></a>
                   <a  href= " SupprimerPatient.php?delete=<?php echo $donnees['Id_patient'];?>"
                         ><img src="image\trash.png " style="width:30px"></a> 
                    <a   href= " imprimerPatient.php?print=<?php echo $donnees['Id_patient'];?>"
                         ><img src="image\printer.png " style="width:30px"></a>   
                    <a   href="detailsPatient.php?idp=<?php echo $donnees['Id_patient'];?>"><img src="image\info.png " style="width:30px"></a>
                </td>
              
                
            </tr>
            <?php
            }
            $reponse->closeCursor(); // Termine le traitement de la requête?>

        </tbody>
   
        </table>
  </div>
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
                    $('#table_patient').html('<div class="alert alert-success">'+data+'</div>');
                    $('#autoGeneratedID').DataTable().destroy();
                    window.location.reload();

                }
            });
            setInterval(function(){
                $('#table_patient').html('');
            }, 5000);
        }
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
        title:'Bienvenue à MaConsultationMedicale!',
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















