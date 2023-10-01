<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio de Sistema | IscPaoalv</title>
    <link rel="stylesheet"  type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/dark.css">
    <link rel="stylesheet" type="text/css" href="css/pace.css">
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
<div class="row justify-content-center mt-5">
<div class="col-md-10 col-lg-6 px-2 mt-3">
    <h3 class="mb-4 text-center mt-3 display-6">Inicio de Sesión</h3>
    <div class="row mt-1 text-center">
        <div class="col container">
            <img src="img/cherry.png.png" alt="LogoPaoalv" style="width: 200px;" class="img-fluid" id="img1">

        </div>

    </div>
    <div class="row py-1">
        <div id="estado" class="alert alert-success alert-dismissible fade show" role="alert">
            <span>Actualmente tu conexion a internet es estable</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            
        </div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col">
            <div class="form-check form-switch">
                <input type="checkbox" id="darkSwitch" class="form-check-input" >
                <label for="darkSwitch" class="form-check-label">
                  <svg class="bi" width="22" height="22" fill="currentColor">
                 <use xlink:href="library/icons/bootstrap-icons.svg#brightness-low"/>
                  </svg>
                </label>
                <svg class="bi" width="15" height="15" fill="currentColor">
                 <use xlink:href="library/icons/bootstrap-icons.svg#moon-stars"/>
                  </svg>
            </div>
        </div>
    </div>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" autocomplete="off" name="FormLogin" class="px-3 needs-validation" novalidate>
<div class="input-group mb-3 mt-1">
    <span class="input-group-text bg-success" id="User">
     <svg class="bi text-white" width="15" height="15" fill="currentColor">
        <use xlink:href="library/icons/bootstrap-icons.svg#person-fill-check"/>
     </svg>
    </span>
    <input type="text" name="usuario" class="form-control border-success" placeholder="Nombre de usuario" aria-label="usuario" autocomplete="off" required></input>
</div>
<div class="input-group mb-3">
    <span class="input-group-text bg-success" id="pas">
        <svg class="bi text-white" width="15" height="15" fill="currentColor">
            <use xlink:href="library/icons/bootstrap-icons.svg#person-fill-check"/>
</svg>
    </span>
    <input type="password" name="password" class="form-control border-success" placeholder="password" id="VerPassword" aria-label="Password" required/>
</div>
<div class="row py-1 px-1">
    <div class="col">
        <div class="form-check form-switch">
            <input type="checkbox" id="VerPass" class="form-check-input" onclick="verPass(this);"/>
            <label for="VerPass" class="form-check-label">
                Visualizar Password
            </label>
        </div>
    </div>
    <div class="col">
        <a href="RecuperarPass.php" class="link-success link-offset-2 link-underline-opacity-25 text-decoration-none link-underline-opacity-100-hover">
        <svg class="bi" width="20" height="20" fill="currentColor">
            <use xlink:href="library/icons/bootstrap-icons.svg#key-fill"/>
</svg>&nbsp;&nbsp;¿Perdiste tu password?
</a>
    </div>

</div>
<div class="d-grid gap-2 mt-2">
    <input type="submit" name="btnLogin" value="Ingresar" class="btn btn-sm btn-outline-success rounded pill">
</div>
</form>
</div>

</div>    
</body>
</html> 