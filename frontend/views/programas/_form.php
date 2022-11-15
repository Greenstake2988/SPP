<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Periodicidad */
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
        .btn-success {
    color: #fff;
    background-color: #044887;
    border-color: #044887;
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
<style>
.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
    color: black;
    background-color: #e7e7e7;
}

</style>
<div class="caja" style="background-color:#FFFFFF; color: write; height:510px; padding:1% 2%; width:100%; margin:0% 0% 2%">
<body style="background-color:#727A72; margin:0px;">
<div class="periodicidad-form">
<img src="https://www.itsva.edu.mx/archivos/imagenes/cabecera2019-veda.png"alt="W3Schools.com" style="width:40%;height:60px;float:right;">
<br>
<br>
    <h1 style="font-family:Impact; text-align:center">Programa</h1>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Guardar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</body>
</div>



