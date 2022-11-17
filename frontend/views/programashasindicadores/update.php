<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Programashasindicadores */

$this->title = 'Update Programashasindicadores: ' . $model->programas_idprogramas;
$this->params['breadcrumbs'][] = ['label' => 'Programashasindicadores', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->programas_idprogramas, 'url' => ['view', 'programas_idprogramas' => $model->programas_idprogramas, 'indicadores_idindicadores' => $model->indicadores_idindicadores]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="programashasindicadores-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
