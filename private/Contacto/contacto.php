<?php $page_title ='Contactos'; ?>
<!-- Pablo -->
<?php $page_subtitle =''; ?>
<?php require '../Functions/initialize.php';?>
<?php include(SHARED_PATH.'/private_header.php'); ?>
<?php include(SHARED_PATH.'/private_navigation.php'); ?>
<?php include(SHARED_PATH.'/private_sidebar.php'); ?>
<?php $contactos = contacto_web(); ?>
        <!-- Content Row -->
          <!-- Content Column -->
            <div class="col-md-9">
              <!-- Pablo -->
			  <table class="display" id="mitabla">
                <thead><tr>
                  <th>Id</th>
                  <th>Nombre</th>
                  <th>Teléfono</th>
                  <th>Email</th>
                  <th>Asunto</th>
                  <th>Mensaje</th>
                </tr>
				</thead>
				
				<tbody><?php while($contacto = mysqli_fetch_assoc($contactos)){ ?><tr>
                  <td><?php echo h($contacto['contacto_id']); ?></td>
                  <td><?php echo h($contacto['contacto_nombre']); ?></td>
                  <td><?php echo h($contacto['contacto_tel']); ?></td>
                  <td><?php echo h($contacto['contacto_email']); ?></td>
                  <td><?php echo h($contacto['contacto_asunto']); ?></td>
				  <!-- Pablo -->
                  <td><a class='btn btn-primary' href="<?php echo "mensaje_contacto.php?id=".$contacto['contacto_id']." "; ?>">Ver</a></td>
                </tr>
              <?php }; ?>
				</tbody>
              </table>
            </div>
        </div>
        <!-- /.row -->
<?php include(SHARED_PATH.'\private_footer.php'); ?>
