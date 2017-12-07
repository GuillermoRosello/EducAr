
<?php  require_once('/../Functions/initialize.php');
if (is_post_request()) {
  $tema_id['tema_id'] = $_POST['tema_id'];
  $examen['mat_id'] = $_POST['mat_nombre'];
  $examen['tema_id'] = $_POST['tema_nombre'];
  $i=1;
  while ($i < 31) {
    $pregunta = "Pregunta-".$i."" ;
    $examen['preg_nombre'] = $_POST[$pregunta];
    $result=insertar_pregunta ($examen,$tema_id);
    $preg_id = mysqli_insert_id($db);
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
      $result=insertar_opciones($examen,$j,$preg_id, $tema_id);
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
