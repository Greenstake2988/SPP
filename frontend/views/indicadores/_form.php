<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Indicadores */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="indicadores-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'objetivo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nivelObjetivo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'unidadMedida')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meta')->textInput() ?>

    <?= $form->field($model, 'variableB')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'medioVerificacionB')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'variableC')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'medioVerificacionC')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'periodicidad_idperiodicidad')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Guardar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
