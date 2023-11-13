<?php

include('db.php');

if (isset($_POST['guardar'])) {
  $nombre = $_POST['nombre'];
  $descripcion = $_POST['descripcion'];
  $genero = $_POST['genero'];
  $fecha = $_POST['fecha'];
  $precio = $_POST['precio'];
  $clasificacion = $_POST['clasificacion'];
  $desarrolladores = $_POST['desarrolladores'];

  $query = "INSERT INTO juegos(nombre, descripcion, genero, fecha, precio, clasificacion, desarrolladores) VALUES ('$nombre', '$descripcion','$genero','$fecha','$precio','$clasificacion','$desarrolladores')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Guardado Correctamente';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>