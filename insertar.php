<?php

    include("conexion.php");

    if ($conect){
      ?> 
      
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>conexion Exitosa!</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <?php
    }else{
        ?>
        
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error de conexion!</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        
      <?php
    }

    if (isset($_POST['validar'])){
        if(isset($_POST['nombre1']) && !empty($_POST['nombre1']) && strlen($_POST['nombre2']) >=0 && isset($_POST['apellido1']) && !empty($_POST['apellido2'])
        && isset($_POST['correo']) && !empty($_POST['correo']) && isset($_POST['pw']) && !empty($_POST['pw']) && isset($_POST['fecha'])
        && !empty($_POST['fecha']) && isset($_POST['sexo']) && !empty($_POST['sexo'])  && isset($_POST['radio']) && !empty($_POST['radio'])){

            $nombre1= trim($_POST['nombre1']);
            $nombre2= trim($_POST['nombre2']);
            $apellido1= trim($_POST['apellido1']);
            $apellido2= trim($_POST['apellido2']);
            $correo= trim($_POST['correo']);
            $pw= trim($_POST['pw']);
            $sexo= trim($_POST['sexo']);
            $fecha= trim($_POST['fecha']);
            $edad= trim($_POST['radio']);
            $datos= "INSERT INTO `registro`( `nombre1`, `nombre2`, `apellido1`, `apellido2`, `correo`, `contraseña`, `sexo`, `fecha_nac`,`Mayor_edad`) VALUES
            ('$nombre1','$nombre2','$apellido1','$apellido2','$correo','$pw','$sexo','$fecha','$edad')";
            $reg= mysqli_query($conect,$datos);
            if ($reg){
              ?>

              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Registro exitoso!</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              
            <?php
            }else{
              ?>

              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error al guardar los datos!</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              
            <?php
            }

        }else{
          ?>

            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Favor completar los datos!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
              
          <?php

        }
      }

?>
