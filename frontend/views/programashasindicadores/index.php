<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProgramashasindicadoresSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Programashasindicadores';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="programashasindicadores-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Programashasindicadores', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'programas_idprogramas',
            'indicadores_idindicadores',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
