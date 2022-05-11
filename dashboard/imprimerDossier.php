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
 <!--<link href="img/favicon.png" rel="icon">-->
    <link href="img2/favicon.png" rel="shortcut icon" type="image/png">



  
</head>

<body>
<?php

try {
  
  $connexionDB = new PDO("mysql:host=localhost;dbname=db_healthcare", "root", ""); 
    $requete ="SELECT patient.Nom_patient,patient.Prenom_patient,dossiermedicale.Id_dossier_medicale,dossiermedicale.Date_creation,dossiermedicale.Nom_mutuelle,dossiermedicale.Numero_mutuelle,dossiermedicale.Nom_medecin,dossiermedicale.Prenom_medecin,dossiermedicale.Specialite_medecin,dossiermedicale.Id_patient FROM dossiermedicale  INNER JOIN patient ON dossiermedicale.Id_patient =patient.Id_patient  where Id_dossier_medicale = '".$_GET["print"]."'"; 
   $result=$connexionDB->query($requete);
   $data=$result->fetch();
 } catch
 (PDOException $e) {
     die("Erreur: " . $e->getMessage());
 }
?>


<script>
function imprimer(divName) {
      var printContents = document.getElementById(divName).innerHTML;    
   var originalContents = document.body.innerHTML;      
   document.body.innerHTML = printContents;     
   window.print();     
   document.body.innerHTML = originalContents;
   }
</script>
<div id='sectionAimprimer'>

   <div id="add_data_Modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div style=" border: 4px solid #EC7063 ;width: 700px;margin-left: 300px;">
            <div  class="modal-header"style="background-color:#F1948A  ;width: 700px;font-size: 25px;height: 140px; ">
                <h2 class="modal-title" style="color: white; margin-left: 200px;margin-bottom:-78px " ><strong  style="color: white; margin-left: -15px;margin-top: 40px ;font-size: 60px"> Fiche de Dossier </strong></h2> 
              <img src="image\dossier-medical.png" width="140" style="margin-bottom:-45px  " >
            </div>
            <div class="modal-body">

                <br/>
                <form method="post" id="insert_form" action="modifierdoss.php">
                    <div style=" margin-left:25px;width: 400px;margin-left: 190px" >
                    <div style="margin:30px ">
                    <label><strong style="font-size: 20px">N° Dossier</strong></label><br>
                    <input type="Number" name="id" id="id" class="form-control" value="<?php echo $data['Id_dossier_medicale'];?>"/>
                    <br/><br>
                    <label><strong style="font-size: 20px"> patient</strong></label><br>
                   <input  name="nomp" id="nomp" class="form-control" value="<?php echo $data['Nom_patient']." ".
                   $data['Prenom_patient'];?>"  />

                        
                <br><br>
                    <label for="id_patient"><strong style="font-size: 20px">N° Patient</strong></label><br>
                <input  name="id_patient" id="id_patient" class="form-control"  value="<?php echo $data['Id_patient'];?>" />
                <br><br>
                  
                    <label><strong style="font-size: 20px">Nom Mutuelle</strong></label><br>
                    <input type="text" name="nomM" id="nomM" class="form-control"value="<?php echo $data['Nom_mutuelle'];?>"  />
                    <br/><br>
                    <label><strong style="font-size: 20px">Numéro Mutuelle</strong></label><br>
                    <input type="number" name="numero" id="numero" class="form-control" value="<?php echo $data['Numero_mutuelle'];?>" />
                    <br/><br>
                    <label><strong style="font-size: 20px">Date création</strong></label><br>
                    <input type="date" name="datecreation" id="datecreation" class="form-control" value="<?php echo $data['Date_creation'];?>"/>
                    <br/><br>
                    <label><strong style="font-size: 20px">Nom médecin</strong></label><br>
                    <input type="text" name="nomMed" id="nomMed" class="form-control" value="<?php echo $data['Nom_medecin'];?>"/>
                    <br/><br>
                    <label><strong style="font-size: 20px">prénom médecin</strong></label><br>
                    <input type="text" name="prenomMed" id="prenomMed" class="form-control" value="<?php echo $data['Prenom_medecin'];?>"/>
                    <br/><br>
                   <label><strong style="font-size: 20px">Spécialité médecin</strong></label><br>
                    <input type="text" name="specialite" id="specialite" class="form-control" value="<?php echo $data['Specialite_medecin'];?>"/>
                    <br/><br>
                    
                    
                </form>
          </div>
                    </div>
          </div>
        </div>
    </div>
</div>
</div>
</div>
<button onClick="imprimer('sectionAimprimer')" type="submit" name="insert" id="insert" value="Enregistrer" class="btn btn-primary"style="color:black;background-color:#76D7C4 ;margin-left: 890px"><strong>imprimer</strong> <img src="image\checkk.png" width="30"style="margin:5px" ></button>
</body></html>