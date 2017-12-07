<?php $page_title ='Examen';
$page_subtitle = 'Asignar'; ?>
<?php require_once('/../Functions/initialize.php'); ?>
<?php if (!isset($_SESSION['nombre'])) {header('location:'.url_for('public/index.php'));}
      if ($_SESSION['permisos']!="ADMIN") {header('location:'.url_for('private/index.php').'');}?>
<?php include(SHARED_PATH.'/private_header.php'); ?>
<?php include(SHARED_PATH.'/private_navigation.php'); ?>
<?php include(SHARED_PATH.'/private_sidebar.php'); ?>
<?php $examenes_alumnos = examenes_alumnos(); ?>

      <!-- Content Row -->
      <form action="nuevo_examen.php" method="post">
      <input type="submit" value="Nuevo Examen" class="btn btn-primary"><br><br>

                  <!-- Content Column -->
          <div class="col-md-9">
            <table class="display" id="mitabla">
			<thead>
              <tr>
                <th>Id Examen</th>
                <th>Alumno</th>
                <th>Materia</th>
				<th>Tema</th>
				<th>Fecha</th>
				<th>Nota</th>
				<th>Estado</th>
				<th>Resp. Alumno</th>
              </tr>
			</thead>
			<tbody>
            <?php while($examen_alumno = mysqli_fetch_assoc($examenes_alumnos)){ ?>
              <tr>
				<td><?php echo h($examen_alumno['examen_id']); ?></td>
				  
				<?php $buscar_alumno = buscar_alumno($examen_alumno['alumno_id']); ?>
				<td><?php echo h($buscar_alumno['nombre']); ?></td>
				  
				<?php $buscar_materia = buscar_materia($examen_alumno['mat_id']); ?>
                <td><?php echo h($buscar_materia['mat_nombre']); ?></td>
				
				<?php $buscar_tema = buscar_tema($examen_alumno['tema_id']); ?>
                <td><?php echo h($buscar_tema['tema_nombre']); ?></td>
				  
                <td><?php echo h($examen_alumno['examen_fecha']); ?></td>
				<td><?php echo h($examen_alumno['examen_nota']); ?></td>
				
				<?php $buscar_examen_estado = buscar_examen_estado($examen_alumno['estado_id']); ?>
				<td><?php echo h($buscar_examen_estado['examen_estado']); ?></td>
				
				<td><a href="<?php echo 'resultados.php?id='.$examen_alumno['examen_id'];?>" title="Ver"><span class="glyphicon glyphicon-search"></span></a></td>
              </tr>
            <?php }; ?>
            </tbody>
		  </table>
          </div>
      </div>
      <!-- /.row -->
<?php include(SHARED_PATH.'/private_footer.php'); ?>
