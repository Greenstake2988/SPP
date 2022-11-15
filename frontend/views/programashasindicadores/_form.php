<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Programashasindicadores */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="programashasindicadores-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'programas_idprogramas')->dropDownList($model->getProgramaList(), ['prompt'=>'Select...']) ?>

    <?= $form->field($model, 'indicadores_idindicadores')->dropDownList($model->getIndicadorList(), ['prompt'=>'Select...']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Guardar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>
