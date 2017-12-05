<?php $page_title ='Alumnos'; ?>
<?php $page_subtitle =''; ?>
<?php require '../Functions/initialize.php';?>
<?php if (!isset($_SESSION['nombre'])) {header('location:'.url_for('public/index.php'));}
      if ($_SESSION['permisos']!="ADMIN") {header('location:'.url_for('private/index.php').'');}?>
<?php include(SHARED_PATH.'/private_header.php'); ?>
<?php include(SHARED_PATH.'/private_navigation.php'); ?>
<?php include(SHARED_PATH.'/private_sidebar.php'); ?>
<?php $alumnos = alumnos(); ?>
	<!-- Content Row -->
	<form action="nuevo_alumno.php" method="post">
	<input type="submit" value="Nuevo Alumno" class="btn btn-primary"><br><br>
		<!-- Content Column -->
		<div class="col-md-9">
		<!-- Pablo -->
		<table class="display" id="mitabla">
			<thead><tr>
				<th>Id</th>
				<th>Nombre</th>
				<th>Telefono</th>
				<th>Email</th>
				<th>Permisos</th>
				<th>Editar</th>
				<th>Borrar</th>
				</tr>
			</thead>

			<tbody><?php while($alumno = mysqli_fetch_assoc($alumnos)){ ?><tr>
				<td><?php echo h($alumno['alumno_id']); ?></td>
				<td><?php echo h($alumno['nombre']); ?></td>
				<td><?php echo h($alumno['telefono']); ?></td>
				<td><?php echo h($alumno['email']); ?></td>
				<td><?php echo h($alumno['permisos']); ?></td>
				<!-- Pablo -->
				<td><a href="<?php echo 'editar_alumno.php?id='.$alumno['id_alumnos'];?>" title="Editar"><span class="glyphicon glyphicon-pencil"></span></a></td>
				<!-- Pablo -->
				<td><a href="<?php echo 'eliminar_alumno.php?id='.$alumno['id_alumnos'];?>" title="Borrar"><span class="glyphicon glyphicon-trash"></span></a></td>
				</tr>
				<?php }; ?>
			</tbody>
		</table>
		</div>
	</form>
</div>
      <!-- /.row -->
<!-- Pablo -->
<?php include(SHARED_PATH.'/private_footer.php'); ?>
