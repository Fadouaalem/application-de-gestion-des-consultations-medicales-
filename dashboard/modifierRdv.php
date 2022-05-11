

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
   $requete ="SELECT patient.Nom_patient,patient.Prenom_patient,rdv.Id_rendez_vous,rdv.Titre,rdv.Date_rendez_vous,rdv.Heure_debut,rdv.Heure_fin,rdv.Id_patient,rdv.description,rdv.Id_patient FROM rdv  INNER JOIN patient ON rdv.Id_patient =patient.Id_patient  where Id_rendez_vous = '".$_GET["edit"]."'";
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
         <div style="border:4px solid #DC143C;width:650px;margin-left:300px;">
             <div class="modal-header"style="background-color:#DC143C;width:650px;font-size 25px;height:140px;">
             
                
                 <h2 class="modal-title"  style="margin-left:70px;margin-bottom:-78px;"> <img src="image\imm13.png" class="img-circle" width="100" style="margin-bottom:-45px;" ><strong style="font-size:50px;color:#CECECE;">  Ajouter Rendez-Vous</strong></h2>
             </div>
             <div class="modal-body">
 
        
                 <form method="post" id="insert_form" action="modifierRendez.php">
                 <div style="text-align:right">
                 <table>
                     
                 <th>
                   
                   <input name="nom" id="nom" class="form-control" value="<?php echo $data['Nom_patient']." ".$data['Prenom_patient'];?>"  style="width:150px;"></th>
                 
                 <th>
        
                    <input name="id" id="id" class="form-control" value="<?php echo "N°: ". $data['Id_patient'];?>"style="width:70px;"></th>
                    <th>
                 <input  name="idrdv" id="idrdv" class="form-control" value="<?php /*$req=$connexionDB->query("SELECT count(patient.Nom_patient)   from rdv INNER JOIN patient ON rdv.Id_patient =patient.Id_patient  WHERE patient.Nom_patient ="."'".$data['Nom_patient']."'"." AND Date_rendez_vous <= "."'".$data['Date_rendez_vous']."'"." ORDER BY Date_rendez_vous")->fetch();*/ echo $data['Id_rendez_vous'];?>" /></th>
                 <th>
                    <label style="position:relative;left:77px;"  >Date Rendez-Vous (*)</label><br/>
                    <input type="date" name="daterdv" id="daterdv"  style="background-color:#BBAE98;position:relative;left:75px;" value="<?php echo $data['Date_rendez_vous'];?>"/>
                  </th></table>
                    <hr/>
                  </div>
                    
                  
                     <label style="font-size:25px;margin-left:200px"><strong>Titre Rendez-Vous</strong></label><br>
                     <input type="text" name="titre" id="titre"  style="font-size :26px;margin-left:200px" value="<?php echo $data['Titre'];?>" />
                     <br/>
                     <br/>
                  
                     <label style="font-size:25px;margin-left:200px"><strong>Heure début</strong></label><br>
                     <input type="time" name="heuredebut" id="heuredebut"  style="margin-left:200px"  value="<?php echo $data['Heure_debut'];?>"/>
                     <br/>
                     <br/> 
                     <label style="font-size:25px;margin-left:200px"><strong>Heure fin</strong></label><br>
                     <input type="time" name="heurefin" id="heurefin" style="margin-left:200px" value="<?php echo $data['Heure_fin'];?>"/>
                     <br/>
                     <br/>
                     <td  rowspan="2">
                     <label style="font-size:25px;margin-left:200px"><strong>Description_rdv</strong></label><br>
                     <textarea type="text" name="desc" id="desc" style="margin-left:200px;font-size:30px" ><?php echo $data['description'];?></textarea>
                     <br/>
                     <br/>
                   
                      <div class="modal-footer"style="margin-left:300px;">
                    
                    <button type="reset"  onclick=window.location.href='listeRdv.php' class="btn btn-default" data-dismiss="modal" style="color:black;background-color:#DB1702"><strong style="font-size:20px;">Annuler</strong> <img src="image\cancel.png" width="30"style="margin:5px" ></button>
                   
                    <button type="submit" name="insert" id="insert" value="Modifier" class="btn btn-primary"style="color:black;background-color:#689D71"><strong style="font-size:20px;">Modifier</strong> <img src="image\checkk.png" width="30"style="margin:5px" ></button>
                   
                    </div>
                </form>
            </div>
</div>
        </div>
    </div>
</div>
</body></html>