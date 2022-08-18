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
<?php
     include("../modelo/config.php");
    $resultados= mysqli_query($conexion,"SELECT * FROM  $tabla_db1  ORDER BY cc_conductor DESC ");
   
    
    
    ?>

<!-- Inicio nav -->
<nav class="navbar navbar-expand-lg navbar-light text-dark  fixed-top" style="background-color: #F7F6F2; ">
  <div class="container-fluid ">
    <a class="navbar-brand" href="../index.php"> <img src="../imagenes/icon.png" alt="" width="100" height="50"><br></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <h1 class="col text-center h2">Conductores</h1>
    </div>
  </div>
</nav>
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
      <img src="../imagenes/slide1.png" class="d-block w-100" alt="..." width="100%" height="600px">
    </div>
    <div class="carousel-item">
      <img src="../imagenes/slide2.png" class="d-block w-100" alt="..." width="100%" height="600px">
    </div>
    <div class="carousel-item">
      <img src="../imagenes/slide3.png" class="d-block w-100" alt="..." width="100%" height="600px">
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
  <h2>conductores</h2>
  <br>
  <h6>Conductores al dia de  <?php $hoy = date('m-d-Y', time()); echo $hoy; ?> </h6>
  <br><br>
</div>

<!-- Boton de agregar -->
<div >
  <h3>+  <a href="agregar.php" class="btn btn btn-outline-success bi bi-book-half"><i></i>Agregar</a></h3>
</div>
<!-- Fin de agregar -->
<!-- Mostar lista de los libros ordenados por el año de publicación-->

<table class="table">
  <thead>
    <tr>
    <th scope="col">Accion</th>
      <th scope="col">C.C conductor</th>
      <th scope="col">Primer nombre</th>
      <th scope="col">Segundo nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Direccion</th>
      <th scope="col">Telefono</th>
      <th scope="col">Ciudad</th>
      
    </tr>
  </thead>
    <tbody>
      <?php
       while ($consulta = mysqli_fetch_array($resultados)){
        
    
    
      ?>
        <tr>
        <td class="center-text">
        <a href="eliminar.php?cc_conductor=<?php echo $consulta ['cc_conductor']?>"  class="btn btn-outline-danger bi bi-trash" > <i></i>Eliminar</a>
        <a href="editar.php?cc_conductor=<?php echo $consulta ['cc_conductor']?>"  class="btn btn-outline-info bi bi-pencil-fill"><i></i>Editar</a>
       
      
        </td>  
        <th scope="row"><?php echo $consulta ['cc_conductor']."</br>"; ?></th>
        <td><?php echo $consulta ['primer_nombre_c']."</br>"; ?></td>
        <td><?php echo $consulta ['segundo_nombre_c']."</br>"; ?></td>
        <td><?php echo $consulta ['apellidos_c'] ."</br>"; ?></td>
        <td><?php echo $consulta ['direccion_c'] ."</br>"; ?></td>
        <td><?php echo $consulta ['telefono_c'] ."</br>"; ?></td>
        <td><?php echo $consulta ['ciudad_c'] ."</br>"; ?></td>

       
        </tr>
    <?php
      }
    ?>
    
  
  </tbody>
</table>
    
<!-- Footer-->
<div class="card text-center">
  <div class="card-header">
  Grupo oet
  </div>
  <div class="card-body">
    <h5 class="card-title">Acme - Cars</h5>
    <p class="card-text">PRUEBA TÉCNICA .</p>
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