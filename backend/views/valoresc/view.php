<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Valoresc */

$this->title = $model->idvaloresc;
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
<div class="caja" style="background-color:#FFFFFF; color: write; height:170%; padding:1% 2%; width:100%; margin:0% 0% 2%">
<body style="background-color:#727A72; margin:0px;">
<div class="valoresc-view">
<div><img src="https://www.itsva.edu.mx/archivos/imagenes/cabecera2019-veda.png"alt="W3Schools.com" style="width:40%;height:60px;float:right;">
<br>
<br>
<div><h1 style="font-family:Impact; text-align:center">Valores</h1></div>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'idvaloresc',
             ['label'=>'Nombre del Indicador',
            'value'=>$model->getIndicadoresid($model->indicadores_idindicadores)],
            'Total',
            'hombres',
            'mujeres',
            'pertenecenEtnia',
            'HabitanEnElEstado',
            'ingenieria',
            'DiscapacidadMotriz',
            'DiscapacidadMental',
            'DiscapacidadSensorial',
            'DiscapacidadPsicosocial',
            'DiscapacidadComunicacion',
            //'creado',
            'guardado',
            //'indicadores_idindicadores',
        
        ],
    ]) ?>
    
</div>
</div>
</body>
</div>



