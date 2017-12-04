<div class="row">
    <!-- Sidebar Column -->
    <div class="col-md-3">
        <div class="list-group">
          <a href="<?php echo url_for('private/index.php'); ?>" <?php if ($page_title=='Inicio') {echo "class='list-group-item active'";}else {echo "class='list-group-item'";}?>>Inicio</a>
          <a href="<?php echo url_for('private/Contacto/contacto.php'); ?>" <?php if ($page_title=='Contactos') {echo "class='list-group-item active'";}else {echo "class='list-group-item'";}?>>Contactos</a>
          <a href="<?php echo url_for('private/Alumnos/alumnos.php'); ?>" <?php if ($page_title=='Alumnos') {echo "class='list-group-item active'";}else {echo "class='list-group-item'";}?>>Alumnos</a>
          <a href="<?php echo url_for('private/Examenes/examenes.php'); ?>"<?php if ($page_title=='Examen') {echo "class='list-group-item active'";}else {echo "class='list-group-item'";}?>>Examen</a>
          <a href="<?php echo url_for('private/Promociones/promociones.php'); ?>"<?php if ($page_title=='Promociones') {echo "class='list-group-item active'";}else {echo "class='list-group-item'";}?>>Promociones</a>
            </div>
    </div>
