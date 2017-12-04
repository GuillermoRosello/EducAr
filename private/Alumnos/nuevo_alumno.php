<?php $page_title ='Alumnos'; ?>
<!-- Pablo -->
<?php $page_subtitle ='Nuevo Registro'; ?>
<?php  require '../Functions/initialize.php';?>
<?php include(SHARED_PATH.'/private_header.php'); ?>
<?php include(SHARED_PATH.'/private_navigation.php'); ?>
<?php include(SHARED_PATH.'/private_sidebar.php'); ?>


                <!-- Contact Form -->
                <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
                <div class="row">
                    <div class="col-md-8">
                        <br>
                        <form name="sentMessage" id="contactForm" action="../Alumnos/crear_alumno.php" method="post" >
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Nombre y Apellido / Razon Social:</label>
                                    <input type="text" class="form-control" name="nombre" required data-validation-required-message="Ingrese su Nombre y Apellido.">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Teléfono:</label>
                                    <input type="tel" class="form-control" name="telefono" required data-validation-required-message="Ingrese su número telefónico.">
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Email:</label>
                                    <input type="email" class="form-control" name="email" required data-validation-required-message="Ingrese una dirección de Email válida.">
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Contraseña:</label>
                                    <input type="text" name="pass" class="form-control" required>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Permisos:</label>
                                    <select name="permisos" class="form-control">
                                      <option value=""></option>
                                      <option value="ALUMNO">ALUMNO</option>
                                      <option value="PROFESOR">PROFESOR</option>
                                      <option value="ADMIN">ADMIN</option>
                                    </select>
                                </div>
                            </div>
                            <div id="success"></div>
                            <!-- For success/fail messages -->
                            <!-- Pablo -->
							<a href="alumnos.php?page=1" class="btn btn-warning">Regresar</a>
                            <!-- Pablo -->
							<button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>

                </div>

            </div>

<hr>
<?php include(SHARED_PATH.'/private_footer.php'); ?>
