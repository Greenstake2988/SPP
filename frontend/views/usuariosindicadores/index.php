<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Usuariosindicadores;
/* @var $this yii\web\View */
/* @var $searchModel app\models\UsuariosindicadoresSearch */
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
<div class="usuariosindicadores-index">
<img src="https://www.itsva.edu.mx/archivos/imagenes/cabecera2019-veda.png"alt="W3Schools.com" style="width:40%;height:60px;float:right;"></div>
<br>
<br>
<h1 style="font-family:Impact; text-align:center">Usuarios Indicadores</h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Usuarios Indicadores', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //'idusuarioindicador',
            'idindicadores',
            [
                'attribute' => 'idindicadores',
                'value' => function($searchModel) {
                if (!$searchModel->idindicadores) {
                $id = 0;
                } else {
                $id = $searchModel->idindicadores;
                }
                return Usuariosindicadores::getUserNameIn($id);
                }
               ],
            [
                'attribute' => 'idusuario',
                'value' => function($searchModel) {
                if (!$searchModel->idusuario) {
                $id = 0;
                } else {
                $id = $searchModel->idusuario;
                }
                return Usuariosindicadores::getUserName($id);
                }
               ],
               [
                'attribute' => 'idroles',
                'value' => function($searchModel) {
                if (!$searchModel->idroles) {
                $id = 0;
                } else {
                $id = $searchModel->idroles;
                }
                return Usuariosindicadores::getUserNameRole($id);
                }
               ],
            
            //'idusuario',
            //'idroles',
           

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>
</body>
