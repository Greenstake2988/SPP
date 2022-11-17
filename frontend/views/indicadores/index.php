<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\IndicadoresSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Resultados';
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
        .btn-success {
    color: #fff;
    background-color: #044887;
    border-color: #044887;
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
<div class="caja" style="background-color:#FFFFFF; color: write; height:100%; padding:1% 2%; width:100%; margin:0% 0% 2%">
<div class="indicadores-index">
<img src="https://www.itsva.edu.mx/archivos/imagenes/cabecera2019-veda.png"alt="W3Schools.com" style="width:40%;height:60px;float:right;"></div>
<br>
<br>
<h1 style="font-family:Impact; text-align:center">Resultados</h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Resultados Valores B', ['valoresb/index'], ['class' => 'btn btn-success']) ?>
    
        <?= Html::a('Resultados Valores C', ['valoresc/index'], ['class' => 'btn btn-success']) ?>
    
        <?= Html::a('Crear nuevo Indicador', ['estatus/create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

             'idindicadores',
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

            ['class' => 'yii\grid\ActionColumn','template' => '{view} {update} {delete}']
        ],
    ]); ?>
</div>
</div>
</body>
