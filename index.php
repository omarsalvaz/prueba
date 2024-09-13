<!DOCTYPE html>
<html lang="es">
  <head>
        <title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="shortcut icon" type="image/x-icon" href="images/log.ico">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="assets/css/login_regist.css">
            <title> Login</title>

            <style type="text/css">
            .backgroundFondo{
            background: url('assets/images/archive.jpg') no-repeat center top;
            background-size: cover;
            height: 100vh;

            display: flex;
            justify-content: center;
            align-items: center;
            }
            </style>
  </head>
  
  <body class="backgroundFondo">
        <div class="container"> 
            <div class="world-latest-articles">
                <div class="row">
                <div class="col-12 col-lg-12">

                <div class="form">
                    <div id="signup">
                        <h1 class="text-center" style="color: #333; font-weight: bold;">Iniciar Sesión</h1>
                        <form action="verificarDatos/verificar_sesion.php" method="post">
                            <div class="field-wrap">
                                <label>Correo</label>
                                <input type="email" name="email" required autocomplete="off"/>
                            </div>
                            <div class="field-wrap">
                                <label>Contraseña</label>
                                <input type="password" name="password" required autocomplete="off"/>
                            </div>

                            <input type="submit" class="button button-block mb-3 mt-5 miBtn mt-3" value="ENTRAR"/>
                            <br><br>    
                        
                        </form>
                </div>
            </div>
        </div>
  </body>
</html>