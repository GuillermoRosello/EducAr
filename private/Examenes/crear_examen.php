
<?php  require_once('/../Functions/initialize.php');;
if (is_post_request()) {
  $tema = $_POST['Tema'];
  $nombre_examen = $_POST['Nombre Examen'];
  $i=1
  while ($i <= 31) {
    $pregunta = "Pregunta-".$i;
    $preguntas[] = $_POST[$pregunta];
    $respuesta = "Respuesta-".$i;
    switch ($_POST[$respuesta]) {
      case 1:
        $respuestas[] = 1;
        $respuestas[] = 0;
        $respuestas[] = 0;
        break;
      case 2:
        $respuestas[] = 0;
        $respuestas[] = 1;
        $respuestas[] = 0;
        break;
      case 3:
        $respuestas[] = 0;
        $respuestas[] = 0;
        $respuestas[] = 1;
        break;
    }
    while ($j < 4) {
      $opcion = "Opcion-".$i."-".$j.;
      $opciones[] = $_POST[$opcion];
    }
  }
}
  $result=insert_examen($tema, $nombre_examen, $Preguntas, $respuestas, $opciones);
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
