<?php
function todaslaspreguntas(){
  global $db;
  $sql = "SELECT * FROM preguntas";
  $result = mysqli_query($db,$sql);
  return $result;
}

function preguntas_examen(){
  require_once ('functions.php');
  $r=0;
  $o=0;
  $id= array();
  $id_o= array();
  global $db;
  $id = UniqueRandomNumbersWithinRange(1, 30, 10);
  while ($r < 10)  {
    $sql = "SELECT * FROM preguntas ";
    $sql.= "WHERE id_preg='".$id[$r]."'";
    $result_set = mysqli_query($db,$sql);
    $result = mysqli_fetch_assoc($result_set);
    echo "<li><h3>".$result['id_preg'].') '.$result['preg']."</h3>";
    $id_o = UniqueRandomNumbersWithinRange(1,3,3);
    mysqli_free_result($result_set);
    while ($o < 3)    {
      $sql = "SELECT * FROM opciones ";
      $sql.= "WHERE id_preg='".$id[$r]."' AND id_opcion='".$id_o[$o]."'";
      $result_set = mysqli_query($db,$sql);
      $result = mysqli_fetch_assoc($result_set);
      echo "<ul><input type=radio value=".$result['es_resp']." name=Pregunta.".$r." /> ".$result['opcion']." ".$result['es_resp']."</ul>";
      $o=$o+1;
      mysqli_free_result($result_set);
    }
    $r=$r+1;
    $o=0;
    echo "</li>";
  }
}

// Pablo
function contacto_web(){
	global $db;
	$sql ="SELECT * FROM tb_cform";
	$result= mysqli_query($db, $sql);
	return ($result);
	}
  
function buscar_contacto($id) {
    global $db;
    $sql = "SELECT * FROM tb_cform ";
    $sql .="WHERE ID='". $id ."'";
    $result = mysqli_query($db, $sql);
    $alumnos= mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return($alumnos);
  }

  
function cant_contacto_web(){
    global $db;
    $sql ="SELECT * FROM tb_cform ";
    $result= mysqli_query($db, $sql);
    $number_of_results=mysqli_num_rows($result);
    return ($number_of_results);
    }
    
function alumnos(){
      global $db;
      $sql ='SELECT * FROM alumnos';
      $result= mysqli_query($db, $sql);
      return ($result);
    }
 
function insert_alumno($nombre, $telefono, $email, $pass,$permisos) {
        global $db;

        $sql = "INSERT INTO alumnos ";
        $sql .= "(nombre, telefono, email, pass, permisos) ";
        $sql .= "VALUES (";
        $sql .= "'" . $nombre . "',";
        $sql .= "'" . $telefono . "',";
        $sql .= "'" . $email . "',";
        $sql .= "'" . $pass . "', ";
        $sql .= "'" . $permisos . "'";
        $sql .= ")";
        $result = mysqli_query($db, $sql);
        // For INSERT statements, $result is true/false
        if($result) {
          return true;
        } else {
          // INSERT failed
          echo mysqli_error($db);
          db_disconnect($db);
          exit;
        }
      }
      
function buscar_alumno($id) {
        global $db;
        $sql = "SELECT * FROM alumnos ";
        $sql .="WHERE id_alumnos='". $id ."'";
        $result = mysqli_query($db, $sql);
        $alumnos= mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        return($alumnos);
      }

function edit_alumno($alumno) {
        global $db;
        $sql = "UPDATE alumnos SET ";
        $sql .= "nombre='".$alumno['nombre']."', ";
        $sql .= "telefono='".$alumno['telefono']."', ";
        $sql .= "email='".$alumno['email']."', ";
        $sql .= "pass='".$alumno['pass']."', ";
        $sql .= "permisos='".$alumno['permisos']."' ";
        $sql .= "WHERE id_alumnos='".$alumno['id_alumnos']."' ";
        $sql .= "LIMIT 1";
        $result = mysqli_query($db, $sql);
        // For INSERT statements, $result is true/false
        if($result) {
          return true;
        } else {
          // INSERT failed
          echo mysqli_error($db);
          db_disconnect($db);
          exit;
        }
      }

function promociones(){
              global $db;
              $sql ="SELECT * FROM promociones";
              $result= mysqli_query($db, $sql);
              return ($result);
            }

function delete_alumno($id){
        global $db;
        $sql ="DELETE FROM alumnos ";
        $sql .="WHERE id_alumnos='".$id."' ";
        $sql .="LIMIT 1";
        $result=mysqli_query($db,$sql);
        return($result);
      }

function login($usuario) {
        global $db;
        $usuario['email']= stripslashes($usuario['email']);
        $usuario['pass']=stripslashes($usuario['pass']);
        $usuario['email']= mysql_real_escape_string($usuario['email']);
        $usuario['pass']= mysql_real_escape_string($usuario['pass']);
        $sql = "SELECT * FROM alumnos ";
        $sql .="WHERE email='". $usuario['email'] ."' ";
        $sql .="AND pass='". $usuario['pass'] ."'";
        $query = mysqli_query($db, $sql);
        $rows = mysqli_fetch_assoc($query);
        if (is_array($rows)) {
          $_SESSION['email']=$rows['email'];;
          $_SESSION['nombre']=$rows['nombre'];
          $_SESSION['id_alumnos']=$rows['id_alumnos'];
          $_SESSION['permisos']=$rows['permisos'];
          return(true);
        }
          else {
            return(null);
          }
      }

function buscar_promocion($id) {
              global $db;
              $sql = "SELECT * FROM promociones ";
              $sql .="WHERE id='". $id ."'";
              $result = mysqli_query($db, $sql);
              $promociones= mysqli_fetch_assoc($result);
              mysqli_free_result($result);
              return($promociones);
            }
/*function preguntas(){
  $resultados=todaslaspreguntas();
  while ($preguntas=mysqli_fetch_assoc($resultados)){
    }
    return $preguntas;
}

function cant_preguntas(){
  global $db;
  $query = "SELECT * FROM preguntas";
  $result_set = mysqli_query($db,$query);
  $cant = mysqli_num_rows($result_set);
  mysqli_free_result($result_set);
  mysqli_close ($db);
  return $cant;
}*/




 ?>
