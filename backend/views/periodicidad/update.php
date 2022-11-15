<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Periodicidad */

$this->title = 'Update Periodicidad: ' . $model->idperiodicidad;
$this->params['breadcrumbs'][] = ['label' => 'Periodicidads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idperiodicidad, 'url' => ['view', 'id' => $model->idperiodicidad]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="periodicidad-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>



