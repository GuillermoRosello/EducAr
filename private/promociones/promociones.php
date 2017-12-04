<?php $page_title ='Promociones'; ?>
<!-- Pablo -->
<?php $page_subtitle =''; ?>
<?php require '../Functions/initialize.php';?>
<?php if (!isset($_SESSION['nombre'])) {header('location:'.url_for('public/index.php'));}
      if ($_SESSION['permisos']!="ADMIN") {header('location:'.url_for('private/index.php').'');}?>
<?php include(SHARED_PATH.'/private_header.php'); ?>
<?php include(SHARED_PATH.'/private_navigation.php'); ?>
<?php include(SHARED_PATH.'/private_sidebar.php'); ?>
<?php $promociones = promociones(); ?>
	<!-- Content Row -->
<!---<form action="nueva_promocion.php" method="post">
	<input type="submit" value="Nueva Promoción" class="btn btn-primary"><br><br>-->
		<!-- Content Column -->
		<div class="col-md-9">
		<!-- Pablo -->
		<table class="display" id="mitabla">
			<thead><tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Detalle</th>
				<th>Imagen Subida</th>
				<th>Editar</th>
		  <!---<th>Borrar</th>-->
				</tr>
			</thead>

			<tbody><?php while($promocion = mysqli_fetch_assoc($promociones)){ ?><tr>
				<td><?php echo h($promocion['id']); ?></td>
				<td><?php echo h($promocion['nombre']); ?></td>
				<td><?php echo h($promocion['detalle']); ?></td>
				<td><?php echo h($promocion['img']); ?></td>
				<!-- Pablo -->
				<td><a href="<?php echo 'editar_promocion.php?id='.$promocion['id'];?>" title="Editar"><span class="glyphicon glyphicon-pencil"></span></a></td>
		  <!---<td><a href="<?php echo 'borrar_promocion.php?id='.$promocion['id'];?>" title="Borrar"><span class="glyphicon glyphicon-trash"></span></a></td>-->
				</tr>
				<?php }; ?>
			</tbody>
		</table>
		</div>
	</form>
</div>
      <!-- /.row -->
<?php include(SHARED_PATH.'/private_footer.php'); ?>
