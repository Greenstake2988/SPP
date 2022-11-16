<?php

use yii\db\mssql\QueryBuilder;
use yii\db\Query;
use yii\helpers\Html;
use yii\widgets\DetailView;



/* @var $this yii\web\View */
/* @var $model app\models\Periodicidad 

*/


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
    .btn-success {
    color: #fff;
    background-color: #044887;
    border-color: #044887;
    }
    </style>
    <style>
    .wrap > .container {
     padding: 0px 0px 0px; 
    }
    </style>
    <style>
    .caja{
    border-radius: 5px;
    }
    </style>
    <div class="caja" style="background-color:#FFFFFF; color: write; height:200%; padding:1% 2%; width:100%; width:100%; margin:0% 0% 2%">
    <body style="background-color:#727A72 ; margin:0px;">
    <tr>
    <img src="https://www.itsva.edu.mx/archivos/imagenes/cabecera2019-veda.png"alt="W3Schools.com" style="width:40%;height:60px;float:right;">
    <br>
    <br>
    <h1 style="font-family:Impact; text-align:center">Programa</h1>
    </tr>
    <br>
    <div class="programas-view">
     <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'idprogramas',
            'nombre',
        ],
    ]) ?>
    </div>
    </body>
    </div>
    
