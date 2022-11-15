<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ValoresbSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Valores B';
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
border-radius: 7px;
}
</style>
<style>
.wrap > .container {
     padding: 0px 0px 0px; 
}
</style>
<div class="caja" style="background-color:#FFFFFF; color: write; height:100%; padding:1% 2%; width:100%; margin:0% 0% 2%">
<body style="background-color:#727A72; margin:0px;">
<div class="valoresb-index">
<img src="https://www.itsva.edu.mx/archivos/imagenes/cabecera2019-veda.png"alt="W3Schools.com" style="width:40%;height:60px;float:right;">
<br>
<br>
    <div><h1 style="font-family:Impact; text-align:center">Lista Valores B</h1></div>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            //'idvaloresb',
            'Total',
            //'hombres',
            //'mujeres',
            //'pertenecenEtnia',
            // 'HabitanEnElEstado',
            // 'ingenieria',
            // 'DiscapacidadMotriz',
            // 'DiscapacidadMental',
            // 'DiscapacidadSensorial',
            // 'DiscapacidadPsicosocial',
            // 'DiscapacidadComunicacion',
            // 'creado',
            // 'guardado',
            // 'indicadores_idindicadores',

            ['class' => 'yii\grid\ActionColumn','template' => '{view} {delete}'],
        ],
    ]); ?>
</div>
</body>
</div>