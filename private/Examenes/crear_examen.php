
<?php  require_once('/../Functions/initialize.php');
if (is_post_request()) {
  $examen['mat_id'] = $_POST['mat_nombre'];
  $examen['tema_id'] = $_POST['tema_nombre'];
  $i=1;
  while ($i < 2) {
    $pregunta = "Pregunta-".$i."" ;
    $examen['preg_nombre'] = $_POST[$pregunta];
    $respuesta = "Respuesta-".$i."";
      switch ($_POST[$respuesta]) {
      case 1:
        $examen['opc_puntos'] = 1;
        $examen['opc_puntos'] = 0;
        $examen['opc_puntos'] = 0;
        $examen['preg_nombre'] = $_POST[$pregunta];
        $examen['preg_nombre'] = $_POST[$pregunta];
        $examen['tema_id'] = $_POST['tema_nombre'];
        $examen['tema_id'] = $_POST['tema_nombre'];
        break;
      case 2:
        $examen['opc_puntos'] = 0;
        $examen['opc_puntos'] = 1;
        $examen['opc_puntos'] = 0;
        $examen['preg_nombre'] = $_POST[$pregunta];
        $examen['preg_nombre'] = $_POST[$pregunta];
        $examen['tema_id'] = $_POST['tema_nombre'];
        $examen['tema_id'] = $_POST['tema_nombre'];

        break;
      case 3:
        $examen['opc_puntos'] = 0;
        $examen['opc_puntos'] = 0;
        $examen['opc_puntos'] = 1;
        $examen['preg_nombre'] = $_POST[$pregunta];
        $examen['preg_nombre'] = $_POST[$pregunta];
        $examen['tema_id'] = $_POST['tema_nombre'];
        $examen['tema_id'] = $_POST['tema_nombre'];
        
        break;
      }
    $j = 1;
    while ($j < 4) {
      $opc = "Opcion-".$i."-".$j."";
      $examen['opcion'] = $_POST[$opc];
      $j = $j+1;
    }
    $i = $i+1;
  }

  $result=insert_examen($examen);

      if ($result) {
    redirect_to(url_for('/private/Examenes/examenes.php'));
  }
  else {
    redirect_to(url_for('/private/Examenes/nuevo_examen.php'));
  }
}
?>
