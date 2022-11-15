<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Valoresb */

$this->title = 'Update Valoresb: ' . $model->idvaloresb;
$this->params['breadcrumbs'][] = ['label' => 'Valoresbs','Valorescs','url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idvaloresb, $model->idvaloresc,'url' => ['view', 'id' => $model->idvaloresb, $model->idvaloresb]];
$this->params['breadcrumbs'][] = 'Update';

?>
<div class="valoresb-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'prts' => $prts,
    ]) ?>

</div>

