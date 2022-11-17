<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Indicadores */

$this->title = 'Insertar Valores';
$this->params['breadcrumbs'][] = ['label' => 'Indicadores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="indicadores-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>