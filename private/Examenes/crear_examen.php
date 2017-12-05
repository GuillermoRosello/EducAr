
<?php  require_once('/../Functions/initialize.php');;
if (is_post_request()) {
  $mat_id = $_POST['Materia'];
  $tema_id = $_POST['Tema'];
  $i=1
  while ($i <= 31) {
    $pregunta = "Pregunta-".$i;
    $preg_nombre[] = $_POST[$pregunta];
    $respuesta = "Respuesta-".$i;
    switch ($_POST[$respuesta]) {
      case 1:
        $opc_puntos[] = 1;
        $opc_puntos[] = 0;
        $opc_puntos[] = 0;
        break;
      case 2:
        $opc_puntos[] = 0;
        $opc_puntos[] = 1;
        $opc_puntos[] = 0;
        break;
      case 3:
        $opc_puntos[] = 0;
        $opc_puntos[] = 0;
        $opc_puntos[] = 1;
        break;
    }
    while ($j < 4) {
      $opcion = "Opcion-".$i."-".$j.;
      $opcion[] = $_POST[$opcion];
    }
  }
}
  $result=insert_examen($mat_id, $tema_id, $preg_nombre, $opc_puntos, $opcion);
      if ($result) {
    redirect_to(url_for('/private/examenes.php'));
  }
  else {
    echo "Error";
  }
}
else {
  redirect_to(url_for('/private/examenes.php'));
}
?>
