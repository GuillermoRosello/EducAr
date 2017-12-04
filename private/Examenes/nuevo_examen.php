<?php $page_title ='Examen'; 
$page_subtitle = 'Nuevo';?>
<?php  require '../Functions/initialize.php';
if (!isset($_SESSION['nombre'])) {header('location:'.url_for('public/index.php'));}
if ($_SESSION['permisos']!="ADMIN") {header('location:'.url_for('private/index.php').'');}
?>
<?php include(SHARED_PATH.'/private_header.php'); ?>
<?php include(SHARED_PATH.'/private_navigation.php'); ?>
<?php include(SHARED_PATH.'/private_sidebar.php'); ?>


                <!-- Contact Form -->
                <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
                <div class="row">
                    <div class="col-md-8">
                        <br>
                        <form name="sentMessage" id="contactForm" action="../Examen/crear_examen.php" method="post" >
                          <div class="control-group form-group">
                              <div class="controls">
                                  <label>Tema:</label>
                                  <select name="Tema" class="form-control">
                                    <option value=""></option>
                                    <option value="TEMA 1">TEMA 1</option>
                                    <option value="TEMA 2">TEMA 2</option>
                                    <option value="TEMA 3">TEMA 3</option>
                                  </select>
                              </div>
                          </div>
                          <hr><br>
                          <div class='control-group form-group'>
                              <div class='controls'>
                                  <label>Nombre de Examen:</label>
                                  <input type='text' class='form-control' name= 'Nombre Examen' required data-validation-required-message= Ingrese Nombre Examen >
                                  <p class='help-block'></p>
                              </div>
                          </div>
                          <hr><br>
                          <?php
                          $preg = 1;
                          while ($preg<31) {
                          echo "
                            <div class='control-group form-group'>
                                <div class='controls'>
                                    <h5><label>Pregunta ".$preg.":</label>
                                    <input type='text' class='form-control' name= 'Pregunta-".$preg."' 'required data-validation-required-message= Ingrese Pregunta ".$preg."></h5>
                                    <p class='help-block'></p>
                                </div>
                            </div>";
                            $opc=1;
                            while ($opc < 4) {
                              echo "
                                <div class='control-group form-group'>
                                    <div class='controls'>
                                        <label><h8>Opcion ".$preg."-".$opc.":</label>
                                        <input type=radio value='".$opc."' name ='Respuesta".$preg."' 'required data-validation-required-message= Ingrese Respuesta /> ¿ES RESPUESTA?
                                        <input type='text' class='form-control' name= 'Opcion-".$preg."-".$opc."' 'required data-validation-required-message= Ingrese Opcion ".$preg."-".$opc."'></h8>
                                        <p class='help-block'></p>
                                    </div>
                                </div>";
                                $opc=$opc+1;
                              }
                            $preg=$preg+1;
                            echo "<hr><br>"; ;
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
