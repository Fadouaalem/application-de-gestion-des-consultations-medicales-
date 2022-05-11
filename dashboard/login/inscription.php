<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style2.css" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>Se connecter</title>
</head>

<body>
    <style type="text/css" >
         background-image: url("med.jpg");
    </style>
<!--la page se connecter-->
<!--<div class="container">
    <br><br><br>
    <center> <b id="login-name"> Se connecter </b> </center>
</div>-->
<br> <br> <br>

<div class="row">

    <div class="col-md-6 col-md-offset-3" id="login">
        <form action="inscuser.php" method="POST">
            <center> <b id="login-name"> INSCRIPTION </b> </center>
            <div class="form-group">
                <label class="idn">Nom: </label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom ">
                </div>
            </div>

            <div class="form-group">
                <label class="idn">Prenom: </label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="text" class="form-control" id="prenom" name="prenom" placeholder="prenom">
                </div>
            </div>
             <div class="form-group">
                <label class="idn">Date de naissance: </label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="Date" class="form-control" id="date" name="date" placeholder="date de naissance">
                </div>
            </div>
            <div class="form-group">
                <label class="idn">Sexe: </label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="text" class="form-control" id="sexe" name="sexe" placeholder="sexe">
                </div>
            </div>
             <div class="form-group">
                <label class="idn">Telephone: </label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="tel" class="form-control" id="tele" name="tele" placeholder="telephone">
                </div>
            </div>
             <div class="form-group">
                <label class="idn">Identifiant: </label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="text" class="form-control" id="ident" name="ident" placeholder="identifiant">
                </div>
            </div>
             <div class="form-group">
                <label class="idn">Email: </label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <label class="idn">Mot de pass: </label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="password" class="form-control" id="password" name="password" placeholder="mot de passe">
                </div>
            </div>
            <br>

            <div class="form-group">
                <input type="submit" class="btn btn-conx " value="Se connecter">

            </div>


        </form>


    </div>
</div>
</body>

</html>