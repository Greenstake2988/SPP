<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Valoresc */
/* @var $form yii\widgets\ActiveForm */
?>
    <style>
    .navbar-default .btn-link {
    color: #FFFFFF;
    }
    .navbar-default .navbar-brand {
    color: #FFFFFF;
    }
    .navbar-default .navbar-nav > li > a {
        color: #FFFFFF;
        }
    </style>
<style>
.caja{
border-radius: 5px;
}
</style>
<style>
.wrap > .container {
     padding: 0px 0px 0px; 
}
</style>
<div class="caja" style="background-color:#FFFFFF; color: write; height:100%; padding:1% 2%; width:100%; margin:0% 0% 2%">
<body style="background-color:#727A72; margin:0px;">
<div class="valoresc-form">
<img src="https://www.itsva.edu.mx/archivos/imagenes/cabecera2019-veda.png"alt="W3Schools.com" style="width:40%;height:60px;float:right;">
<br>
<br>
    <div><h1 style="font-family:Impact; text-align:center">Valores</h1></div>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Total')->textInput() ?>

    <?= $form->field($model, 'hombres')->textInput() ?>

    <?= $form->field($model, 'mujeres')->textInput() ?>

    <?= $form->field($model, 'pertenecenEtnia')->textInput() ?>

    <?= $form->field($model, 'HabitanEnElEstado')->textInput() ?>

    <?= $form->field($model, 'ingenieria')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DiscapacidadMotriz')->textInput() ?>

    <?= $form->field($model, 'DiscapacidadMental')->textInput() ?>

    <?= $form->field($model, 'DiscapacidadSensorial')->textInput() ?>

    <?= $form->field($model, 'DiscapacidadPsicosocial')->textInput() ?>

    <?= $form->field($model, 'DiscapacidadComunicacion')->textInput() ?>

    <?= $form->field($model, 'creado')->textInput() ?>

    <?= $form->field($model, 'guardado')->textInput() ?>

    <?= $form->field($model, 'indicadores_idindicadores')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Guardar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</body>
</div>
