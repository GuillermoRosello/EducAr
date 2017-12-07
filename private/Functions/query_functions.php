<?php
function todaslaspreguntas(){
  global $db;
  $sql = "SELECT * FROM preguntas";
  $result = mysqli_query($db,$sql);
  return $result;
}

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
    echo "<input type='hidden' name='preg_id-".$r."' value='".$result['preg_id']."'>";
    $id_o = UniqueRandomNumbersWithinRange(1,3,3);
    mysqli_free_result($result_set);
    while ($o < 3)    {
      $sql = "SELECT * FROM opciones ";
      $sql.= "WHERE preg_id='".$id[$r]."' AND opc_id='".$id_o[$o]."' AND tema_id='".$tema."'";
      $result_set = mysqli_query($db,$sql);
      $result = mysqli_fetch_assoc($result_set);
      echo "<ul><input type=radio value=".$result['opc_puntos']." name=Pregunta.".$r." required/> ".$result['opcion']." ".$result['opc_puntos']."</ul>";
      echo "<ul><input  style='display: none'  type=radio value=".$result['opc_id']." name=Pregunta.".$r." required/> </ul>";
      $o=$o+1;
      mysqli_free_result($result_set);
    }
    $r=$r+1;
    $o=0;
    echo "</li>";
  }
return ($result);
}

// Pablo
function contacto_web(){
	global $db;
	$sql ="SELECT * FROM contactos";
	$result= mysqli_query($db, $sql);
	return ($result);
	}

function buscar_contacto($id) {
        global $db;
        $sql = "SELECT * FROM contactos ";
        $sql .="WHERE contacto_id='". $id ."'";
        $result = mysqli_query($db, $sql);
        $contactos= mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        return($contactos);
      }

function examenes_alumnos(){
      global $db;
      $sql ='SELECT * FROM examen_alumno';
      $result= mysqli_query($db, $sql);
      return ($result);
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
        $sql .="WHERE alumno_id='". $id ."'";
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
        $sql .= "WHERE alumno_id='".$alumno['alumno_id']."' ";
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
        $sql .="WHERE alumno_id='".$id."' ";
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
          $_SESSION['alumno_id']=$rows['alumno_id'];
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

function insertar_pregunta ($examen) {
                    global $db;
                    $sql = "INSERT INTO preguntas ";
                    $sql .= "(preg_nombre, tema_id) ";
                    $sql .= "VALUES (";
                    $sql .= "'" . $examen['preg_nombre'] . "',";
                    $sql .= "'" . $examen['tema_id'] . "'";
                    $sql .= ")";
                    $result = mysqli_query($db, $sql);
            }

function insertar_opciones ($examen,$opc,$preg_id) {
              global $db;
                    $examen['opc_id']=$opc;
                    $sql = "INSERT INTO opciones ";
                    $sql .= "(tema_id, preg_id, opc_id, opcion, opc_puntos) ";
                    $sql .= "VALUES (";
                    $sql .= "'" . $examen['tema_id'] . "', ";
                    $sql .= "'". $preg_id ."', ";
                    $sql .= "'" . $examen['opc_id'] . "', ";
                    $sql .= "'" . $examen['opcion'] . "', ";
                    $sql .= "'" . $examen['opc_puntos'] . "'";
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

function materias(){
      global $db;
      $sql ='SELECT * FROM materias';
      $result= mysqli_query($db, $sql);
      return ($result);
    }

function temas(){
      global $db;
      $sql ='SELECT * FROM temas';
      $result= mysqli_query($db, $sql);
      return ($result);
    }

function examen_estado(){
      global $db;
      $sql ='SELECT * FROM examen_estado';
      $result= mysqli_query($db, $sql);
      return ($result);
    }

function buscar_examen_estado($id) {
        global $db;
        $sql = "SELECT * FROM examen_estado ";
        $sql .="WHERE estado_id='". $id ."'";
        $result = mysqli_query($db, $sql);
        $alumnos= mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        return($alumnos);
      }

function crear_materia($mat_nombre) {
        global $db;

        $sql = "INSERT INTO materias ";
        $sql .= "(mat_nombre) ";
        $sql .= "VALUES (";
        $sql .= "'" . $mat_nombre . "'";
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

function buscar_materia($mat_id) {
        global $db;
        $sql = "SELECT * FROM materias ";
        $sql .="WHERE mat_id='". $mat_id ."'";
        $result = mysqli_query($db, $sql);
        $materias= mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        return($materias);
      }

function edit_materia($materia) {
        global $db;
        $sql = "UPDATE materias SET ";
        $sql .= "mat_nombre='".$materia['mat_nombre']."' ";
        $sql .= "WHERE mat_id='".$materia['mat_id']."' ";
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

function crear_tema($tema_nombre,$mat_id) {
        global $db;
        $sql = "INSERT INTO temas ";
        $sql .= "(tema_nombre, mat_id) ";
        $sql .= "VALUES (";
        $sql .= "'" . $tema_nombre . "', ";
        $sql .= "'" . $mat_id . "'";
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

function buscar_tema($tema_id) {
        global $db;
        $sql = "SELECT * FROM temas ";
        $sql .="WHERE tema_id='". $tema_id ."'";
        $result = mysqli_query($db, $sql);
        $temas= mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        return($temas);
      }

function edit_tema($mat_id,$tema_nombre,$tema_id) {
        global $db;
        $sql = "UPDATE temas SET ";
	    $sql .= "mat_id='".$mat_id['mat_id']."', ";
        $sql .= "tema_nombre='".$tema_nombre['tema_nombre']."' ";
        $sql .= "WHERE tema_id='".$tema_id['tema_id']."' ";
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

 ?>
