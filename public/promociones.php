<?php $page_title ='Promociones'; ?>
<!-- Pablo -->
<?php $page_subtitle =''; ?>
<?php require '../private/Functions/initialize.php';?>
<?php include('shared/public_header.php') ?>
<?php include('shared/public_navigation.php') ?>

<?php  if (isset($_GET['id'])) {
$id=$_GET['id'];
}
else {
  $id=1;
}?>
<!-- Pablo -->
<?php $promocion=buscar_promocion($id); ?>
<?php $promociones = promociones(); ?>
<?php $imagen=$promocion['img']; ?>
<?php $ruta = '/EducAr/public/img/promo/'; ?>

        <!-- Portfolio Item Row -->
        <div class="row">
            <div class="col-md-8">
                <div>
				<image src="<?php echo $ruta.$promocion['img'] ; ?>"><br>
				</div>
            </div>
            <div class="col-md-4">
                <h3><?php echo $promocion['nombre']; ?></h3>
                <p><?php echo $promocion['detalle']; ?></p>
            </div>
		</div>
        <!-- /.row -->

        <!-- Related Projects Row -->


			<div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Otras Promociones</h3>
            </div>

			<div><?php while($promocion = mysqli_fetch_assoc($promociones)){ ?>
				<?php if ($promocion['id']!=$id) { ?>
				<!-- Pablo -->
				<div class="col-sm-3 col-xs-6">
			    <a href="<?php echo 'promociones.php?id='.$promocion['id']; ?>">

				<img class="img-responsive img-portfolio img-hover" src="img/promo/<?php echo $promocion['img']; ?>"></a>
				</div>
				<?php } }; ?>
			</div>

        </div>
        <!-- /.row -->

        <hr>

  <?php include('shared/public_footer.php') ?>
