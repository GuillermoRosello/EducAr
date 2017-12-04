
<?php $page_title ='Editar Alumno'; ?>
<?php  require_once('/../Functions/initialize.php');;?>
<?php  $id=$_GET['id'];?>
<?php $alumno=buscar_alumno($id); ?>


                <!-- Contact Form -->
                <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
                <div class="row">
                    <div class="col-md-8">
                        <br>
                        <form name="sentMessage" id="contactForm" action="../private/modificar_alumno.php" method="post" >
                          <div class="control-group form-group">
                              <div class="controls">
                                  <input type="hidden" class="form-control" value=<?php echo $alumno['id_alumnos']; ?> name="id_alumnos" readonly >
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
