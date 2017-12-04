<?php $page_title ='Inicio'; ?>
<!-- Pablo -->
<?php $page_subtitle =''; ?>
<?php require '../private/Functions/initialize.php';?>
<?php include('shared/public_header.php'); ?>
<?php include('shared/public_navigation.php'); ?>
<!-- Pablo -->
<?php $promociones = promociones(); ?>
    <!-- Guillermo -->
<?php $ruta = '/EducAr/public/img/promo/'; ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Bienvenidos a Examin.Ar
                </h1>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Exámenes Online</h4>
                    </div>
                    <div class="panel-body">
                        <p>Realiza exámenes online desde la comodidad de tu hogar. Contarás con un usuario y clave únicos que identificarán cada examen que realices.</p>
                        <a href="#" class="btn btn-default">Conocer más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Exámenes presenciales</h4>
                    </div>
                    <div class="panel-body">
                        <p>Ofrecemos también exámenes presenciales para grupos de personas que deban evaluar sus conocimientos con la asistencia de un Tutor.</p>
                        <a href="#" class="btn btn-default">Conocer más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Multiples Temas</h4>
                    </div>
                    <div class="panel-body">
                        <p>Contamos con más de 25 temas y 6 subrubros, de entre los cuales se podrá elegir al momento de realizar la evaluación de sus aptitudes.</p>
                        <a href="#" class="btn btn-default">Conocer más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i>Alta Seguridad</h4>
                    </div>
                    <div class="panel-body">
                        <p>Garantizamos la seguridad al momento de realizar los examenes como de preservar la integridad del examen una vez realizado.</p>
                        <a href="#" class="btn btn-default">Conocer más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Sistema amigable</h4>
                    </div>
                    <div class="panel-body">
                        <p>En Examin.ar sabemos que de nada sirve un Sistema si no es amigable, por lo que día a día mejoramos su usabilidad.</p>
                        <a href="#" class="btn btn-default">Conocer más</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->


		<h2 class="page-header">Promociones</h2>

			<div><?php while($promocion = mysqli_fetch_assoc($promociones)){ ?>
				<!-- Pablo -->
				<div class="col-md-4 col-sm-6">
			    <a href="<?php echo 'promociones.php?id='.$promocion['id']; ?>">

				<img class="img-responsive img-portfolio img-hover" src="img/promo/<?php echo $promocion['img']; ?>"></a>
				</div>
				<?php }; ?>
			</div>

        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Por que elegirnos?</h2>
            </div>
            <div class="col-md-6">
                <p>Características por las cuales nos eligen nuestros clientes:</p>
                <ul>
                    <li><strong>Usuario y Contraseña únicos que identifica, junto a la fecha del día, el Examen realizado.</strong>
                    </li>
                    <li>Tiempo en pantalla para llevar a cabo el examen.</li>
                    <li>Multiple Choice aleatorio</li>
                    <li>Validador de respuesta efectuada.</li>
                    <li>Corrección automática al finalizar.</li>
                    <li>Historial de exámenes realizados.</li>
                    <li>Seguridad de extremo a extremo.</li>
                </ul>
                <p>Además contamos con un helpdesk las 24hs. ofreciendo así asistencia tanto al momento de realizar los exámenes como de contratar el servicio.</p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="img/helpdesk.jpg" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>


      <?php include('shared/public_footer.php') ?>
