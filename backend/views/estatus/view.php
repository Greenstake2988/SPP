<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Estatus */

$this->title = $model->idestatus;
$this->params['breadcrumbs'][] = ['label' => 'Estatuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estatus-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idestatus], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idestatus], [
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
            'idestatus',
            'tipoEstatus',
        ],
    ]) ?>

</div>
