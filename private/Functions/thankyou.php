<?php

require_once 'initialize.php';
$name    = $db->real_escape_string($_POST['contacto_nombre']);
$phone   = $db->real_escape_string($_POST['contacto_tel']);
$email   = $db->real_escape_string($_POST['contacto_email']);
$subj    = $db->real_escape_string($_POST['contacto_asunto']);
$message = $db->real_escape_string($_POST['contacto_mensaje']);
$query   = "INSERT into contactos (contacto_nombre,contacto_email,contacto_asunto,contacto_mensaje,contacto_tel) VALUES('" . $name . "','" . $email . "','" . $subj . "','" . $message . "','" . $phone . "')";
$success = $db->query($query);

if (!$success) {
    die("Couldn't enter data: ".$db->error);
    echo '<script language="javascript">';
    echo 'alert("Error en solicitud"); location.href="../../public/contacto.php"';
    echo '</script>';
    /*header("Location: ../../public/contacto.php");*/
}
else {
  echo '<script language="javascript">';
  echo 'alert("Solicitud Exitosa"); location.href="../../public/contacto.php"';
  echo '</script>';
  /*header("Location: ../../public/contacto.php");*/
}

?>
