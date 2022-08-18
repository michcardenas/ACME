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
  <h2>Aqui puedes Editar  tus vehiculos</h2>
  <br>
  
  <br><br>
</div>

<!-- Mostar lista de los libros ordenados por el año de publicación-->

<?php
    include("../modelo/config.php");
    if (isset($_GET['id_vehiculo'])){
    $id_vehiculo= $_GET['id_vehiculo'];
    $sql= "SELECT * FROM  $tabla_db3 where id_vehiculo ='".$id_vehiculo."'";
    $resultados=mysqli_query($conexion, $sql);
  } else {
    echo "No se puede mostrar la informacion " . $conexion->error;
  }
  
        while ($consulta = mysqli_fetch_array($resultados)){
              
        ?>
       
     
<div class="mx-auto" style="width: 500px;">
<form >
 <div class="form-group col-8 text-center">
        <label for="titulo">Id vehiculo</label>
        <input type="number" readonly="readonly" value="<?php echo $consulta ['id_vehiculo']; ?>" name="id_vehiculo" class="form-control" id="id_vehiculo" >
    </div> 

    <div class="form-group col-8 text-center">
        <label for="titulo">placa</label>
        <input type="text" name="placa" class="form-control" id="placa">
    </div>

    <div class="form-group col-8 text-center">
        <label for="autor">color</label>
        <input type="text" name="color" class="form-control" id="color">
    </div>
    <div class="form-group col-8 text-center">
        <label for="autor">marca</label>
        <input type="text" name="marca" class="form-control" id="marca">
    </div>
    <div class="form-group col-8 text-center">
        <label for="autor">tipo_vehiculo</label>
        <input type="text" name="tipo_vehiculo" class="form-control" id="tipo_vehiculo">
    </div>
    <div class="form-group col-8 text-center">
        <label for="autor">Propietarios</label>

        <select name="propietarios_id" id="propietarios_id" >
        <option value="0">Seleccione:</option>
        <?php
         
         $resultados= mysqli_query($conexion,"SELECT * FROM  $tabla_db2");
           
          while ($propietarios_id = mysqli_fetch_array($resultados)) {
            echo '<option value="'.$propietarios_id['id_propietarios'].'">'.$propietarios_id['primer_nombre_p'].'</option>';
          }
        ?>
      </select>
    </div>
    <div class="form-group col-8 text-center">
        <label for="autor">Conductor</label>
        <select name="conductor_id" id="conductor_id">
        <option value="0">Seleccione:</option>
        <?php
         
         $resultados= mysqli_query($conexion,"SELECT * FROM  $tabla_db1");
           
          while ($conductor_id = mysqli_fetch_array($resultados)) {
            echo '<option value="'.$conductor_id['id_conductor'].'">'.$conductor_id['primer_nombre_c'].'</option>';
          }
        ?>
      </select>
    </div>
 

   
    
  
    <button  type="submit" class="btn btn btn-outline-success bi bi-book-half" name="actualizar"> <i></i>Actualizar</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="vehiculos.php" class="btn btn-outline-info bi bi-pencil-fill"><i></i>Vehiculos</a>
    
</form>
<?php
        }
      ?>
</div>
<?php

    if (isset($_GET['actualizar'])){
      if (isset($_GET['id_vehiculo'])){

        $id_vehiculo =$_GET['id_vehiculo'];
        $placa =$_GET['placa'];
        $color =$_GET['color'];
        $marca =$_GET['marca'];
        $tipo_vehiculo =$_GET['tipo_vehiculo'];
        $propietarios_id =$_GET['propietarios_id'];
        $conductor_id =$_GET['conductor_id'];
      
        
        
        $sql2="UPDATE $tabla_db3 SET
       
       placa='$placa',
       color='$color',
       marca='$marca',
       tipo_vehiculo='$tipo_vehiculo',
       propietarios_id='$propietarios_id',
       conductor_id='$conductor_id'
       

        WHERE id_vehiculo='$id_vehiculo'";
       

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