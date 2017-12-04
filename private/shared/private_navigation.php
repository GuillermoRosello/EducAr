<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Menu Desplegable</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo url_for('/private/index.php');?>">Examin.Ar</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                <?php if (isset($_SESSION['nombre'])) {
                  echo "<li>";
                  echo "<a href=".url_for('private/datos.php').">".$_SESSION['nombre']."</a>";
                  echo "</li>";
                  echo "<li>";
                  echo "<a href=".url_for('private/logout.php')."> Logout </a>";
                  echo "</li>";
                  }
                  else {
                    echo "<li>";
                    echo "<a href=".url_for('private/ingresar.php')."> Ingresar </a>";
                    echo "</li>";
                    }
                ?>
                </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<?php if ($page_subtitle!="Examen") { include(SHARED_PATH.'/private_breadcrumbs.php'); }?>
<div class="container">
