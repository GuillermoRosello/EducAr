
<?php  require_once('/../Functions/initialize.php');
if (is_post_request()) {
  $mat_id = $_POST['mat_nombre'];
  $tema_id['tema_id'] = $_POST['tema_nombre'];
  $i=1;
  while ($i < 2) {
    $pregunta = "Pregunta-".$i."" ;
    $preg_nombre['preg_nombre'] = $_POST[$pregunta];
    $respuesta = "Respuesta-".$i."";
    $opc_puntos= array();
    switch ($_POST[$respuesta]) {
      case 1:
        $opc_puntos['opc_puntos'] = 1;
        $opc_puntos['opc_puntos'] = 0;
        $opc_puntos['opc_puntos'] = 0;
        break;
      case 2:
        $opc_puntos['opc_puntos'] = 0;
        $opc_puntos['opc_puntos'] = 1;
        $opc_puntos['opc_puntos'] = 0;
        break;
      case 3:
        $opc_puntos['opc_puntos'] = 0;
        $opc_puntos['opc_puntos'] = 0;
        $opc_puntos['opc_puntos'] = 1;
        break;
      }
    $j = 1;
    while ($j < 4) {
      $opc = "Opcion-".$i."-".$j."";
      $opcion['opcion'] = $_POST[$opc];
      $j = $j+1;
    }
    $i = $i+1;
  }

  $result=insert_examen($mat_id, $tema_id, $preg_nombre, $opc_puntos, $opcion);

      if ($result) {
    redirect_to(url_for('/private/Examenes/examenes.php'));
  }
  else {
    redirect_to(url_for('/private/Examenes/nuevo_examen.php'));
  }
}
?>
