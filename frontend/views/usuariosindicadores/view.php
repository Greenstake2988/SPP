<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Usuariosindicadores */
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
<div class="usuariosindicadores-view">
<img src="https://www.itsva.edu.mx/archivos/imagenes/cabecera2019-veda.png"alt="W3Schools.com" style="width:40%;height:60px;float:right;"></div>
<br>
<br>
<h1 style="font-family:Impact; text-align:center">Usuario Indicador</h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           //'idusuarioindicador',
            ['label'=>'Usuario',
            'value'=>$model->getUsuarioIndicador($model->idusuario)],
            ['label'=>'Departamento',
            'value'=>$model->getRoles($model->idroles)],
            ['label'=>'Indicador',
            'value'=>$model->getUsuarioIndicadores($model->idindicadores)],
        ],
    ]) ?>

</div>
</div>
</body>
