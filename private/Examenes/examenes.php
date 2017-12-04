<?php $page_title ='Asignar Examen'; ?>
<?php require_once('/../Functions/initialize.php'); ?>
<?php include(SHARED_PATH.'/private_header.php'); ?>
<?php include(SHARED_PATH.'/private_navigation.php'); ?>
<?php include(SHARED_PATH.'/private_sidebar.php'); ?>
<?php  if (!isset($_GET['page'])) { $page=1;}else { $page=$_GET['page'];} ?>
<?php
$resultados_por_pagina = 10;
$inicio_de_esta_pagina = ($page-1)*$resultados_por_pagina;
$alumnos = alumnos($inicio_de_esta_pagina,$resultados_por_pagina);
$numero_paginas = cant_pag_alumnos($resultados_por_pagina)
?>
      <!-- Content Row -->

      <a href="nuevo_examen.php" class="btn btn-primary">Nuevo Examen</a>
                  <!-- Content Column -->
          <div class="col-md-9">
            <table>
              <tr>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Email</th>

              </tr>


            <?php while($alumno = mysqli_fetch_assoc($alumnos)){ ?>
              <tr>
                <td><?php echo h($alumno['nombre']); ?></td>
                <td><?php echo h($alumno['telefono']); ?></td>
                <td><?php echo h($alumno['email']); ?></td>
                <td><?php echo "<a class='btn btn-primary' href='editar_alumno.php?id=".$alumno['id_alumnos']."'> Asignar </a>"; ?></td>
                <td><?php echo "<a class='btn btn-primary' href='confirmar_borrado.php?id=".$alumno['id_alumnos']."'> Resultados </a>"; ?></td>
              </tr>
            <?php }; ?>
            </table>
          </div>
      </div>
      <!-- /.row -->
<?php include(SHARED_PATH.'/private_pagination.php'); ?>
<?php include(SHARED_PATH.'/private_footer.php'); ?>
