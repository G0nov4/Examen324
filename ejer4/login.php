<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>WEB fcpn</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
<!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
  </head>

<body>

      <div class="login-form">
            <div id="logo"><img src="imagenes/logo2.png" alt="" width="120px" height="120px" style="margin-left: 30%;margin-bottom:20px;"></div>
            <!--form con el metodo POST hacia acceso.php-->
            <form action="control_session.php" method="post">
                <div class="form-group ">
                    <input type="text" class="form-control" placeholder="Username" id="UserName" name="login">
                    <i class="fas fa-user"></i>
                </div>
                <div class="form-group log-status">
                    <input type="password" class="form-control" placeholder="Password" id="Passwod" name="pass">
                    <i class="fas fa-lock"></i>
                </div>
                <span class="alert">Credenciales no Válidas</span>
                <a class="link" href="#">¿Perdiste tu contraseña?</a>
                <button type="submit" class="log-btn" >Acceso</button>
            </form>
        </div>

</body>

</body>
</html>