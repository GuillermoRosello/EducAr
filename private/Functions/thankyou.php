<?php

require_once 'initialize.php';
$name    = $db->real_escape_string($_POST['u_name']);
$phone   = $db->real_escape_string($_POST['phone']);
$email   = $db->real_escape_string($_POST['u_email']);
$subj    = $db->real_escape_string($_POST['subj']);
$message = $db->real_escape_string($_POST['message']);
$query   = "INSERT into tb_cform (u_name,u_email,subj,message,phone) VALUES('" . $name . "','" . $email . "','" . $subj . "','" . $message . "','" . $phone . "')";
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
