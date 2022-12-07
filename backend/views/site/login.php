<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Iniciar sesión';
?>
    <style>
    .navbar-default .navbar-brand {
    color: #FFFFFF;
    }
    </style>
<style>
.wrap > .container {
     padding: 0px 0px 0px; 
}
</style>
<style>
.caja{
border-radius: 10px;
}
</style>
<style>.card-header{
border-radius: 10px 10px 0px 0px;
}
</style>
<body style="background-color:#727A72;">
<div class="site-login">
<div  style="text-align:center;width: 50%; margin:0 auto;">
    <div class="caja" style="background-color:#FFFFFF; color: write; height:500px; margin:0% 0% 2%">
    <strong><div class="card-header" style="background-color: #BC955C; color: #FFFFFF; height:50px; text-align:center">
        <h3 style="text-align:center; padding:2%" class="mb-0 fw-bold text-center py-1">INICIAR SESIÓN</h3></div></strong>
        <br>
        <img src="https://sgi.valladolid.tecnm.mx/Imagenes/Escudo_ITSVA_registrado_copia.png"alt="W3Schools.com" style="width:142px;height:142px;">
        <img src="LOGONUEVO.png"alt="W3Schools.com" style="width:170px;height:160px;">
        <div class="row" style="text-align:center; width: 50%; margin:0 auto;">
        <div class="col-lg-5" style="text-align:center; width: 100%; margin:0 auto;">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

            <div class="form-group field-loginform-username">
<label class="control-label" for="loginform-username">Nombre de usuario</label>
<input type="text" id="loginform-username" class="form-control" name="LoginForm[username]" autofocus="">

<p class="help-block help-block-error"></p>
</div>

<div class="form-group field-loginform-password required">
<label class="control-label" for="loginform-password">Contraseña</label>
<input type="password" id="contrasena" class="form-control" name="LoginForm[password]" aria-required="true">
<div class="col">
        <label for="password"></label>
        <!-- checkbox que nos permite activar o desactivar la opcion -->
        <div >
          <input style="margin-left:20px;" type="checkbox" id="mostrar_contrasena" onclick="mostrarContrasena()"/>
          &nbsp;&nbsp;Mostrar Contraseña</div>
      </div>
</div>
    <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script>
      
function mostrarContrasena() {
    
  $('#mostrar_contrasena').click(function () {
    if ($('#mostrar_contrasena').is(':checked')) {
      $('#contrasena').attr('type', 'text');
    } else {
      $('#contrasena').attr('type', 'password');
    }
  });
};
</script>

<p class="help-block help-block-error"></p>

<label for="loginform-rememberme">
<input type="hidden" name="LoginForm[rememberMe]" value="0"><input type="checkbox" id="loginform-rememberme" name="LoginForm[rememberMe]" value="1" checked="">
Recordar
</label>
</div>
                <div class="form-group">
                    <?= Html::submitButton('Ingresar', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
</div>
</div>
</div>
</body>