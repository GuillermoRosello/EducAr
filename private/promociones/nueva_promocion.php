<?php $page_title ='Promociones'; ?>
<!-- Pablo -->
<?php $page_subtitle ='Subir'; ?>
<?php require '../Functions/initialize.php';?>
<?php include(SHARED_PATH.'/private_header.php'); ?>
<?php include(SHARED_PATH.'/private_navigation.php'); ?>
<?php include(SHARED_PATH.'/private_sidebar.php'); ?>


                <!-- Contact Form -->
                <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
                <div class="row">
                    <div class="col-md-8">
                        <br>
                        <form name="sentMessage" id="uploadForm" action="../Functions/upload.php" method="post" enctype="multipart/form-data">
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Nombre:</label>
                                    <input type="text" class="form-control" name="nombre" required>
                                </div>
                            </div>

                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Detalle:</label>
                                    <input type="text" class="form-control" name="detalle" required>
                                </div>
                            </div>

                            <div class="control-group form-group">
                                <div class="controls">
                                    <label for="imagen">Imagen:</label>
                                    <!-- Pablo -->
									<input type="file" name="imagen" size="20" accept="image/*" required>
                                </div>
                            </div>

                            <div id="success"></div>
                            <!-- For success/fail messages -->
                            <!-- Pablo -->
							<a href="promociones.php" class="btn btn-warning">Regresar</a>
							<button type="submit" value="Subir Imagen" class="btn btn-primary">Subir</button>
                        </form>
                    </div>

                </div>

            </div>

<hr>
<?php include(SHARED_PATH.'/private_footer.php'); ?>
