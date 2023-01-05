<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $model app\models\Indicadores 
 <p>
        <?= Html::a('Consultar Valores B', ['valoresb/index'], ['class' => 'btn btn-success']) ?>
    </p>   
    <p>
        <?= Html::a('Consultar Valores C', ['valoresc/index'], ['class' => 'btn btn-success']) ?>
    </p>


*/

$this->title = $model->idindicadores;
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
    float:left;
    margin: 2px; ;
    color: #fff;
    background-color: #044887;
    border-color: #044887;
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
<div class="indicadores-view">
<img src="https://www.itsva.edu.mx/archivos/imagenes/cabecera2019-veda.png"alt="W3Schools.com" style="width:40%;height:60px;float:right;">
<br>
<br>
<h1 style="font-family:Impact; text-align:center">Ficha Técnica</h1>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'idindicadores',
            'Programa',
            'PeriodoEvaluacion',
            'nombre',
            'objetivo',
            'nivelObjetivo',
            'unidadMedida',
            'meta',
            'variableB',
            'medioVerificacionB',
            'variableC',
            'medioVerificacionC',
            //'estatus',
            //'periodicidad_idperiodicidad',
        ],
    ]) ?>

    <p>
    <p>
        <a class="btn btn-success" href="http://sii.valladolid.tecnm.mx/index.php?r=valoresb%2Fcreate&indicadores_idindicadores=<?php echo $model->idindicadores?>">Comenzar Evaluación</a></p>
    </p>

    <br>
    <br>
</div>
</body>
</div>
