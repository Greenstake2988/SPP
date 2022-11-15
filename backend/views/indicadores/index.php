<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\IndicadoresSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Indicadores';
?>
    <style>
    .navbar-default .btn-link {
    color: #FFFFFF;
    }
    .navbar-default .navbar-brand {
    color: #FFFFFF;
    }
    .navbar-default .navbar-nav > li > a {
        color: #FFFFFF;
        }
    </style>
<style>
.caja{
border-radius: 5px;
}
</style>
<style>
.wrap > .container {
     padding: 0px 0px 0px; 
}
</style>
<body style="background-color:#727A72;">
<div class="caja" style="background-color:#FFFFFF; color: write; height: 100%; padding:1% 2%; width:100%; margin:0% 0% 2%">
<div class="indicadores-index">
<img src="https://www.itsva.edu.mx/archivos/imagenes/cabecera2019-veda.png"alt="W3Schools.com" style="width:40%;height:60px;float:right;"></div>
<br>
<br>
<h1 style="font-family:Impact; text-align:center">Indicadores</h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'idindicadores',
            // 'nombre',
            // 'objetivo',
                'nivelObjetivo',
            // 'unidadMedida',
            // 'meta',
            // 'variableB',
            // 'medioVerificacionB',
            // 'variableC',
            // 'medioVerificacionC',
            // 'periodicidad_idperiodicidad',

            ['class' => 'yii\grid\ActionColumn','template' => '{view}']
        ],
    ]); ?>
</div>
</div>
</body>
