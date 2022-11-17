<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Programashasindicadores */

$this->title = $model->programas_idprogramas;
$this->params['breadcrumbs'][] = ['label' => 'Programashasindicadores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="programashasindicadores-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'programas_idprogramas' => $model->programas_idprogramas, 'indicadores_idindicadores' => $model->indicadores_idindicadores], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'programas_idprogramas' => $model->programas_idprogramas, 'indicadores_idindicadores' => $model->indicadores_idindicadores], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'programas_idprogramas',
            'indicadores_idindicadores',
        ],
    ]) ?>

</div>
