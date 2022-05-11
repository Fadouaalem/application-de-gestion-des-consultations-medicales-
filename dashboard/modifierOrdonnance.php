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
   $requete ="SELECT patient.Nom_patient,patient.Prenom_patient,ordonnance.idordonnance,ordonnance.medicament,ordonnance.dateordonnance,ordonnance.quantitemedicament,ordonnance.dose,ordonnance.Id_consultation,consultation.Date_consultation from ordonnance  INNER JOIN consultation ON consultation.Id_consultation=ordonnance.Id_consultation INNER JOIN patient ON patient.Id_patient=consultation.Id_patient  where idordonnance = '".$_GET["edit"]."'";
   $result=$connexionDB->query($requete);
   $data=$result->fetch();
 } catch
 (PDOException $e) {
     die("Erreur: " . $e->getMessage());
 }
?>
 
 
<div id="add_data_Modal" class="modal fade" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
         <div style="border:4px solid #FCD21C;width:650px;margin-left:300px;">
             <div class="modal-header"style="background-color:#FCD21C;width:650px;font-size: 25px;height:125px;">
               
                
                 <h2 class="modal-title" style="margin-left:70px;margin-bottom:-70px;" > <img src="image\im9.png" width="100" style="margin-bottom:-30px;"  ><strong style="font-size:50px;">  Fiche Ordonnance</strong></h2>
             </div>
             <div class="modal-body">
 
        
                 <form method="post" id="insert_form" action="modifierOrd.php">
                 <div style="text-align:right">
                 <table>
                 <th>
                   
                   <input name="nom" id="nom" class="form-control"style="width:150px;" value="<?php echo $data['Nom_patient']." ".$data['Prenom_patient'];?>"  style="width:150px;"></th>
                 
                 
                 
                 <th>
               
                 <input name="id" id="id" class="form-control"style="width:150px;" value="<?php /* $requete=$connexionDB->query("SELECT count(patient.Nom_patient)   from ordonnance INNER JOIN consultation ON consultation.Id_consultation=ordonnance.Id_consultation INNER JOIN patient ON patient.Id_patient=consultation.Id_patient  WHERE patient.Nom_patient ="."'".$data['Nom_patient']."'"." AND dateordonnance <= "."'".$data['dateordonnance']."'"." ORDER BY dateordonnance")->fetch(); */echo
                  $data['idordonnance'];  ?>" />
                </th><th>
                    <input name="cons" id="cons" class="form-control"style="width:150px;" value="<?php $requete=$connexionDB->query("SELECT count(patient.Nom_patient)   from consultation INNER JOIN patient ON consultation.Id_patient =patient.Id_patient  WHERE patient.Nom_patient ="."'".$data['Nom_patient']."'"." AND Date_consultation <= "."'".$data['Date_consultation']."'"." ORDER BY Date_consultation")->fetch(); echo 'consultation N°: '.reset($requete);?>">
                 
</th><th>
</br></br>
                    <label style="position:relative;left:18px;"><strong>Date Ordonnance (*)</strong></label><br/>
                    <input type="date" name="date" id="date"  style="background-color:#BBAE98;position:relative;left:20px;" value="<?php echo $data['dateordonnance'];?>"/>
</th></table>
                    <hr/>
                  </div>
                    
                
                     <label style="font-size:25px;margin-left:200px"><strong>MEDICAMENTS</strong></label><br/>
                     <textarea type="text" name="med" id="med"  style="font-size :26px;margin-left:200px;height:300px" ><?php echo $data['medicament'];?></textarea>
                     <br/>
                     <br/>
                    
                     
                     <label style="font-size:25px;margin-left:200px"><strong>Quantité</strong></label><br/>
                     <input type="number" name="quant" id="quant"style="margin-left:200px" value="<?php echo $data['quantitemedicament'];?>" />
                     <br/>
                     <br/>
                     <label style="font-size:25px;margin-left:200px"><strong>Dose</strong></label><br/>
                     <input type="number" name="dose" id="dose" style="margin-left:200px" value="<?php echo $data['dose'];?>"/>
                     <br/>
                     <br/>
                     
                    
                     
                     <div class="modal-footer" style="margin-left:300px;">
                    
                     <button type="reset" onclick=window.location.href='ordonnance.php' class="btn btn-default" data-dismiss="modal" style="color:black;background-color:#DB1702"><strong style="font-size:20px;">Annuler</strong> <img src="image\cancel.png" width="30"style="margin:5px" ></button>
                    
                     <button type="submit" name="mod" id="mod" value="Modifier" class="btn btn-primary"style="color:black;background-color:#689D71"><strong style="font-size:20px;">Modifier</strong > <img src="image\checkk.png" width="30"style="margin:5px" ></button>
                    
                     </div>
                 </form>
             </div>
</div>
         </div>
     </div>
 </div>
 </body>
 </html>
 