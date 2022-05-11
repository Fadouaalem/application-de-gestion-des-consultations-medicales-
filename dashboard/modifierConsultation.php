
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
  $connexionDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $requete ="SELECT  patient.Nom_patient,patient.Prenom_patient,patient.Antecedents_medicaux,patient.Antecedents_chirurgiicaux,consultation.Date_consultation,consultation.Id_consultation,consultation.Symptome,consultation.Id_consultation,consultation.Poids,consultation.Id_patient,consultation.Maladie,consultation.Glycemie,consultation.Temperature,consultation.Taille,consultation.Pression_arterielle,consultation.Frequence_cardiaque,consultation.Diagnostique_medicale,consultation.Symptome FROM consultation  INNER JOIN patient ON consultation.Id_patient =patient.Id_patient  where Id_consultation = '".$_GET["edit"]."'";
   $result=$connexionDB->query($requete);
   $data=$result->fetch();
 } catch
 (PDOException $e) {
     die("Erreur: " . $e->getMessage());
 }
?>
<!--Formulaire -->
<div id="add_data_Modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content" >
            <div style="border:4px solid #E74C3C;width:650px;margin-left:300px;">
            <div class="modal-header"style="background-color:#E74C3C;width:650px;font-size 25px;height:140px;">
        
                <h2 class="modal-title" style="margin-left:70px;margin-bottom:-78px;" > <img src="image\immg14.png" width="140" style="margin-bottom:-45px;" ><strong style="marginleft:-15px;margin-top:40px;font-size:50px"> Fiche Consultation</strong></h2>
            </div>
            <div class="modal-body">
                <br/>
                <form method="post" id="insert_form" action="modifierCons.php">
                    <div style="text-align:right">
                    <table>
                    <th>
                        <input name="nom" id="nom" class="form-control" value="<?php echo $data['Nom_patient']." ".$data['Prenom_patient'];?>"  style="width:150px;"></th>
                        <th>
                    <input name="id" id="id" class="form-control" value="<?php echo $data['Id_patient'];?>" style="width:70px;"></th>
                    <th>
                   
                    <input name="idcons" id="idcons" class="form-control" value="<?php /*$requete=$connexionDB->query("SELECT count(patient.Nom_patient)   from consultation INNER JOIN patient ON consultation.Id_patient =patient.Id_patient  WHERE patient.Nom_patient ="."'".$data['Nom_patient']."'"." AND Date_consultation <= "."'".$data['Date_consultation']."'"." ORDER BY Date_consultation")->fetch(); */echo $data['Id_consultation']?>" ></th>
                         
                         <th>
                    <label style="position:relative;left:80px;" >Date Consultation (*)</label><br/>
                    <input type="date" name="datecons" id="datecons"  style="background-color:#BBAE98;position:relative;left:78px;" value="<?php echo $data['Date_consultation'];?>"  /></th>
                    </table>
                    <hr/>
                        </div>
                <h4><b><u style="color:#791CF8;text-decoration:none;size:20px;margin-left:70px;font-size:40px; " > <img src="image\img1.png" width="70"style="margin:5px;margin-bottom:-20px;" >Antécédents </u></b></h4>
                    <div style="border-left:3px  solid #791CF8 ; margin-left:95px">
                    <div style="margin:30px">
                    <br>
                    <label style="font-size:20px ;"><strong>Antécédents Médicaux</strong></label></br>
                    <input name="medic" id="medic" class="form-control" value="<?php echo $data['Antecedents_medicaux'];?>">
                   
                    <br/>
                    <br/>
                    <label style="font-size:20px;"><strong>Antécédents Chirurgicaux</strong></label></br>
                    <input name="chirurg" id="chirurg" class="form-control" value="<?php echo $data['Antecedents_chirurgiicaux'];?>">
                   
                    <br/>
                    </div>
                    </div>
                    <h4><b><u style="color:#DB0073;text-decoration:none;size:20px;margin-left:70px;font-size:40px;" > <img src="image\immg15.png" width="70"style="margin:5px;margin-bottom:-20px;" >Constantes Vitales </u></b></h4>
                    <div style="border-left:3px  solid #DB0073; margin-left:95px">
                    <div style="margin:30px">
                    <label style="font-size:20px ;"><strong>Poids (Kg)</strong></label> <br/>
                    <input type="text" name="poids" id="poids" class="form-control" value="<?php echo $data['Poids'];?>"/>
                    <br/> <br/>
                    <label style="font-size:20px ;"><strong>La taille (Cm)</strong></label> <br/>
                    <input type="text" name="taille" id="taille" class="form-control" value="<?php echo $data['Taille'];?>"/>
                    <br/> <br/>
                    <label style="font-size:20px ;"><strong>Température (C°)</strong></label> <br/>
                    <input type="text" name="temp" id="temp" class="form-control" value="<?php echo $data['Temperature'];?>"/>
                    <br/> <br/>
                    <label style="font-size:20px ;"><strong>Fréquence cardiaque</strong></label> <br/>
                    <input type="text" name="frequence" id="frequence" class="form-control" value="<?php echo $data['Frequence_cardiaque'];?>"/>
                    <br/> <br/>
                    <label style="font-size:20px ;"><strong>Glycemie (g/l)</strong></label> <br/>
                    <input type="text" name="glycemie" id="glycemie" class="form-control" value="<?php echo $data['Glycemie'];?>"/>
                    <br/> <br/>
                    <label style="font-size:20px ;"><strong>Pression artérielle</strong></label> <br/>
                    <input  name="pression" id="pression" class="form-control" value="<?php echo $data['Pression_arterielle'];?>"/>
                    <br/> <br/>
                    </div>
                    </div>
                    <h4><b><u style="color:#FFCB60;text-decoration:none;size:20px;margin-left:70px;font-size:40px; "><img src="image\immg16.png" width="70"style="margin:5px;margin-bottom:-20px;" >Résultat </u></b></h4>
                    <div style="border-left:3px  solid #FFCB60 ; margin-left:95px">
                    <div style="margin:30px">
                    <br>
                    <label style="font-size:20px ;"><strong>Diagnostique médicale</strong></label> <br/>
                    <textarea type="text" name="diagn" id="diagn" class="form-control"><?php echo $data['Diagnostique_medicale'];?></textarea>
                    <br/> <br/>
                    <label style="font-size:20px ;"><strong>Symptome</strong></label> <br/>
                    <textarea type="text" name="symptome" id="symptome" class="form-control"><?php echo $data['Symptome'];?></textarea>
                    <br/> <br/>
                    <label style="font-size:20px ;"><strong>Maladie</strong></label> <br/>
                    <input type="text" name="maladie" id="maladie" class="form-control" value="<?php echo $data['Maladie'];?>"/>
                    <br/> <br/>
                    </div>
                    </div>
                    <div class="modal-footer" style="margin-left:300px;">
         
                    <button type="reset" onclick=window.location.href='listeConsultation.php' class="btn btn-default" data-dismiss="modal" style="color:black;background-color:#DB1702"><strong style="font-size:20px;">Annuler</strong> <img src="image\cancel.png" width="30"style="margin:7px" ></button>
                    <button type="submit" name="edit" id="edit" value="Modifier" class="btn btn-primary"style="color:black;background-color:#689D71;"><strong style="font-size:20px;">Modifier</strong> <img src="image\checkk.png" width="30"style="margin:7px" ></button>
                    </div>
                </form>
            </div>
</div>
        </div>
    </div>
</div>
</body>
</html>