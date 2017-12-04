<?php $page_title ='Contacto'; ?>
<?php require '../Functions/initialize.php';
if (!isset($_SESSION['nombre'])) {header('location:'.url_for('public/index.php'));}
if ($_SESSION['permisos']!="ADMIN") {header('location:'.url_for('private/index.php').'');}
?>
<?php include(SHARED_PATH.'/private_header.php'); ?>
<?php include(SHARED_PATH.'/private_navigation.php'); ?>
<?php include(SHARED_PATH.'/private_sidebar.php'); ?>
<?php
$contactos = contacto_web();
?>
        <!-- Content Row -->
          <!-- Content Column -->
            <div class="col-md-9">
              <table class="display" id="mitabla">
                      <thead><tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                        <th>Asunto</th>
                        <th>Mensaje</th>
                      </tr>
      				</thead>

              <?php while($contacto = mysqli_fetch_assoc($contactos)){ ?>
                <tr>
                  <td><?php echo h($contacto['ID']); ?></td>
                  <td><?php echo h($contacto['u_name']); ?></td>
                  <td><?php echo h($contacto['phone']); ?></td>
                  <td><?php echo h($contacto['u_email']); ?></td>
                  <td><?php echo h($contacto['subj']); ?></td>
                  <td><a class='btn btn-primary' href="<?php echo "mensaje_contacto.php?id=".$contacto['ID']." "; ?>">Mensaje</a></td>
                </tr>
              <?php }; ?>
              </table>
            </div>
        </div>
        <!-- /.row -->
<?php include(SHARED_PATH.'\private_footer.php'); ?>
