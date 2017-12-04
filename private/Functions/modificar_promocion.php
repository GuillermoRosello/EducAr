<?php
// Pablo
require 'database.php';
$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
$ruta = $_SERVER['DOCUMENT_ROOT'].'/EducAr/public/img/promo/';

mysqli_select_db($connection, DB_NAME) or die ("No se encuentra DB");

$id		 =$_POST['id'];
$nombre  =$_POST['nombre'];
$detalle =$_POST['detalle'];
//Recibimos los datos de la Imagen
$img 	 =$_FILES['imagen']['name'];
$type_img=$_FILES['imagen']['type'];
$size_img=$_FILES['imagen']['size'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (mysqli_connect_errno()) {
        echo 'Fallo en conexión';
        exit();
    } else {
        if ($size_img > 2048000) {
            echo '<script language="javascript">';
            echo 'alert("Tamaño de Archivo no permitido"); location.href="../../private/promociones/nueva_promocion.php"';
            echo '</script>';
        } else {
            $sql = "UPDATE promociones SET nombre='$nombre', detalle='$detalle', img='$img' WHERE id='$id'";
            $resultado = mysqli_query($connection, $sql);
            $resultado = move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta.$img);
            if ($resultado) {
                echo '<script language="javascript">';
                echo 'alert("Archivo Guardado"); location.href="../../private/promociones/promociones.php"';
                echo '</script>';
            } else {
                echo '<script language="javascript">';
                echo 'alert("Error al Guardar el Archivo"); location.href="../../private/promociones/nueva_promocion.php"';
                echo '</script>';
            }
        }
    }
}

?>
