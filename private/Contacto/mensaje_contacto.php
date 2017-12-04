
<?php $page_title ='Contacto';
$page_subtitle = 'Mensaje'; ?>
<?php  require '../Functions/initialize.php';
if (!isset($_SESSION['nombre'])) {header('location:'.url_for('public/index.php'));}
if ($_SESSION['permisos']!="ADMIN") {header('location:'.url_for('private/index.php').'');}?>
<?php include(SHARED_PATH.'/private_header.php'); ?>
<?php include(SHARED_PATH.'/private_navigation.php'); ?>
<?php include(SHARED_PATH.'/private_sidebar.php'); ?>

<?php  $id=$_GET['id'];?>
<?php $contacto=buscar_contacto($id); ?>


                <!-- Contact Form -->
                <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
                <div class="row">
                    <div class="col-md-8">
                        <br>
                        <form name="sentMessage" id="contactForm" >
                          <div class="control-group form-group">
                              <div class="controls">
                                  <input type="hidden" class="form-control" value=<?php echo $contacto['ID']; ?> name="ID" readonly>
                                  <p class="help-block"></p>
                              </div>
                          </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Nombre:</label>
                                    <input type="text" class="form-control" value=<?php echo $contacto['u_name']; ?> name="nombre" required data-validation-required-message="Ingrese su Nombre y Apellido." readonly>
                                    <p class="help-block"></p>
                                </div>
                            </div>

                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Teléfono:</label>
                                    <input type="tel" class="form-control" value=<?php echo $contacto['phone']; ?> name="telefono" required data-validation-required-message="Ingrese su número telefónico." readonly>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Email:</label>
                                    <input type="email" class="form-control" value=<?php echo $contacto['u_email']; ?> name="email" required data-validation-required-message="Ingrese una dirección de Email válida." readonly>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Mensaje:</label>
                                    <textarea rows="6" cols="100" class="form-control" name="message" required data-validation-required-message="Ingrese su mensaje." maxlength="999" style="resize:none" readonly><?php echo $contacto['subj']; ?></textarea>
                                </div>
                            </div>
                            <div id="success"></div>
                            <!-- For success/fail messages -->

                        </form>
                    </div>

                </div>

            </div>

</div>

<hr>
<?php include(SHARED_PATH.'/private_footer.php'); ?>
