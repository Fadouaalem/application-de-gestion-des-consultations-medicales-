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
    <script>
function imprimer(divName) {
      var printContents = document.getElementById(divName).innerHTML;    
   var originalContents = document.body.innerHTML;      
   document.body.innerHTML = printContents;     
   window.print();     
   document.body.innerHTML = originalContents;
   }
</script>

      <section class="wrapper" style="min-height:75vh">
    <div>
    <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel='stylesheet prefetch' href='http://cdn.datatables.net/1.10.10/css/dataTables.bootstrap.min.css'>
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</div>
    <h2 style="font-style:solid ; color:#F7230C; font-family:cursive"><img src="image\immg13.png" width="100" style="margin:6px"><strong>TABLE CONSULTATIONS</strong></h2>
</div>
<div align="right">
    
   <button onClick="imprimer('sectionAimprimer')" type="button" name="imprimer" id="imprimer" class="btn btn-primary" onclick="$('#add_data_Modal').modal('show');"style="background-color:#2C75FF"><img src="image\20.png" width="30">
    <strong> Imprimer</strong></button>
</div>
<br/>
<div id='sectionAimprimer'>
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