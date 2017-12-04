<?php $page_title ='Inicio'; ?>
<?php  require 'Functions/initialize.php';?>
<?php include(SHARED_PATH.'/private_header.php'); ?>
<?php include(SHARED_PATH.'/private_navigation.php'); ?>
<?php include(SHARED_PATH.'/private_sidebar.php'); ?>

        <!-- Content Row -->
                    <!-- Content Column -->
            <div class="col-md-9">
                <h2>Hola <?php echo $_SESSION['nombre']; ?></h2>
                <p>Bienvenido a la intranet de Examin.ar</p>
                <a href="<?php echo url_for('public\index.php');  ?>" class='btn btn-primary' >Volver a la pagina</a>
            </div>
        </div>
        <!-- /.row -->

<?php include(SHARED_PATH.'/private_footer.php'); ?>
