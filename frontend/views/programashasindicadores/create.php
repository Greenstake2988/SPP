<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Programashasindicadores */

$this->title = 'Create Programashasindicadores';
$this->params['breadcrumbs'][] = ['label' => 'Programashasindicadores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="programashasindicadores-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
