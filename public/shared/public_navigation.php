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
            <a class="navbar-brand" href="index.php">Examin.Ar</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="acerca.php">Quienes Somos</a>
                </li>
                <li>
                    <a href="contacto.php">Contacto</a>
                </li>
                <li>
                    <a href="promociones.php">Promociones</a>
                </li>
                <?php if (isset($_SESSION['nombre'])) {
                  echo "<li>";
                  echo "<a href=".url_for("..\private\index.php").">".$_SESSION['nombre']."</a>";
                  echo "</li>";
                  echo "<li>";
                  echo "<a href=".url_for('logout.php')."> Logout </a>";
                  echo "</li>";
                  }
                  else {
                    echo "<li>";
                    echo "<a href=".url_for('ingresar.php')."> Ingresar </a>";
                    echo "</li>";
                    }
                ?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<!-- Page Content -->

<?php if ($page_title!="Inicio") { include('shared/public_breadcrumbs.php'); }
else {include('shared/public_carrousel.php');}?>
<div class="container">
    <!-- /.row -->
