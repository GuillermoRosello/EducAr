<?php $page_title ='Examen'; ?>
<?php require_once ('../Functions/initialize.php');?>
<?php include(SHARED_PATH.'/private_header.php'); ?>
<?php /*$tema=$_POST['tema'];*/
$tema=0; ?>
<script type="text/javascript">
  setTimeout(function() {
  document.getElementById("submit").click();
}, 10000);
</script>
<?php include(SHARED_PATH.'/private_navigation.php'); ?>
  <div class="container">
    <div class="col-lg-12">
      <div class="jumbotron">
          <h4><span class="Examen">Examen</span></h4> <br>
          <p>Tiene 10 min para completar el examen</p>
          <button onClick="window.print()" class="btn btn-primary" >Imprimir</button>
          <form action="resultados.php" method="post">
          <ul>
          <?php $preguntas  = preguntas_examen($tema);?>
          </ul>
      <p><input type=submit name=examen class="btn btn-primary" value=Evaluar /></p>
          <input type=submit id="submit" name=examen class="btn btn-primary" value=Evaluar formnovalidate style="display: none;">
      </form>
    </div>
  </div>
<?php include(SHARED_PATH.'/private_footer.php'); ?>
</div>
