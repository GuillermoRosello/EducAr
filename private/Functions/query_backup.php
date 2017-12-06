<?php
function preguntas_examen($tema){
  require_once ('functions.php');
  $r=0;
  $o=0;
  $id= array();
  $id_o= array();
  global $db;
  $id = UniqueRandomNumbersWithinRange(1, 30, 10);
  while ($r < 10)  {
    $sql = "SELECT * FROM preguntas ";
    $sql.= "WHERE preg_id='".$id[$r]."' AND tema_id='".$tema."'";
    $result_set = mysqli_query($db,$sql);
    $result = mysqli_fetch_assoc($result_set);
    echo "<li><h3>".$result['preg_id'].') '.$result['preg_nombre']."</h3>";
    $id_o = UniqueRandomNumbersWithinRange(1,3,3);
    mysqli_free_result($result_set);
    while ($o < 3)    {
      $sql = "SELECT * FROM opciones ";
      $sql.= "WHERE preg_id='".$id[$r]."' AND opc_id='".$id_o[$o]."' AND tema_id='".$tema."'";
      $result_set = mysqli_query($db,$sql);
      $result = mysqli_fetch_assoc($result_set);
      echo "<ul><input type=radio value=".$result['opc_puntos']." name=Pregunta.".$r." required/> ".$result['opcion']." ".$result['opc_puntos']."</ul>";
      $o=$o+1;
      mysqli_free_result($result_set);
    }
    $r=$r+1;
    $o=0;
    echo "</li>";
  }
}
?>
