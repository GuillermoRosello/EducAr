<?php $page_title ='Materias'; ?>
<!-- Pablo -->
<?php $page_subtitle ='Editar'; ?>
<?php  require '../Functions/initialize.php';
if (!isset($_SESSION['nombre'])) {header('location:'.url_for('public/index.php'));}
if ($_SESSION['permisos']!="ADMIN") {header('location:'.url_for('private/index.php').'');}
?>
<?php include(SHARED_PATH.'/private_header.php'); ?>
<?php include(SHARED_PATH.'/private_navigation.php'); ?>
<?php include(SHARED_PATH.'/private_sidebar.php'); ?>

<?php  $id=$_GET['id'];
        echo "";?>
<?php $materia=buscar_materia($id); ?>


                <!-- Contact Form -->
                <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
                <div class="row">
                    <div class="col-md-8">
                        <br>
                        <form name="sentMessage" id="contactForm" action="../Examen_Contenido/modificar_materia.php" method="post" >
                          <div class="control-group form-group">
                              <div class="controls">
                                  <input type="hidden" class="form-control" value=<?php echo $materia['mat_id']; ?> name="mat_id" >
                                  <p class="help-block"></p>
                              </div>
                          </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Nombre Materia:</label>
                                    <input type="text" class="form-control" value=<?php echo $materia['mat_nombre']; ?> name="mat_nombre" required data-validation-required-message="Ingrese Nombre Materia.">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div id="success"></div>
                            <!-- For success/fail messages -->
                            <!-- Pablo -->
                            <a href="materias.php" class="btn btn-warning">Regresar</a>
                            <!-- Pablo -->
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>

                </div>

            </div>

</div>

<hr>
<?php include(SHARED_PATH.'/private_footer.php'); ?>
