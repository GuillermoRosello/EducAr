<?php $page_title ='Temas';
$page_subtitle ='Nuevo Registro'; ?>
<?php  require '../Functions/initialize.php';
if (!isset($_SESSION['nombre'])) {header('location:'.url_for('public/index.php'));}
if ($_SESSION['permisos']!="ADMIN") {header('location:'.url_for('private/index.php').'');}
?>
<?php include(SHARED_PATH.'/private_header.php'); ?>
<?php include(SHARED_PATH.'/private_navigation.php'); ?>
<?php include(SHARED_PATH.'/private_sidebar.php'); ?>
<?php $materias = materias(); ?>

                <!-- Contact Form -->
                <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
                <div class="row">
                    <div class="col-md-8">
                        <br>
                        <form name="sentMessage" id="contactForm" action="../Examen_Contenido/crear_tema.php" method="post" >
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Nombre Tema:</label>
                                    <input type="text" class="form-control" name="tema_nombre" required data-validation-required-message="Ingrese Nombre Tema.">
                                    <p class="help-block"></p>
                                </div>
                            </div>
							
							<div>
								<label>Materia:</label>
								<select name='mat_id' class="form-control">
									<option value="">Seleccionar</option>
									<?php while($materia = mysqli_fetch_assoc($materias)){ ?>
									<option value="<?php echo h($materia['mat_id']); ?>"><?php echo h($materia['mat_nombre']); ?></option>
									<?php }; ?>
								</select>
							</div>
							<br><br>
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
