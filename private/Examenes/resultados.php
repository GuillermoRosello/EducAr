
<?php  require '../Functions/initialize.php';?>
<?php include(SHARED_PATH.'/private_header.php'); ?>
<?php include(SHARED_PATH.'/private_navigation.php'); ?>
<?php
$examen_id=$_POST['examen_id'];
$tema=$_POST['tema'];
$i = 0;
$resultado = 0;
$opciones = 0;
//print_r ($_POST);
  if(isset($_POST['examen']) || $_POST['examen'] == 'Evaluar' || isset($_POST['ignorar']) || $_POST['ignorar'] == 'Evaluar')
{
    while ($i < 10)
    {
      $query = "preg_id-".$i;
      $preg [$query] = $_POST[$query];
      $preg_id = $preg [$query];
      $form = "Pregunta-".$i;
      if (empty($_POST[$form])) {
      $resultado = $resultado + 0;
      }
      else {
      $opcion[$form] = $_POST[$form];
      $opcion_id = $opcion[$form];

      $preguntas = es_respuesta($preg_id,$opcion_id,$tema);
      $resultado = $resultado + $preguntas;
      }
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
     examen_realizado($examen_id, $preg, $opcion, $nota);
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



?>
</div>
</div>
<?php include(SHARED_PATH.'/private_footer.php'); ?>
</div>
