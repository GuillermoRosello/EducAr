<?php $page_title ='Promociones'; ?>
<!-- Pablo -->
<?php $page_subtitle ='Confirmar Borrado'; ?>
<?php  require '../Functions/initialize.php';?>
<?php include(SHARED_PATH.'/private_header.php'); ?>
<?php include(SHARED_PATH.'/private_navigation.php'); ?>
<?php include(SHARED_PATH.'/private_sidebar.php'); ?>

<?php $id=$_GET['id']; ?>
<!-- Pablo -->
<?php $promocion=buscar_promocion($id); ?>
<?php $imagen=$promocion['img']; ?>
<?php $ruta = '/EducAr/public/img/promo/'; ?>


                <!-- Contact Form -->
                <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
                <div class="row">
                    <div class="col-md-8">
                        <br>
                        <!-- Pablo -->
						<form name="sentMessage" id="uploadForm" action="../Functions/borrar_promocion.php" method="post" enctype="multipart/form-data">
							<div class="control-group form-group">
								<div class="controls">
									<!-- Pablo -->
									<input type="hidden" class="form-control" value="<?php echo $promocion['id']; ?>" name="id" >
									<p class="help-block"></p>
								</div>
							</div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <!-- Pablo -->
									<label>Nombre:</label>
                                    <input type="text" class="form-control" value="<?php echo $promocion['nombre']; ?>" name="nombre" readonly>
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <!-- Pablo -->
									<label>Detalle:</label>
									<input type="tel" class="form-control" value="<?php echo $promocion['detalle']; ?>" name="detalle" readonly>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <!-- Pablo -->
									<label>Imagen:</label>
								</div>
								<div>
									<image src="<?php echo $ruta.$promocion['img'] ; ?>" height="50%" width="50%">
								</div>
                            </div>
							
                            <div id="success"></div>
                            <!-- For success/fail messages -->
                            <!-- Pablo -->
							<a href="promociones.php" class="btn btn-warning">Regresar</a>
                            <!-- Pablo -->
							<button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </div>

                </div>

            </div>

<hr>
<?php include(SHARED_PATH.'/private_footer.php'); ?>
