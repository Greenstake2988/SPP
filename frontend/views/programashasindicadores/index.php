<?php

use app\models\ProgramasHasIndicadores;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\grid\RecordHelpers;


/* @var $this yii\web\View */
/* @var $searchModel app\models\ProgramashasindicadoresSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
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
<div class="programashasindicadores-index">
<img src="https://www.itsva.edu.mx/archivos/imagenes/cabecera2019-veda.png"alt="W3Schools.com" style="width:40%;height:60px;float:right;"></div>
<br>
<br>
<h1 style="font-family:Impact; text-align:center">Asignación de Indicadores a Programas</h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <p>
        <?= Html::a('Crear un nuevo Programa', ['programas/create'], ['class' => 'btn btn-success']) ?>
    </p>
    <p>
        <?= Html::a('Asignar Programas a Indicadores', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'indicadores_idindicadores',
            [
                
                'attribute' => 'Nombre del Programa',
                'value' => function($searchModel) {
                if (!$searchModel->programas_idprogramas) {
                $id = 0;
                } else {
                $id = $searchModel->programas_idprogramas;
                }
                return ProgramasHasIndicadores ::getUserName($id);
                }
               ],

               [
                'label' => 'Nivel Objetivo',
                'value' => function($searchModel) {
                if (!$searchModel->indicadores_idindicadores) {
                $id = 0;
                } else {
                $id = $searchModel->indicadores_idindicadores;
                }
                return ProgramasHasIndicadores ::getUserNameIn($id);
                }
               ],
           // 'programas_idprogramas',
           

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>
</body>
