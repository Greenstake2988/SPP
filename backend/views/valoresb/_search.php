<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ValoresbSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="valoresb-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idvaloresb') ?>

    <?= $form->field($model, 'Total') ?>

    <?= $form->field($model, 'hombres') ?>

    <?= $form->field($model, 'mujeres') ?>

    <?= $form->field($model, 'pertenecenEtnia') ?>

    <?php // echo $form->field($model, 'HabitanEnElEstado') ?>

    <?php // echo $form->field($model, 'ingenieria') ?>

    <?php // echo $form->field($model, 'DiscapacidadMotriz') ?>

    <?php // echo $form->field($model, 'DiscapacidadMental') ?>

    <?php // echo $form->field($model, 'DiscapacidadSensorial') ?>

    <?php // echo $form->field($model, 'DiscapacidadPsicosocial') ?>

    <?php // echo $form->field($model, 'DiscapacidadComunicacion') ?>

    <?php // echo $form->field($model, 'creado') ?>

    <?php // echo $form->field($model, 'guardado') ?>

    <?php // echo $form->field($model, 'indicadores_idindicadores') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
