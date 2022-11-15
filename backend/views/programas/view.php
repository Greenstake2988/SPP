<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Programas 
boton de ruta    
    <p>
        <?= Html::a('Cambiar Estatus', ['indicadores/index='], ['class' => 'btn btn-success']) ?>
    </p>
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
    <h1 style="font-family:Impact; text-align:center">Programa a Evaluar</h1>
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
    
    <table style="background-color:#F3F5F8; font-family:Arial; border:0px solid #d2cfc9; height:40%; width:100%; margin:2px izquierda;">
        <tr>
        <th style="border: 1px solid #d2cfc9; width: 215px; ">Descripción</th>
        <th style="border: 1px solid #d2cfc9; width: 1000px;">Este programa establece las estrategias necesarias para que 
        la labor del TecNM, Campus Valladolid, sea pertinente y permita contribuir 
        a la solución de los problemas locales, regionales y nacionales, así como 
        de carácter científico, tecnológico y de innovación; fortalecer la 
        infraestructura física educativa y el equipamiento académico y 
        científico; la modernización de nuestro equipamiento, así como contar con 
        una administración eficiente, eficaz y transparente.</th>
        </tr>
    </table>
      <p>
        <p>
        <a class="btn btn-success" href="/cursoyii2/backend/web/index.php?r=indicadores%2Findex&idprogramas=<?php echo $model->idprogramas?>">Indicadores</a> </p>
    </p>
    <div style= text-align:center><img src="https://www.elpuntosobrelai.com/wp-content/uploads/2020/09/118712829_1326500534222759_752711848830107400_o.jpg"  style="width:25%;height:40%; float: center;"></div>
</div>
</body>
</div>






