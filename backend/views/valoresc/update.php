<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Valoresc */

$this->title = 'Update Valoresc: ' . $model->idvaloresc;
$this->params['breadcrumbs'][] = ['label' => 'Valorescs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idvaloresc, 'url' => ['view', 'id' => $model->idvaloresc]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="valoresc-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'prts' => $prts,
    ]) ?>

</div>
