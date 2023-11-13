<?php
include("db.php");

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM juegos WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombre = $row['nombre'];
    $descripcion = $row['descripcion'];
    $genero = $row['genero'];
    $fecha = $row['fecha'];
    $precio = $row['precio'];
    $clasificacion = $row['clasificacion'];
    $desarrolladores = $row['desarrolladores'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $nombre = $_POST['nombre'];
  $descripcion = $_POST['descripcion'];
  $genero = $_POST['genero'];
  $fecha = $_POST['fecha'];
  $precio = $_POST['precio'];
  $clasificacion = $_POST['clasificacion'];
  $desarrolladores = $_POST['desarrolladores'];

  $query = "UPDATE juegos set nombre = '$nombre', descripcion = '$descripcion', genero = '$genero', fecha = '$fecha', precio = '$precio', clasificacion = '$clasificacion', desarrolladores = '$desarrolladores' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Actualizado con Exito';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="editar.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="nombre" type="text" class="form-control" value="<?php echo $nombre; ?>" placeholder="Actualizar nombre">
        </div>
        <div class="form-group">
          <input name="descripcion" type="text" class="form-control" value="<?php echo $descripcion; ?>" placeholder="Actualizar descripcion">
        </div>
        <div class="form-group">
          <input name="genero" type="text" class="form-control" value="<?php echo $genero; ?>" placeholder="Actualizar genero">
        </div>
        <div class="form-group">
          <input name="fecha" type="date" class="form-control" value="<?php echo $fecha; ?>" placeholder="Actualizar fecha">
        </div>
        <div class="form-group">
          <input name="precio" type="text" class="form-control" value="<?php echo $precio; ?>" placeholder="Actualizar precio">
        </div>
        <div class="form-group">
          <input name="clasificacion" type="text" class="form-control" value="<?php echo $clasificacion; ?>" placeholder="Actualizar clasificacion">
        </div>
        <div class="form-group">
          <input name="desarrolladores" type="text" class="form-control" value="<?php echo $desarrolladores; ?>" placeholder="Actualizar desarrolladores">
        </div>
        <button class="btn-success" name="update">
          Actualizar
        </button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>