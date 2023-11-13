<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- ADD TASK FORM -->
      <div class="card card-body">
        <form action="guardar.php" method="POST">
          <div class="form-group">
            <input type="text" name="nombre" class="form-control" placeholder="Nombre" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="descripcion" class="form-control" placeholder="Descripción"></input>
          </div>
          <div class="form-group">
            <input type="text" name="genero" class="form-control" placeholder="Genero"></input>
          </div>
          <div class="form-group">
            <input type="date" name="fecha" class="form-control" placeholder="Fecha"></input>
          </div>
          <div class="form-group">
            <input type="text" name="precio" class="form-control" placeholder="Precio"></input>
          </div>
          <div class="form-group">
            <input type="text" name="clasificacion" class="form-control" placeholder="Clasificacion"></input>
          </div>
          <div class="form-group">
            <input type="text" name="desarrolladores" class="form-control" placeholder="Desarrolladores"></input>
          </div>
          <input type="submit" name="guardar" class="btn btn-success btn-block" value="Guardar">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Genero</th>
            <th>Fecha</th>
            <th>Precio</th>
            <th>Clasificacion</th>
            <th>Desarrolladores</th>
            <th>Accion</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM juegos";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['descripcion']; ?></td>
            <td><?php echo $row['genero']; ?></td>
            <td><?php echo $row['fecha']; ?></td>
            <td><?php echo $row['precio']; ?></td>
            <td><?php echo $row['clasificacion']; ?></td>
            <td><?php echo $row['desarrolladores']; ?></td>
            <td>
              <a href="editar.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="borrar.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>