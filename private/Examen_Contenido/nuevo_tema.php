<?php $page_title ='Temas';
	  $page_subtitle ='Nuevo Registro'; ?>
<?php  require '../Functions/initialize.php';
if (!isset($_SESSION['nombre'])) {header('location:'.url_for('public/index.php'));}
if ($_SESSION['permisos']!="ADMIN") {header('location:'.url_for('private/index.php').'');}
?>
<?php include(SHARED_PATH.'/private_header.php'); ?>
<?php include(SHARED_PATH.'/private_navigation.php'); ?>
<?php include(SHARED_PATH.'/private_sidebar.php'); ?>

<?php $id = $_GET['id']; ?>
<?php $materia = buscar_materia($id); ?>

                <!-- Contact Form -->
                <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
                <div class="row">
                    <div class="col-md-8">
                        <br>
                        <form name="sentMessage" id="contactForm" action="../Examen_Contenido/crear_tema.php" method="post" >
						  <div class="control-group form-group">
							  <div class="controls">
								  <input type="hidden" class="form-control" value="<?php echo $materia['mat_id']; ?>" name="mat_id" readonly>
								  <p class="help-block"></p>
							  </div>
                          </div>
							<div class="control-group form-group">
                                <div class="controls">
                                    <label>Materia:</label>
                                    <input type="text" class="form-control" value="<?php echo $materia['mat_nombre']; ?>" name="mat_nombre"  readonly>
                                    <p class="help-block"></p>
                                </div>
                            </div>

							<div class="control-group form-group">
							  <div class="controls">
								  <input type="hidden" class="form-control" value="<?php echo $tema['tema_id']; ?>" name="tema_id" readonly>
								  <p class="help-block"></p>
							  </div>
                          </div>
							<div class="control-group form-group">
                                <div class="controls">
                                    <label>Tema:</label>
                                    <input type="text" class="form-control" name="tema_nombre" required data-validation-required-message="Ingrese Tema.">
                                    <p class="help-block"></p>
                                </div>
                            </div>
							<br>
                            <div id="success"></div>
                            <!-- For success/fail messages -->
                            <!-- Pablo -->
							<a href="../Examen_Contenido/temas.php" class="btn btn-warning">Regresar</a>
                            <!-- Pablo -->
							<button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>

                </div>

            </div>

<hr>
<?php include(SHARED_PATH.'/private_footer.php'); ?>
