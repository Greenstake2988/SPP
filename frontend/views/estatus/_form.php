<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Indicadores */
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
    .btn-success {
    color: #fff;
    background-color: #044887;
    border-color: #044887;
    }
    </style>
<style>
.caja{
border-radius: 7px;
}
</style>
<style>
.wrap > .container {
     padding: 0px 0px 0px; 
}
</style>
<div class="caja" style="background-color:#FFFFFF; color: write; height:170%; padding:1% 2%; width:100%; margin:0% 0% 2%">
<body style="background-color:#727A72; margin:0px;">
<div class="indicadores-form">
<img src="https://www.itsva.edu.mx/archivos/imagenes/cabecera2019-veda.png"alt="W3Schools.com" style="width:40%;height:60px;float:right;">
<h1 style="font-family:Impact; text-align:center">Indicador</h1>
    <?php $form = ActiveForm::begin(); ?>
    <table>
    <tr>
    <td> <?= $form->field($model, 'Programa')->textInput(['maxlength' => true]) ?></td>
    </table>
    <table>
    <tr>
    <td> <?= $form->field($model, 'PeriodoEvaluacion')->textInput() ?></td>
    </table>
    <table>
    <tr>
    <td> <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?></td>
    </table>

    <table>
    <tr>
    <td><?= $form->field($model, 'objetivo')->textInput(['maxlength' => true]) ?></td>
    </table>

    <table>
    <tr>
    <td> <?= $form->field($model, 'nivelObjetivo')->textInput(['maxlength' => true]) ?></td>
    </table>

    <table>
    <tr>
    <td> <?= $form->field($model, 'unidadMedida')->textInput(['maxlength' => true]) ?></td>
    </table>

    <table>
    <tr>
    <td> <?= $form->field($model, 'meta')->textInput() ?></td>
    </table>
    <table>
<tr>
  <td><strong><?= $form->field($model, 'variableB')->textInput(['maxlength' => true]) ?></strong></td>

  <td><strong><?= $form->field($model, 'medioVerificacionB')->textInput(['maxlength' => true]) ?></strong></td>
  </tr>
  </table>
  <table >
<tr>
  <td><strong><?= $form->field($model, 'variableC')->textInput(['maxlength' => true]) ?></strong></td>

  <td><strong><?= $form->field($model, 'medioVerificacionC')->textInput(['maxlength' => true]) ?></strong></td>
  </tr>
  </table>
  <table>
    <tr>
    <td> <?= $form->field($model, 'periodicidad_idperiodicidad')->dropDownList($model->getPeriodicidadList(), ['prompt'=>'Select...']) ?></td>
    </table>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Guardar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</body>
</div>

