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
   $requete ="SELECT *from  patient where Id_patient = '".$_GET["print"]."'";
   $result=$connexionDB->query($requete);
   $data=$result->fetch();
 } catch
 (PDOException $e) {
     die("Erreur: " . $e->getMessage());
 }
?>


<!--<div onclick="window.print()">-->
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
<div id="add_data_Modal" class="modal fade" tabindex="-1" role="dialog" >
<div class="modal-dialog" role="document">
  <div class="modal-content" >
    <div style="border:4px solid #0ABAB5;width:600px;margin-left:300px;">
     <div class="modal-header"style="background-color:#0ABAB5;border: 1px solid white; width: 600px; height: 120px;margin-right: 500px;margin-right:50px ;margin-left: 0px">
      
       <h2 class="modal-title" style="text-align: center; font-size: 40px;;margin-left: -210px"> <img src="image\hospitalisation.png" width="80"><strong >FICHE PATIENT</strong></h2>
     </div>
     <div class="modal-body">
       <br/>
       <form method="post" id="insert_form" >
         <h4><b><u style="color:#1E7FCB;text-decoration:none;font-size:26px;margin-left: 50px" > <img src="image\user.png" width="50" >Informations Patient </u></b></h4>
          <div style="border-left:3px  solid #1E7FCB;margin-left: 75px">
             <div style="margin:30px;margin-left: 30px">
               <label> <strong> N° Patient</strong></label><br>
               <input type="Number" name="id" id="id" class="form-control" value="<?php echo $data['Id_patient'];?>" />
               <br/> <br/>
               <label><strong> Nom</strong></label><br>
               <input type="text" name="nom" id="nom" class="form-control" value="<?php echo $data['Nom_patient'];?>"/>
               <br/> <br/>
               <label><strong> Prénom</strong></label><br>
               <input type="text" name="prenom" id="prenom" class="form-control" value="<?php echo $data['Prenom_patient'];?>"/>
               <br/> <br/>
               <label> <strong> Date Naissance</strong></label><br>
               <input type="date" name="datedenaissance" id="datedenaissance" class="form-control" value="<?php echo $data['Date_naissance_patient'];?>"/>
               <br/> <br/>
               <label> <strong> Age</strong></label><br>
               <input type="number" name="age" id="age" class="form-control" value="<?php echo $data['Age_patient'];?>"/>
               <br/> <br/>
               <label><strong>Sexe Patient</strong> </label><br>
               <input   name="sexe" id="sexe" class="form-control" value="<?php echo $data['Sexe_patient'];?>" >
               <br/> <br/>
               <label><strong> Group_sanguin</strong></label><br>
               <input  name="sanguin" id="sanguin" class="form-control" value="<?php echo $data['Group_sanguin'];?>">
               
               <br/> <br/>
               <label><strong>Situation Familiale</strong> </label><br>
               <input name="SituationFamilial" id="SituationFamilial" class="form-control" value="<?php echo $data['Situation_familiale_patient'];?>">
               <br/> <br/>
             </div>
           </div>
           <h4><b><u style="color:#1B019B;text-decoration:none;font-size:26px ;margin-left: 50px"><img src="image\img.png" width="50"style="margin:5px" >Coordonnées Patient </u></b></h4>
               <div style="border-left:3px  solid #1B019B ; margin-left: 75px">
                 <div style="margin-left:30px">
                  <br>
                  <label><strong>  Email</strong></label><br>
                  <input type="text" name="email" id="email" class="form-control" value="<?php echo $data['Email_patient'];?>"/>
                  <br/> <br/>
                  <label><strong> Téléphone</strong></label><br>
                  <input type="text" name="telephone" id="telephone" class="form-control" value="<?php echo $data['Telephone_patient'];?>"/>
                  <br/> <br/>
                  <label><strong> Adresse</strong></label><br>
                  <input type="text" name="adresse" id="adresse" class="form-control" value="<?php echo $data['Adresse_patient'];?>"/>
                  <br/> <br/>
                 </div>
               </div>
           <h4><b><u style="color:#791CF8;text-decoration:none;font-size:26px ;margin-left: 50px" > <img src="image\img1.png" width="50"style="margin:5px" >Antécédents </u></b></h4>
               <div style="border-left:3px  solid #791CF8 ;  margin-left: 75px">
                 <div style="margin:30px">
                   <br>
                   <label><strong> Antécédents Médicaux</strong></label><br>
                   <textarea style="width: 300px;height: 100px" type="text" name="medic" id="medic" class="form-control" ><?php echo $data['Antecedents_medicaux'];?></textarea>
                   <br/> <br/>
                   <label><strong>Antécédents Chirurgicaux</strong> </label><br>
                   <textarea style="width: 300px;height: 100px" type="text" name="chirurg" id="chirurg" class="form-control" ><?php echo $data['Antecedents_chirurgiicaux'];?></textarea>
                   <br/> <br/>
                 </div>
               </div>
        </form>
     </div>
</div>
</div>
</div>
</div>
</div>
 <button onClick="imprimer('sectionAimprimer')" type="submit" name="insert" id="insert" value="Modifier" class="btn btn-primary"style="color:black;background-color:#689D71;margin-left: 700px"  ><strong>imprimer</strong> <img src="image\checkk.png" width="30"style="margin:5px" ></button>
</body>
</html>