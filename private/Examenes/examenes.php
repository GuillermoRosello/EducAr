<?php $page_title ='Examen';
$page_subtitle = 'Asignar'; ?>
<?php require_once('/../Functions/initialize.php'); ?>
<?php if (!isset($_SESSION['nombre'])) {header('location:'.url_for('public/index.php'));}
      if ($_SESSION['permisos']!="ADMIN") {header('location:'.url_for('private/index.php').'');}?>
<?php include(SHARED_PATH.'/private_header.php'); ?>
<?php include(SHARED_PATH.'/private_navigation.php'); ?>
<?php include(SHARED_PATH.'/private_sidebar.php'); ?>
<?php $alumnos = alumnos(); ?>
      <!-- Content Row -->
      <form action="nuevo_examen.php" method="post">
      <input type="submit" value="Nuevo Examen" class="btn btn-primary"><br><br>

                  <!-- Content Column -->
          <div class="col-md-9">
            <table class="display" id="mitabla">
			<thead>
              <tr>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Email</th>
				<th>Asignar</th>
				<th>Resultado</th>
              </tr>
			</thead>
			<tbody>
            <?php while($alumno = mysqli_fetch_assoc($alumnos)){ ?>
              <tr>
                <td><?php echo h($alumno['nombre']); ?></td>
                <td><?php echo h($alumno['telefono']); ?></td>
                <td><?php echo h($alumno['email']); ?></td>
                <td><a href="<?php echo 'editar_alumno.php?id='.$alumno['id_alumnos'];?>" title="Asignar"><span class="glyphicon glyphicon-pencil"></span></a></td>
				<td><a href="<?php echo 'resultados.php?id='.$alumno['id_alumnos'];?>" title="Resultados"><span class="glyphicon glyphicon-search"></span></a></td>
              </tr>
            <?php }; ?>
            </tbody>
		  </table>
          </div>
      </div>
      <!-- /.row -->
<?php include(SHARED_PATH.'/private_footer.php'); ?>
