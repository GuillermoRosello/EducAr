<?php $page_title ='Ingresar'; ?>
<?php require_once '../private/Functions/initialize.php'; ?>
<?php include('shared/public_header.php') ?>
<?php include('shared/public_navigation.php') ?>

<!-- Contact Form -->
<!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
<div class="row">
    <div class="col-md-8">
        <?php if(isset($mensaje)) {echo $mensaje; }
        else{ echo
            "<form action=".url_for('..\private\Functions\login.php')." method='post'>
                <div class='control-group form-group'>
                    <div class='controls'>
                        <label>Usuario:</label>
                        <input name='email' type='text' id='email' class='form-control' required data-validation-required-message='Ingrese su usuario.'>
                        <p class='help-block'></p>
                    </div>
                </div>
                <div class='control-group form-group'>
                    <div class='controls'>
                        <label>Contraseña:</label>
                        <input name='pass' type='password' id='pass' class='form-control' required data-validation-required-message='Ingrese su contraseña.'>
                    </div>
                </div>
                <div id='success'></div>
                <!-- For success/fail messages -->
                <button type='submit' value='Ingresar' class='btn btn-primary'>Ingresar</button>
            </form>";
            } ?>
    </div>
</div>
<!-- /.row -->
<br>
<?php include('shared/public_footer.php') ?>
