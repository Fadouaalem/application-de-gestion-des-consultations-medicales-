
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style2.css" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>Se connecter</title>
    <link href="imgg2/favicon.png" rel="shortcut icon" type="image/png">
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
        <form action="verifier.php" method="POST">
            <center> <b id="login-name"> SE CONNECTER </b> </center>
            <div class="form-group">
                <label class="idn">Email: </label>
                <div class="input-group"  >
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" >
                </div>
            </div>

            <div class="form-group">
                <label class="idn">Mot de passe: </label>
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