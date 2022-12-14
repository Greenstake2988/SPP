<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UsuariosindicadoresSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuariosindicadores-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idusuarioindicador') ?>

    <?= $form->field($model, 'idusuario') ?>

    <?= $form->field($model, 'idroles') ?>

    <?= $form->field($model, 'idindicadores') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
