<?php $page_title ='Examen'; ?>
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
<?php $alumno=buscar_alumno($id); ?>


                <!-- Contact Form -->
                <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
                <div class="row">
                    <div class="col-md-8">
                        <br>
                        <form name="sentMessage" id="contactForm" action="../Alumnos/modificar_alumno.php" method="post" >
                          <div class="control-group form-group">
                              <div class="controls">
                                  <input type="hidden" class="form-control" value=<?php echo $alumno['alumno_id']; ?> name="alumno_id" >
                                  <p class="help-block"></p>
                              </div>
                          </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Nombre y Apellido / Razon Social:</label>
                                    <input type="text" class="form-control" value=<?php echo $alumno['nombre']; ?> name="nombre" required data-validation-required-message="Ingrese su Nombre y Apellido.">
                                    <p class="help-block"></p>
                                </div>
                            </div>

                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Teléfono:</label>
                                    <input type="tel" class="form-control" value=<?php echo $alumno['telefono']; ?> name="telefono" required data-validation-required-message="Ingrese su número telefónico.">
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Email:</label>
                                    <input type="email" class="form-control" value=<?php echo $alumno['email']; ?> name="email" required data-validation-required-message="Ingrese una dirección de Email válida.">
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Contraseña:</label>
                                    <input type="password" value=<?php echo $alumno['pass']; ?> name="pass" class="form-control" required>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Permisos:</label>
                                    <select name="permisos" class="form-control">
                                      <option value="<?php echo $alumno['permisos'];?>"><?php echo $alumno['permisos'];?></option>
                                      <option value="ALUMNO">ALUMNO</option>
                                      <option value="PROFESOR">PROFESOR</option>
                                      <option value="ADMIN">ADMIN</option>
                                    </select>
                                </div>
								<br>
                            </div>
                            <div id="success"></div>
                            <!-- For success/fail messages -->
                            <!-- Pablo -->
                            <a href="alumnos.php" class="btn btn-warning">Regresar</a>
                            <!-- Pablo -->
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>

                </div>

            </div>

</div>


<?php $page_title ='Examen';
$page_subtitle = 'Editar';?>
<?php  require '../Functions/initialize.php';
if (!isset($_SESSION['nombre'])) {header('location:'.url_for('public/index.php'));}
if ($_SESSION['permisos']!="ADMIN") {header('location:'.url_for('private/index.php').'');}
?>
<?php include(SHARED_PATH.'/private_header.php'); ?>
<?php include(SHARED_PATH.'/private_navigation.php'); ?>
<?php include(SHARED_PATH.'/private_sidebar.php'); ?>

<?php $id = $_GET['id']; ?>
<?php $tema = buscar_tema($id); ?>
<?php $preg = buscar_preg($id); ?>

                <!-- Contact Form -->
                <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
                <div class="row">
                    <div class="col-md-8">
                        <br>
                        <form name="sentMessage" id="contactForm" action="../Examenes/modificar_examen.php" method="post" >
						  <div class="control-group form-group">
                              <div class="controls">
                                  <input type="hidden" class="form-control" value="<?php echo $tema['tema_id']; ?>" name="tema_id" readonly>
                                  <p class="help-block"></p>
                              </div>
                          </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Materia:</label>
									<?php $buscar_materia = buscar_materia($tema['mat_id']); ?>
									<input type="text" class="form-control" value="<?php echo h($buscar_materia['mat_nombre']); ?>" name="mat_nombre"  readonly>
                                    <p class="help-block"></p>
                                </div>
                            </div>
							<div class="control-group form-group">
                                <div class="controls">
                                    <label>Tema:</label>
                                    <input type="text" class="form-control" value="<?php echo $tema['tema_nombre']; ?>" name="tema_nombre"  readonly>
                                    <p class="help-block"></p>
                                </div>
                            </div>
							<div class="control-group form-group">
							  <div class="controls">
								  <input type="hidden" class="form-control" value="<?php echo $tema['tema_id']; ?>" name="tema_id" readonly>
								  <p class="help-block"></p>
							  </div>
                          </div>
                          <hr>
						  <br>
                          <?php
                          $preg = 1;
                          while ($preg<3) {
                          echo "
                            <div class='control-group form-group'>
                                <div class='controls'>
                                    <h5><label>Pregunta ".$preg['preg_id'].":</label>
                                    <input type='text' class='form-control' name= 'Pregunta-".$preg['preg_id']."' 'required data-validation-required-message= Ingrese Pregunta ".$preg['preg_id']."></h5>
                                    <p class='help-block'></p><br>
                                </div>
                            </div>";
                            $opc=1;
                            while ($opc < 4) {
                              echo "
                                <div class='control-group form-group'>
                                    <div class='controls'>
                                        <label><h8>Opcion ".$preg['preg_id']."-".$opc.":</label>
                                        <input type=radio value='".$opc."' name ='Respuesta-".$preg['preg_id']."' 'required data-validation-required-message= Ingrese Respuesta /> ¿ES RESPUESTA?
                                        <input type='text' class='form-control' name= 'Opcion-".$preg['preg_id']."-".$opc."' 'required data-validation-required-message= Ingrese Opcion ".$preg['preg_id']."-".$opc."'></h8>
                                        <p class='help-block'></p>
                                    </div>
                                </div>";
                                $opc=$opc+1;
                              }
                            $preg=$preg+1;
                            echo "<br><hr><br>"; ;
                            }
                             ?>
                            <div id="success"></div>
                            <!-- For success/fail messages -->
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>

                </div>

            </div>

</div>

<hr>
<?php include(SHARED_PATH.'/private_footer.php'); ?>



<hr>
<?php include(SHARED_PATH.'/private_footer.php'); ?>
