<?php include("../modelo/config.php"); ?>
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
<nav class="navbar navbar-expand-lg navbar-light text-dark  fixed-top" style="background-color: #F7F6F2; ">
  <div class="container-fluid ">
    <a class="navbar-brand" href="../index.php"> <img src="../imagenes/icon.png" alt="" width="100" height="50"><br></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <h1 class="col text-center h2"></h1>
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
  <h2>Aqui puedes Agregar tus vehiculos</h2>
  <br>
  
  <br><br>
</div>

<!-- Inputs-->

<div class="mx-auto bg-light rounded   pb-5" style="width: 50%;">
<form action="agregar.php#alert" method="POST">
  
<!-- ID del vehiculo es auto-incrementable por ende esta oculto -->
<div class="d-flex   justify-content-center  flex-wrap">
  <div class="form-floating col-4 p-2  mt-5">
    <input type="hidden" name="id_vehiculo" class="form-control" id="id_vehiculo" autofocus>
</div>

    <div class="form-floating col-5 p-2 mt-5">
        
        <input type="text" name="placa" class="form-control" id="placa" maxlength="6">
        <label for="placa">placa</label>
    </div>

    <div class="form-floating col-5 p-2">
        <label for="autor">color</label>
        <input type="text" name="color" class="form-control" id="color">
    </div>
    <div class="form-floating col-5 p-2">
        <label for="autor">marca</label>
        <input type="text" name="marca" class="form-control" id="marca">
    </div>
    <div class="form-floating col-5 p-2">
    
              <select name="tipo_vehiculo" id="tipo_vehiculo" class="form-select">
              <option value="0">Tipo vehiculo:</option>
          <option>Particular</option>

          <option>Publico</option>

         

          </select>
        <!-- <label for="autor">tipo_vehiculo</label>
        <input type="text" name="tipo_vehiculo" class="form-control" id="tipo_vehiculo"> -->
    </div>
    <div class="form-floating col-5 p-2">
        <label for="autor"></label>

        <select name="propietarios_id" id="propietarios_id" class="form-select" >
        <option value="0">Propietarios</option>
        <?php
         
         $resultados= mysqli_query($conexion,"SELECT * FROM  $tabla_db2");
           
          while ($propietarios_id = mysqli_fetch_array($resultados)) {
            echo '<option value="'.$propietarios_id['id_propietarios'].'">'.$propietarios_id['primer_nombre_p'].'</option>';
          }
        ?>
      </select>
    </div>
    <div class="form-floating col-5 p-2">
      
        <select name="conductor_id" id="conductor_id" class="form-select">
        <option value="0">Conductor</option>
        <?php
         
         $resultados= mysqli_query($conexion,"SELECT * FROM  $tabla_db1");
           
          while ($conductor_id = mysqli_fetch_array($resultados)) {
            echo '<option value="'.$conductor_id['id_conductor'].'">'.$conductor_id['primer_nombre_c'].'</option>';
          }
        ?>
      </select>
    </div>
 
    </div>
   
    
  
    <button  class="btn btn btn-outline-success bi bi-book-half" name="btn_resgistrar"> <i></i>Agregar</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="vehiculos.php" class="btn btn-outline-info bi bi-pencil-fill"><i></i>Vehiculos</a>
    
    
    
</form>
</div>
<?php
    // include("../modelo/config.php");
    $id_vehiculo ="";
    $placa="";
    $color ="";
    $marca ="";
    $tipo_vehiculo ="";
    $propietarios_id ="";
    $conductor_id ="";

        if (isset($_POST['btn_resgistrar'])){
            
            $id_vehiculo =$_POST['id_vehiculo'];
            $placa =$_POST['placa'];
            $color =$_POST['color'];
            $marca =$_POST['marca'];
            $tipo_vehiculo =$_POST['tipo_vehiculo'];
            $propietarios_id =$_POST['propietarios_id'];
            $conductor_id =$_POST['conductor_id'];
        
           
           
            

            if( $placa ==""  || $marca==""|| $tipo_vehiculo=="" || $propietarios_id=="" || $conductor_id==""){
                echo "<div class='alert alert-primary text-center' role='alert'>Debe diligenciar todos los campos</div>" ;
                echo $placa,$marca,$tipo_vehiculo,$propietarios_id,$conductor_id;
            }else{
            $insertar=mysqli_query($conexion,"INSERT INTO  $tabla_db3(id_vehiculo,placa,color,marca,tipo_vehiculo,propietarios_id,conductor_id)VALUES('$id_vehiculo','$placa','$color','$marca','$tipo_vehiculo','$propietarios_id','$conductor_id')");
            if($insertar==true){
              echo "<div id='alert' class='alert alert-success text-center' role='alert'>El vehiculo ha sido guardado correctamente</div>";
          }else{
              echo"<div class='alert alert-danger text-center' role='alert'>Problemas en la creacion del vehiculo</div>";
          }
            
            }
            
         

        }


?>
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