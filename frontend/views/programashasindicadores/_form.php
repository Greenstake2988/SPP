<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Programashasindicadores */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="programashasindicadores-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'programas_idprogramas')->textInput() ?>

    <?= $form->field($model, 'indicadores_idindicadores')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
