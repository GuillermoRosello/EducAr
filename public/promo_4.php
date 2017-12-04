<?php $page_title ='Promociones'; ?>
<!-- Pablo -->
<?php $page_subtitle =''; ?>
<?php require '/Functions/initialize.php';?>
<?php include('shared/public_header.php') ?>
<?php include('shared/public_navigation.php') ?>

<?php $id=$_GET['id']; ?>
<!-- Pablo -->
<?php $promocion=buscar_promocion('1'); ?>
<?php $imagen=$promocion['img']; ?>
<?php $ruta = '/EducAr/public/img/promo/'; ?>

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive" src="img/promos_750x500.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="http://placehold.it/750x500" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="http://placehold.it/750x500" alt="">
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>

			
			
			<h2 class="page-header">Promociones</h2>
			<div class="col-lg-12">
				<?php while($promocion = mysqli_fetch_assoc($promociones)){ ?>
				<div class="	col-md-4 col-sm-6">
			    <a href="<?php echo 'promociones.php?id='.$promocion['id']; ?>">
                    <img class="img-responsive img-portfolio img-hover" alt="" src="img/promo/<?php echo $promocion['img']; ?>">
                </a>
				</div>
            <?php }; ?>
        	</div>
			
			
            <div class="col-md-4">
                <h3><?php echo $promocion['nombre']; ?></h3>
                <p><?php echo $promocion['detalle']; ?></p>
                <h3>Project Details</h3>
                <ul>
                    <li>Lorem Ipsum</li>
                    <li>Dolor Sit Amet</li>
                    <li>Consectetur</li>
                    <li>Adipiscing Elit</li>
                </ul>
            </div>

        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Related Projects</h3>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive img-hover img-related" src="img/promos_500x300.jpg" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive img-hover img-related" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive img-hover img-related" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive img-hover img-related" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

        </div>
        <!-- /.row -->

        <hr>

  <?php include('shared/public_footer.php') ?>
