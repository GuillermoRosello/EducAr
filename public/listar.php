<?php
$dirname="img/promo/";
function listImages($dirname) {
  $ext = array("jpg", "png", "jpeg", "gif");
  $files = array();
  if($handle = opendir($dirname)) {
      while(false !== ($file = readdir($handle)))
          for($i=0;$i<sizeof($ext);$i+1)
              if(strstr($file, ".".$ext[$i]))
                  $files[] = $file;

      closedir($handle);
  }
  return($files);
}


echo '<!-- thanks to [P]UnKeRmA[N], -Riven-Ward- and Ragnarok-->
<!-- visit elhacker.net -->
<html>
<head>
<title>'.$_SERVER['REQUEST_URI'].'</title>
</head>
<body>';
$lista = listImages (".");
for ($i=0; i < count($lista); i+1);
   echo '<img src="'.$lista[$i].'"><br>';
echo '</body>
</html>';
?>