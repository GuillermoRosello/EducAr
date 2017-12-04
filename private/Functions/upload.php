<?php

  $nombre  =$_POST['nombre'];
  $detalle =$_POST['detalle'];
  //Recibimos los datos de la Imagen
  $img     =$_FILES['imagen']['name'];
  $type_img=$_FILES['imagen']['type'];
  $size_img=$_FILES['imagen']['size'];

  echo $type_img;

if($size_img<=2000000){
  if ($type_img=="image/jpeg" || $type_img=="image/jpg" || $type_img=="image/png" || $type_img=="image/gif") {
    //Ruta de la carpeta destino Servidor
    $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/EducAr/public/img/promo/';
    //Mover la imagen de Temporal a Servidor
    move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta_destino.$img);
    echo '<script language="javascript">';
    echo 'alert("Imagen subida"); location.href="../../private/promociones.php?page=1"';
    echo '</script>';

    require 'database.php';
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
    if (mysqli_connect_errno()) {
      echo 'Fallo en conexión';
      exit();
    }
    mysqli_select_db($connection, DB_NAME) or die ("No se encuentra DB");
    $sql="INSERT INTO promociones (nombre,detalle,img) VALUES ('$nombre','$detalle','$img')";
    $resultado=mysqli_query($connection, $sql);

  }else {
    echo '<script language="javascript">';
    echo 'alert("Solo se puede subir imágenes de tipo: jpeg/jpg/png/gif"); location.href="../../private/nueva_promocion.php"';
    echo '</script>';
  }
}else {
  echo '<script language="javascript">';
  echo 'alert("El tamaño es demasiado grande"); location.href="../../private/nueva_promocion.php"';
  echo '</script>';
}

?>
