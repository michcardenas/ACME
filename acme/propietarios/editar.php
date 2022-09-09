<!DOCTYPE html>
<html lang="en">
<head>
     <!--  tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACME</title>
    <!--  iconos y css propio -->
    <link rel="shortcut icon" href="../imagenes/icon.png">
    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <!--  Bootstrap-->
 <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    

</head>
<body>


<!-- Inicio nav -->

<!-- fin del nav -->

<!-- inicio del slide -->

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../imagenes/slide1p.png" class="d-block w-100" alt="..." width="100%" height="600px">
    </div>
    <div class="carousel-item">
      <img src="../imagenes/slide2p.png" class="d-block w-100" alt="..." width="100%" height="600px">
    </div>
    <div class="carousel-item">
      <img src="../imagenes/slide3p.png" class="d-block w-100" alt="..." width="100%" height="600px">
    </div>
  </div>
  <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Fin del slide -->

<div class="text-center ">
  <h2>Aqui puedes Editar  tus propietarios</h2>
  <br>
  
  <br><br>
</div>

<!-- Mostar lista de los libros ordenados por el año de publicación-->

<?php
    include("../modelo/config.php");
    if (isset($_GET['cc_propietario'])){
    $cc_propietario= $_GET['cc_propietario'];
    $sql= "SELECT * FROM  $tabla_db2 where cc_propietario ='".$cc_propietario."'";
    $resultados=mysqli_query($conexion, $sql);
  } else {
    echo "No se puede mostrar la informacion " . $conexion->error;
  }
  
        while ($consulta = mysqli_fetch_array($resultados)){
              
        ?>
       
     
<div class="mx-auto bg-light rounded   pb-5 " style="width: 50%;">
<form action="editar.php#boton"  >
<div  class="d-flex   justify-content-center  flex-wrap"> 
  <div class="form-floating col-4 p-2  mt-5 ">
        <label for="titulo">C.C conductor</label>
        <input type="number" readonly="readonly" value="<?php echo $consulta ['cc_propietario']; ?>" name="cc_propietario" class="form-control" id="cc_propietario" >
    </div>
    </div> 
    <div class="d-flex   justify-content-center  flex-wrap">
    <div class="form-floating col-5 p-2 mt-5">
        
        <input type="text" name="primer_nombre_p" class="form-control" id="primer_nombre_p" value="<?php echo $consulta ['primer_nombre_p']; ?>">
        <label for="primer_nombre_p">Primer nombre</label>
    </div>

    <div class="form-floating col-5 p-2 mt-5">
        
        <input type="text" name="segundo_nombre_p" class="form-control" id="segundo_nombre_p" value="<?php echo $consulta ['segundo_nombre_p']; ?>">
        <label for="segundo_nombre_p">Segundo nombre</label>
    </div>
    <div class="form-floating col-5 p-2 mt-5">
        
        <input type="text" name="apellidos_p" class="form-control" id="apellidos_p" value="<?php echo $consulta ['apellidos_p']; ?>">
        <label for="apellidos_p">Apellidos</label>
    </div>
    <div class="form-floating col-5 p-2 mt-5">
        
        <input type="text" name="direccion_p" class="form-control" id="direccion_p" value="<?php echo $consulta ['direccion_p']; ?>">
        <label for="direccion_p">Direccion</label>
    </div>
    <div class="form-floating col-5 p-2 mt-5">
       
        <input type="tel" name="telefono_p" class="form-control" id="telefono_p" value="<?php echo $consulta ['telefono_p']; ?>">
        <label for="telefono_p">Telefono</label>
    </div>
    <div class="form-floating col-5 p-2 mt-5">
        
        <input type="text" name="ciudad_p" class="form-control" id="ciudad_p" value="<?php echo $consulta ['ciudad_p']; ?>">
        <label for="ciudad_p">Ciudad</label>
    </div>
    </div>
    
  <div id="boton" class="d-flex  justify-content-center flex-wrap p-2">
    <button  type="submit" class="btn btn btn-outline-success bi bi-book-half" name="actualizar"> <i></i>Actualizar</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="propietarios.php" class="btn btn-outline-info bi bi-person-circle"><i></i>Propietarios</a>
    </div>


    
    
</form>
<?php
        }
      ?>
</div>
<?php

    if (isset($_GET['actualizar'])){
      if (isset($_GET['cc_propietario'])){

        $cc_propietario =$_GET['cc_propietario'];
        $primer_nombre_c =$_GET['primer_nombre_p'];
        $segundo_nombre_c =$_GET['segundo_nombre_p'];
        $apellidos_c =$_GET['apellidos_p'];
        $direccion_c =$_GET['direccion_p'];
        $telefono_c =$_GET['telefono_p'];
        $ciudad_c =$_GET['ciudad_p'];
        
        
        $sql2="UPDATE $tabla_db2 SET
       
        primer_nombre_p='$primer_nombre_c',
        segundo_nombre_p='$segundo_nombre_c',
        apellidos_p='$apellidos_c',
        direccion_p='$direccion_c',
        telefono_p='$telefono_c',
        ciudad_p='$ciudad_c'
       

        WHERE cc_propietario='$cc_propietario'";
       

        if(mysqli_query($conexion, $sql2)){

          echo "<div class='alert alert-success text-center' role='alert'>El propietario se ha actualizado correctamente</div>";
      } else {
        echo "<div class='alert alert-danger text-center' role='alert'> Error en la actualizacion</div>" . mysqli_error($conexion);
      }
      // Cierra la conexion
      mysqli_close($conexion);
      }else{

      }
       
          }else{

          }

            
        

?>

<!-- Footer-->
<div class="card text-center">
  <div class="card-header">
  Grupo oet

  </div>
  <div class="card-body">
    <h5 class="card-title">Acme - Cars</h5>
    <p class="card-text">PRUEBA TÉCNICA.</p>
    <h6>Por Michael Cardenas</h6>
  </div>
  <div class="card-footer text-muted">
  17 agosto 2022
  </div>
</div>




<!--  Bootstrap/jQuery y Popper.js -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous" >@import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css");</script>

</body>
</html>