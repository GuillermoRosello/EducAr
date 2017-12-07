<?php $page_title ='Materias'; ?>
<?php $page_subtitle =''; ?>
<?php require '../Functions/initialize.php';?>
<?php if (!isset($_SESSION['nombre'])) {header('location:'.url_for('public/index.php'));}
      if ($_SESSION['permisos']!="ADMIN") {header('location:'.url_for('private/index.php').'');}?>
<?php include(SHARED_PATH.'/private_header.php'); ?>
<?php include(SHARED_PATH.'/private_navigation.php'); ?>
<?php include(SHARED_PATH.'/private_sidebar.php'); ?>
<?php $materias = materias(); ?>
	<!-- Content Row -->
	<form action="../Examen_Contenido/nueva_materia.php" method="post">
	<input type="submit" value="Nueva Materia" class="btn btn-primary"><br><br>
		<!-- Content Column -->
		<div class="col-md-9">
		<!-- Pablo -->
		<table class="display" id="mitabla">
			<thead><tr>
				<th>Id</th>
				<th>Materia</th>
				<th>Editar</th>
				<th>Crear Tema</th>
				</tr>
			</thead>

			<tbody><?php while($materia = mysqli_fetch_assoc($materias)){ ?><tr>
				<td><?php echo h($materia['mat_id']); ?></td>
				<td><?php echo h($materia['mat_nombre']); ?></td>
				<!-- Pablo -->
				<td><a href="<?php echo '../Examen_Contenido/editar_materia.php?id='.$materia['mat_id'];?>" title="Editar"><span class="glyphicon glyphicon-pencil"></span></a></td>
				<td><a href="<?php echo '../Examen_Contenido/nuevo_tema.php?id='.$materia['mat_id'];?>" title="Crear Tema"><span class="glyphicon glyphicon-pencil"></span></a></td>
				<?php }; ?>
			</tbody>
		</table>
		</div>
	</form>
</div>
      <!-- /.row -->
<!-- Pablo -->
<?php include(SHARED_PATH.'/private_footer.php'); ?>
