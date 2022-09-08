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
    $resultados= mysqli_query($conexion,"SELECT * FROM  $tabla_db3  ORDER BY id_vehiculo DESC ");
   
    
    
    ?>

<!-- Inicio nav -->
<nav class="navbar navbar-expand-lg navbar-light text-dark  fixed-top" style="background-color: #F7F6F2; ">
  <div class="container-fluid ">
    <a class="navbar-brand" href="../index.php"> <img src="../imagenes/icon.png" alt="" width="100" height="50"><br></a>
   
  </div>
  <a class="navbar-brand" href="../propietarios/propietarios.php"> Propietarios</a>
  <a class="navbar-brand" href="../vehiculos/vehiculos.php"> Vehiculos</a>
  <a class="navbar-brand" href="../conductores/conductores.php"> Conductores</a>
  <a class="navbar-brand" href="../informes.php"> Informes</a>
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
<div id="vehiculos" class="text-center ">
  <h2>Vehiculos</h2>
  <br>
  <h3>Vehiculos al dia de <?php $hoy = date('m-d-Y', time()); echo $hoy; ?></h3>
  <br><br>
</div>

<!-- Boton de agregar -->
<div >
  <h3><a href="agregar.php" class="btn btn btn-outline-success bi bi-book-half"><i></i>Agregar</a></h3>
</div>
<!-- Fin de agregar -->
<!-- Mostar lista de los libros ordenados por el año de publicación-->

<table class="table table-bordered table-sm table-striped">
  <thead class="text-center">
    <tr>
    <th scope="col">Accion</th>
      <th scope="col">placa</th>
      <th scope="col">color</th>
      <th scope="col">marca</th>
      <th scope="col">tipo de vehiculo</th>
     
      
    </tr>
  </thead>
    <tbody>
      <?php
       while ($consulta = mysqli_fetch_array($resultados)){
        
    
    
      ?>
        <tr>
        <td class="d-flex justify-content-around">
        <a class="btn text-white btn-sm btn-floating" style="background-color: #E94560;"  href="eliminar.php?id_vehiculo=<?php echo $consulta ['id_vehiculo']?>" role="button">
          <i class="bi bi-trash-fill"></i>
        </a>
        <a class="btn text-white btn-sm btn-floating" style="background-color: #8FE3CF;"  href="editar.php?id_vehiculo=<?php echo $consulta ['id_vehiculo']?>" role="button">
      <i class="bi bi-pencil"></i>
    </a></a>

       
      
        </td>  
        <th class="text-center" scope="row"><?php echo $consulta ['placa']."</br>"; ?></th>
        <td class="text-center"><?php echo $consulta ['color']."</br>"; ?></td>
        <td class="text-center"><?php echo $consulta ['marca']."</br>"; ?></td>
        <td class="text-center"><?php echo $consulta ['tipo_vehiculo'] ."</br>"; ?></td>
      

       
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