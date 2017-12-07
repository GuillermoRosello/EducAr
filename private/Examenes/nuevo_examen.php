<?php $page_title ='Examen';
$page_subtitle = 'Nuevo';?>
<?php  require '../Functions/initialize.php';
if (!isset($_SESSION['nombre'])) {header('location:'.url_for('public/index.php'));}
if ($_SESSION['permisos']!="ADMIN") {header('location:'.url_for('private/index.php').'');}
?>
<?php include(SHARED_PATH.'/private_header.php'); ?>
<?php include(SHARED_PATH.'/private_navigation.php'); ?>
<?php include(SHARED_PATH.'/private_sidebar.php'); ?>

<?php $id = $_GET['id']; ?>
<?php $tema = buscar_tema($id); ?>

                <!-- Contact Form -->
                <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
                <div class="row">
                    <div class="col-md-8">
                        <br>
                        <form name="sentMessage" id="contactForm" action="../Examenes/crear_examen.php" method="post" >
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
                                    <h5><label>Pregunta ".$preg.":</label>
                                    <input type='text' class='form-control' name= 'Pregunta-".$preg."' 'required data-validation-required-message= Ingrese Pregunta ".$preg."></h5>
                                    <p class='help-block'></p><br>
                                </div>
                            </div>";
                            $opc=1;
                            while ($opc < 4) {
                              echo "
                                <div class='control-group form-group'>
                                    <div class='controls'>
                                        <label><h8>Opcion ".$preg."-".$opc.":</label>
                                        <input type=radio value='".$opc."' name ='Respuesta-".$preg."' 'required data-validation-required-message= Ingrese Respuesta /> ¿ES RESPUESTA?
                                        <input type='text' class='form-control' name= 'Opcion-".$preg."-".$opc."' 'required data-validation-required-message= Ingrese Opcion ".$preg."-".$opc."'></h8>
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
