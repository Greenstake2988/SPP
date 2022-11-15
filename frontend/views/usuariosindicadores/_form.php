<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Usuariosindicadores */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuariosindicadores-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idusuario')->dropDownList($model->getUsuariosList(), ['prompt'=>'Select...']) ?>

    <?= $form->field($model, 'idroles')->dropDownList($model->getRoleList(), ['prompt'=>'Select...']) ?>

    <?= $form->field($model, 'idindicadores')->dropDownList($model->getIndicadorList(), ['prompt'=>'Select...']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Guardar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
