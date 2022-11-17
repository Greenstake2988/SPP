<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PeriodicidadSearch */
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
.btn-success {
    color: #fff;
    background-color: #044887;
    border-color: #044887;
    }
</style>
<style>
.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
    color: black;
    background-color: #e7e7e7;
}

</style>
<div class="caja" style="background-color:#FFFFFF; color: write; height:510px; padding:1% 2%; width:100%; margin:0% 0% 2%">
<body style="background-color:#727A72; margin:0px;">
<div class="programas-index">
<img src="https://www.itsva.edu.mx/archivos/imagenes/cabecera2019-veda.png"alt="W3Schools.com" style="width:40%;height:60px;float:right;">
<br>
<br>
    <h1 style="font-family:Impact; text-align:center">Programas</h1>
    <p>
        <?= Html::a('Crear nuevo Programa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php // echo $this->render('_search', ['model' => $searchModel])  ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'idprogramas',
            'nombre', 
            [
                'class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</body>
<br>
</div>
