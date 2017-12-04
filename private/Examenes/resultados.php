
<?php  require '../Functions/initialize.php';?>
<?php include(SHARED_PATH.'/private_header.php'); ?>
<?php include(SHARED_PATH.'/private_navigation.php'); ?>
<?php

$i = 0;
$resultado = 0;
//print_r($_POST);
  if(isset($_POST['examen']) || $_POST['examen'] == 'Evaluar')
{
  if(isset($_POST['Pregunta_0']) && isset($_POST['Pregunta_1']) && isset($_POST['Pregunta_2']) && isset($_POST['Pregunta_3']) && isset($_POST['Pregunta_4']) && isset($_POST['Pregunta_5']) && isset($_POST['Pregunta_6']) && isset($_POST['Pregunta_7']) && isset($_POST['Pregunta_8']) && isset($_POST['Pregunta_9']))
  {
    while ($i < 10)
    {
      $form = "Pregunta_".$i;
      $preguntas = $_POST[$form];
      $resultado = $resultado + $preguntas;
      $i=$i+1;
    }
    switch ($resultado)
    {
      case 10:
      $nota = "Usted tiene $resultado puntos, Excelente...!";
      break;
      case 9:
      case 8:
      case 7:
      $nota = "Usted tiene $resultado puntos, Bien...!";
      break;
      case 6:
      $nota = "Usted tiene $resultado puntos, Por los pelos...!";
      break;
      case 5:
      case 4:
      $nota = "Usted tiene $resultado puntos, Suspenso, lo esperamos el próximo curso...!";
      break;
      case 3:
      case 2:
      case 1:
      case 0:
      $nota = "Definitivamente, este curso no es para usted...!";
      break;
     }
     echo "<div class=container>";
     echo  "<div class=col-lg-12>";
     echo "<div class=jumbotron>";
     echo "<h4><span class=Examen> $nota.</span></h4> <br>";
  }
  else
    {
    echo "<div class=container>";
    echo  "<div class=col-lg-12>";
    echo "<div class=jumbotron>";
    echo "<h4><span class=Examen>Debe responder todas las preguntas</span></h4> <br>";
    echo " <a href=index1.php class=btn btn-primary >Volver</a> ";
    echo "string";
}


}

?>
</div>
</div>
<?php include(SHARED_PATH.'/private_footer.php'); ?>
</div>
