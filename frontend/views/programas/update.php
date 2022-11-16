<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Programas */

$this->title = 'Update Programas: ' . $model->idprogramas;
$this->params['breadcrumbs'][] = ['label' => 'Programas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idprogramas, 'url' => ['view', 'id' => $model->idprogramas]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="programas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
