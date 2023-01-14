<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Registrarse';
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
    <div class="caja" style="background-color:#FFFFFF; color: write; height:550px; margin:0% 0% 2%">
    <strong><div class="card-header" style="background-color: #BC955C; color: #FFFFFF; height:50px; text-align:center">
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>
        <div class="col-lg-5"style="color:black;text-align:center">
        <h3 class="mb-0 fw-bold text-center py-1"></h3></div></strong>
        <br>
        <img src="https://sgi.valladolid.tecnm.mx/Imagenes/Escudo_ITSVA_registrado_copia.png"alt="W3Schools.com" style="width:130px;height:130px;">
        <div class="row" style="text-align:center; width: 50%; margin:0 auto;">
        <div class="col-lg-5" style="color:black;text-align:center; width: 100%; margin:0 auto;">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
            

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Registrarme', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
         </div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>