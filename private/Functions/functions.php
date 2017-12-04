<?php
require_once ('initialize.php');
function UniqueRandomNumbersWithinRange($min, $max, $quantity) {
    $numbers = range($min, $max);
    shuffle($numbers);
    return array_slice($numbers, 0, $quantity);}
function redirect_to($location) {
  header("Location: " . $location);
  exit;}
  function url_for($script_path) {
  // add the leading '/' if not present
  if($script_path[0] != '/') {
    $script_path = "/" . $script_path;
  }
  return WWW_ROOT . $script_path;
}

function u($string="") {
  return urlencode($string);
}

function raw_u($string="") {
  return rawurlencode($string);
}

function h($string="") {
  return htmlspecialchars($string);
}

function error_404() {
  header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
  exit();
}

function error_500() {
  header($_SERVER["SERVER_PROTOCOL"] . " 500 Internal Server Error");
  exit();
}

function cant_pag_contactos($resultados_por_pagina) {
  $cant_contacto_web=cant_contacto_web();
  $result=ceil($cant_contacto_web/$resultados_por_pagina);
  return $result;
}
function cant_pag_alumnos($resultados_por_pagina) {
  $cant_contacto_web=cant_alumnos();
  $result=ceil($cant_contacto_web/$resultados_por_pagina);
  return $result;
}

function cant_pag_promociones($resultados_por_pagina) {
  $cant_promociones=cant_promociones();
  $result=ceil($cant_promociones/$resultados_por_pagina);
  return $result;
}


function is_post_request() {
  return $_SERVER['REQUEST_METHOD'] == 'POST';
}
?>
