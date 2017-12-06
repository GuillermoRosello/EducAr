
<?php  require_once('/../Functions/initialize.php');
if (is_post_request()) {
  $examen['mat_id'] = $_POST['mat_nombre'];
  $examen['tema_id'] = $_POST['tema_nombre'];
  $i=1;
  while ($i < 2) {
    $pregunta = "Pregunta-".$i."" ;
    $examen['preg_nombre'] = $_POST[$pregunta];
    $result=insertar_pregunta($examen);
    $j = 1;
    while ($j < 4) {
      $opc = "Opcion-".$i."-".$j."";
      $examen['opcion'] = $_POST[$opc];
      $respuesta = "Respuesta-".$i."";
      if ($_POST[$respuesta]==$j) {
        $examen['opc_puntos'] = 1;
    }
    else {
      $examen['opc_puntos'] = 0;
    }
      insertar_opciones($examen,$j);
      $j = $j+1;
    }
    $i = $i+1;
  }

        if ($result) {
    redirect_to(url_for('/private/Examenes/examenes.php'));
  }
  else {
    redirect_to(url_for('/private/Examenes/nuevo_examen.php'));
  }
}
?>
