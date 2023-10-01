<?php
error_reporting(0);
if(isset($_POST['btn'])){
  $usersistem ="desarrollo505";
  $passwordsistem = "cherrysoft";
  $user = $_POST['usuario'];
  $pass = $_POST['pass'];
  if($usersistem == $user and $passwordsistem == $pass){
    $mensaje.="<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>bienvenido</strong> los datos son correctos.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
  }
  else{
    $mensaje.="<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <strong>Holy guacamole!</strong> losdatos son incorrectos.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
  }
  
}


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>inicio de sesion | login</title>
</head>
<body>
    <div class="container">
        <div class="justify-content-center mt-5">
          <div class="row mt-3 text-center"> 
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h1 class="text-center display-6">login | <span class="text-success">inicio de sesion</span></h1>
            </div>
          </div>
          <div class="row mt-2 justify-content-center">
            <div class="col-sm-8 col-md-8 col-lg-8">
              <h2 class="text-center text-danger display-6">
                <span class="text-danger">cherry</span>
                <span class="text-success">tree</span>
                <span class="muted">soft</span>
              </h2>
            </div>
          </div>
          <form action="<?php echo $_SERVER['php_self'];?>" method="post" autocomplete="off">
             <div class="row mt-3 justify-content-center">
                <div class="col-sm-8 col-md-8 col-lg-8">
                  <input type="text" name="usuario" id="usuario" placeholder="usuario" class="form-control rounded-pill border-success">
                </div>
             </div>       
             <div class="row mt-3 justify-content-center">
                <div class="col-sm-8 col-md-8 col-lg-8">
                  <input type="password" name="pass" id="pass" placeholder="password" class="form-control rounded-pill border-success">
                </div>
             </div> 
             <div class="row mt-3 justify-content-center">
                <div class="col-sm-8 col-md-8 col-lg-8">
                  <input type="submit" name="btn" id="enviar" value="ingresar" class="btn btn-sm btn-success rounded-pill">
                </div>
             </div>  
             <?php echo $mensaje?>         
           </form>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>