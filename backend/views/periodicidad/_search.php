<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PeriodicidadSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="periodicidad-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idperiodicidad') ?>

    <?= $form->field($model, 'fechaInicio') ?>

    <?= $form->field($model, 'fechaFinal') ?>

    <?= $form->field($model, 'estatus_idestatus') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

