<?php $page_title ='Temas'; ?>
<?php $page_subtitle =''; ?>
<?php require '../Functions/initialize.php';?>
<?php if (!isset($_SESSION['nombre'])) {header('location:'.url_for('public/index.php'));}
      if ($_SESSION['permisos']!="ADMIN") {header('location:'.url_for('private/index.php').'');}?>
<?php include(SHARED_PATH.'/private_header.php'); ?>
<?php include(SHARED_PATH.'/private_navigation.php'); ?>
<?php include(SHARED_PATH.'/private_sidebar.php'); ?>
<?php $materias = materias(); ?>
<?php $temas = temas(); ?>
	<!-- Content Row -->
	<form action="../Examen_Contenido/nuevo_tema.php" method="post">
	<input type="submit" value="Nuevo Tema" class="btn btn-primary"><br><br>
		<!-- Content Column -->
		<div class="col-md-9">
		<!-- Pablo -->
		<table class="display" id="mitabla">
			<thead><tr>
				<th>Id</th>
				<th>Tema</th>
				<th>Materia</th>
				<th>Editar</th>
				</tr>
			</thead>

			<tbody><?php while($tema = mysqli_fetch_assoc($temas)){ ?><tr>
				<td><?php echo h($tema['tema_id']); ?></td>
				<td><?php echo h($tema['tema_nombre']); ?></td>
				<?php $buscar_materia = buscar_materia($tema['mat_id']); ?>
				<td><?php echo ($buscar_materia['mat_nombre']); ?></td>
				<!-- Pablo -->
				<td><a href="<?php echo '../Examen_Contenido/editar_tema.php?id='.$tema['tema_id'];?>" title="Editar"><span class="glyphicon glyphicon-pencil"></span></a></td>
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
