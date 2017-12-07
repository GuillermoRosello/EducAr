<?php $page_title ='Alumnos'; ?>
<!-- Pablo -->
<?php $page_subtitle ='Asignar Examen'; ?>
<?php  require '../Functions/initialize.php';
if (!isset($_SESSION['nombre'])) {header('location:'.url_for('public/index.php'));}
if ($_SESSION['permisos']!="ADMIN") {header('location:'.url_for('private/index.php').'');}
?>
<?php include(SHARED_PATH.'/private_header.php'); ?>
<?php include(SHARED_PATH.'/private_navigation.php'); ?>
<?php include(SHARED_PATH.'/private_sidebar.php'); ?>

<?php  $id=$_GET['id'];
        echo "";?>
<?php $alumno=buscar_alumno($id); ?>
<?php $temas = temas(); ?>


                <!-- Contact Form -->
                <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
                <div class="row">
                    <div class="col-md-8">
                        <br>
                        <form name="sentMessage" id="contactForm" action="../Examenes/poner_examen.php" method="post" >
                          <div class="control-group form-group">
                              <div class="controls">
                                  <input type="hidden" class="form-control" value=<?php echo $alumno['alumno_id']; ?> name="alumno_id" >
                                  <p class="help-block"></p>
                              </div>
                          </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Nombre y Apellido / Razon Social:</label>
                                    <input type="text" class="form-control" value=<?php echo $alumno['nombre']; ?> name="nombre" readonly>
                                    <p class="help-block"></p>
                                </div>
                            </div>
							
							<div>
							<label>Tema:</label>
							<select name='tema_id' class="form-control">
								<option value="">Seleccionar</option>
								<?php while($tema = mysqli_fetch_assoc($temas)){ ?>
								<option value="<?php echo h($tema['tema_id']); ?>"><?php echo h($tema['tema_nombre']); ?></option>
								<?php }; ?>
							</select>
						  </div>
							
							<div class="control-group form-group">
                              <div class="controls">
                                  <input type="hidden" class="form-control" value=<?php echo $tema['mat_id']; ?> name="mat_id" >
                                  <p class="help-block"></p>
                              </div>
                          	</div>
							<br>

                            <div id="success"></div>
                            <!-- For success/fail messages -->
                            <!-- Pablo -->
                            <a href="../Alumnos/alumnos.php" class="btn btn-warning">Regresar</a>
                            <!-- Pablo -->
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>

                </div>

            </div>

</div>

<hr>
<?php include(SHARED_PATH.'/private_footer.php'); ?>
