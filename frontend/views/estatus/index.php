
<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\IndicadoresSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title ='Departamentos';

?>
    <?php 
    $botones =['class' => 'yii\grid\ActionColumn',
    'contentOptions' => ['style' => 'width: 8.7%'],
    'visible'=> Yii::$app->user->isGuest ? false : true,
    'buttons'=>[
        'view'=>function ($url, $model) {
            $t = 'index.php?r=site/view'.$model->id;
           // return Html::button('<span class="glyphicon glyphicon-eye-open"></span>', ['value'=>'indicadores/view'::to($t), 'class' => 'btn btn-default btn-xs custom_button']);
        },
        'update'=>function ($url, $model) {
            $t = 'index.php?r=site/update'.$model->id;
            //return Html::button('<span class="glyphicon glyphicon-pencil"></span>', ['value'=>'indicadores/view'::to($t), 'class' => 'btn btn-default btn-xs custom_button']);
        },
    ],
];
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
<div class="indicadores-view">
<img src="https://www.itsva.edu.mx/archivos/imagenes/cabecera2019-veda.png"alt="W3Schools.com" style="width:40%;height:60px;float:right;">
<br>
<br>
    <h1 style="font-family:Impact; text-align:center">Departamentos</h1>

      <p>
        <?= Html::a('Cambiar Estatus', ['status/create'], ['class' => 'btn btn-success']) ?>
    </p>


    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
 
  <html>




<h1></h1>


               <div class="btn-group"  >
  <button type="button" class="btn btn-danger"style="background-color:#F4F9F9;color:black;width:330px ;border-color:blue;"><strong> DEP. DE LENGUAS EXTRANJERAS</strong></button>

  <button type="button"  class="btn btn-danger dropdown-toggle"
          data-toggle="dropdown" style="background-color:#05d8df;border-color:blue;">
          <img src="https://cdn-icons-png.flaticon.com/128/709/709722.png"Style="width:20px">
  
    <span class="sr-only" >Desplegar menú</span>
  </button>

  <ul class="dropdown-menu" role="menu" >
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=3"title="View" aria-label="View" data-pjax="0">Actividad 1.4.3</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=4" title="View" aria-label="View" data-pjax="0">Actividad 1.4.5</a></li>
  </ul>
</div>


<div class="btn-group">
  <button type="button" class="btn btn-danger" style="background-color:#F4F9F9;color:black;width:330px;border-color:blue;"><strong>COORDINACIÓN DE INCUBADORA</strong></button>

  <button type="button" class="btn btn-danger dropdown-toggle"
          data-toggle="dropdown" style="background-color:#05d8df;border-color:blue;">
          <img src="https://cdn-icons-png.flaticon.com/128/709/709722.png"Style="width:20px">
  
    <span class="sr-only">Desplegar menú</span>
  </button>  

  <ul class="dropdown-menu" role="menu">
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=5" title="View" aria-label="View" data-pjax="0">Actividad 5.3.1</a></li>
  </ul>
</div>


<div class="btn-group">
  <button type="button" class="btn btn-danger"style="background-color:#F4F9F9;color:black;width:330px;border-color:blue;"><strong> SERVICIOS ESCOLARES</strong></button>

  <button type="button" class="btn btn-danger dropdown-toggle"
          data-toggle="dropdown" style="background-color:#05d8df;border-color:blue;">
          <img src="https://cdn-icons-png.flaticon.com/128/709/709722.png"Style="width:20px">
    <span class="sr-only">Desplegar menú</span>
  </button>

  <ul class="dropdown-menu" role="menu">
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=6" title="View" aria-label="View" data-pjax="0">Actividad 2.2.1</a></li>
  </ul>
</div>


<div class="btn-group">
  <button type="button" class="btn btn-danger"style="background-color:#F4F9F9;color:black;width:330px;border-color:blue;"><strong> DEP. DECARRERAS PROFESIONALES</strong></button>

  <button type="button" class="btn btn-danger dropdown-toggle"
          data-toggle="dropdown" style="background-color:#05d8df;border-color:blue;">
    <span class="sr-only">Desplegar menú</span>
    <img src="https://cdn-icons-png.flaticon.com/128/709/709722.png"Style="width:20px">
  
  </button>

  <ul class="dropdown-menu" role="menu">
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=7" title="View" aria-label="View" data-pjax="0">Actividad 1.3.3</a></li>
  </ul>
</div>


<div class="btn-group" style="margin:40px auto;">
  <button type="button" class="btn btn-danger"style="background-color:#F4F9F9;color:black;width:330px;border-color:blue;"><strong>ESTUDIOS PROFESIONALES</strong></button>

  <button type="button" class="btn btn-danger dropdown-toggle"
          data-toggle="dropdown" style="background-color:#05d8df;border-color:blue;">
          <img src="https://cdn-icons-png.flaticon.com/128/709/709722.png"Style="width:20px">
  
    <span class="sr-only">Desplegar menú</span>
  </button>

  <ul class="dropdown-menu" role="menu">
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=8" title="View" aria-label="View" data-pjax="0">Actividad 1.1.3</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=10" title="View" aria-label="View" data-pjax="0">Actividad 1.4.2</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=11" title="View" aria-label="View" data-pjax="0">Actividad 1.4.4</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=12" title="View" aria-label="View" data-pjax="0">Actividad 2.2.2</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=13" title="View" aria-label="View" data-pjax="0">Actividad 2.2.6</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=14" title="View" aria-label="View" data-pjax="0">Actividad 3.1.1</a></li>
</ul>
</div>



<div class="btn-group" >
  <button type="button" class="btn btn-danger"style="background-color:#F4F9F9;color:black ;width:330px;border-color:blue;"><strong>DESARROLLO ACADÉMICO</strong></button>

  <button type="button" class="btn btn-danger dropdown-toggle"
          data-toggle="dropdown" style="background-color:#05d8df;border-color:blue;">
          <img src="https://cdn-icons-png.flaticon.com/128/709/709722.png"Style="width:20px">
  
    <span class="sr-only">Desplegar menú</span>
  </button>

  <ul class="dropdown-menu" role="menu">
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=15" title="View" aria-label="View" data-pjax="0">Actividad 3.1.2</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=17" title="View" aria-label="View" data-pjax="0">Actividad 3.2.1</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=20" title="View" aria-label="View" data-pjax="0">Actividad 3.2.2</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=21" title="View" aria-label="View" data-pjax="0">Actividad 3.2.3</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=22" title="View" aria-label="View" data-pjax="0">Actividad 1.2.2</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=23" title="View" aria-label="View" data-pjax="0">Actividad 1.2.3</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=24" title="View" aria-label="View" data-pjax="0">Actividad 1.2.5</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=25" title="View" aria-label="View" data-pjax="0">Actividad 1.3.1</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=26" title="View" aria-label="View" data-pjax="0">Actividad 1.2.1</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=27" title="View" aria-label="View" data-pjax="0">Actividad 1.2</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=28" title="View" aria-label="View" data-pjax="0">Actividad 2.2.5</a></li>
</ul>
</div>



<div class="btn-group">
  <button type="button" class="btn btn-danger"style="background-color:#F4F9F9;color:black;width:330px;border-color:blue;"><strong> DEP.DE DIFUSIÓN Y COMUNICACIÓN</strong></button>

  <button type="button" class="btn btn-danger dropdown-toggle"
          data-toggle="dropdown" style="background-color:#05d8df;border-color:blue;">
          <img src="https://cdn-icons-png.flaticon.com/128/709/709722.png"Style="width:20px">
  
    <span class="sr-only">Desplegar menú</span>
  </button>

  <ul class="dropdown-menu" role="menu">
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=29" title="View" aria-label="View" data-pjax="0">Actividad 3.2.4</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=30" title="View" aria-label="View" data-pjax="0">Actividad 6.2.2</a></li>

</ul>
</div>

 
<div class="btn-group"Style="margin:20" >
  <button type="button" class="btn btn-danger"style="background-color:#F4F9F9;color:black;width:330px;border-color:blue;"><strong>DEP. DE POSGRADO E INVESTIGACIÓN</strong></button>

  <button type="button" class="btn btn-danger dropdown-toggle"
          data-toggle="dropdown" style="background-color:#05d8df;border-color:blue;">
          <img src="https://cdn-icons-png.flaticon.com/128/709/709722.png"Style="width:20px">
  
    <span class="sr-only">Desplegar menú</span>
  </button>

  <ul class="dropdown-menu" role="menu">
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=31" title="View" aria-label="View" data-pjax="0">Actividad 1.1.3</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=32" title="View" aria-label="View" data-pjax="0">Actividad 1.1.4</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=33" title="View" aria-label="View" data-pjax="0">Actividad 1.1.5</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=35" title="View" aria-label="View" data-pjax="0">Actividad 1.1.6</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=36" title="View" aria-label="View" data-pjax="0">Actividad 1.2.4</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=37" title="View" aria-label="View" data-pjax="0">Actividad 2.2.3</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=38" title="View" aria-label="View" data-pjax="0">Actividad 4.1</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=39" title="View" aria-label="View" data-pjax="0">Actividad 4.1.4</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=40" title="View" aria-label="View" data-pjax="0">Actividad 4.2.1</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=41" title="View" aria-label="View" data-pjax="0">Actividad 4.1.1</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=43" title="View" aria-label="View" data-pjax="0">Actividad 4.1.2</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=44" title="View" aria-label="View" data-pjax="0">Actividad 4.2.3</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=45" title="View" aria-label="View" data-pjax="0">Actividad 4.2.4</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=46" title="View" aria-label="View" data-pjax="0">Actividad 6.3.2</a></li>
    
</ul>
</div>


<div class="btn-group" >
  <button type="button" class="btn btn-danger"style="background-color:#F4F9F9;color:black;width:330px;border-color:blue;"><strong>DEP.DE INNOVACIÓN Y SIS.DE GESTIÓN</strong></button>

  <button type="button" class="btn btn-danger dropdown-toggle"
          data-toggle="dropdown" style="background-color:#05d8df;border-color:blue;">
          <img src="https://cdn-icons-png.flaticon.com/128/709/709722.png"Style="width:20px">
    <span class="sr-only">Desplegar menú</span>
  </button>

  <ul class="dropdown-menu" role="menu">
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=53" title="View" aria-label="View" data-pjax="0">Actividad 2.1</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=54" title="View" aria-label="View" data-pjax="0">Actividad 3.2</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=55" title="View" aria-label="View" data-pjax="0">Actividad 3.3.1</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=56" title="View" aria-label="View" data-pjax="0">Actividad 4.2</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=57" title="View" aria-label="View" data-pjax="0">Actividad 6.2</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=58" title="View" aria-label="View" data-pjax="0">Actividad 6.2.3</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=59" title="View" aria-label="View" data-pjax="0">Actividad 6.2.3</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=60" title="View" aria-label="View" data-pjax="0">Actividad 6.2.3</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=61" title="View" aria-label="View" data-pjax="0">Actividad 6.2.3</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=62" title="View" aria-label="View" data-pjax="0">Actividad 6.2.3</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=63" title="View" aria-label="View" data-pjax="0">Actividad 6.2.3</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=64" title="View" aria-label="View" data-pjax="0">Actividad 6.2.3</a></li>
   
</ul>
</div>


<div class="btn-group" >
  <button type="button" class="btn btn-danger"style="background-color:#F4F9F9;color:black;width:330px;border-color:blue;"><strong>DEP.VINCULACIÓN Y EXTENSIÓN</strong></button>

  <button type="button" class="btn btn-danger dropdown-toggle"
          data-toggle="dropdown" style="background-color:#05d8df;border-color:blue;">
          <img src="https://cdn-icons-png.flaticon.com/128/709/709722.png"Style="width:20px">
    <span class="sr-only">Desplegar menú</span>
  </button>

  <ul class="dropdown-menu" role="menu">
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=65" title="View" aria-label="View" data-pjax="0">Actividad 4.1.3</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=66" title="View" aria-label="View" data-pjax="0">Actividad 4.2.2</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=67" title="View" aria-label="View" data-pjax="0">Actividad 4.3.1</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=68" title="View" aria-label="View" data-pjax="0">Actividad 5.1</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=69" title="View" aria-label="View" data-pjax="0">Actividad 5.1.1</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=70" title="View" aria-label="View" data-pjax="0">Actividad 5.1.3</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=71" title="View" aria-label="View" data-pjax="0">Actividad 5.1.4</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=72" title="View" aria-label="View" data-pjax="0">Actividad 5.1.5</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=73" title="View" aria-label="View" data-pjax="0">Actividad 5.1.6</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=74" title="View" aria-label="View" data-pjax="0">Actividad 5.2.1</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=75" title="View" aria-label="View" data-pjax="0">Actividad 5.3.2</a></li>
   
</ul>
</div>


<div class="btn-group" >
  <button type="button" class="btn btn-danger"style="background-color:#F4F9F9;color:black;width:330px;border-color:blue;"><strong>DEP.RECURSOS HUMANOS</strong></button>

  <button type="button" class="btn btn-danger dropdown-toggle"
          data-toggle="dropdown" style="background-color:#05d8df;border-color:blue;">
    <span class="sr-only">Desplegar menú</span>
    <img src="https://cdn-icons-png.flaticon.com/128/709/709722.png"Style="width:20px">
  </button>

  <ul class="dropdown-menu" role="menu">
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=47" title="View" aria-label="View" data-pjax="0">Actividad 1.3.2</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=48" title="View" aria-label="View" data-pjax="0">Actividad 6.1.2</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=49" title="View" aria-label="View" data-pjax="0">Actividad 6.1.3</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=50" title="View" aria-label="View" data-pjax="0">Actividad 6.1.4</a></li>
    
</ul>
</div>


<div class="btn-group" style="margin:40px auto;">
  <button type="button" class="btn btn-danger"style="background-color:#F4F9F9;color:black;width:330px;border-color:blue;"><strong>DEP.RESPONSABILIDAD SOCIAL</strong></button>

  <button type="button" class="btn btn-danger dropdown-toggle"
          data-toggle="dropdown" style="background-color:#05d8df;border-color:blue;">
    <span class="sr-only">Desplegar menú</span>
    <img src="https://cdn-icons-png.flaticon.com/128/709/709722.png"Style="width:20px">
  </button>

  <ul class="dropdown-menu" role="menu">
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=52" title="View" aria-label="View" data-pjax="0">Actividad 6.1</a></li>
</ul>
</div>


<div class="btn-group">
  <button type="button" class="btn btn-danger"style="background-color:#F4F9F9;color:black;width:475px;border-color:blue;"><strong>DIV.DE CONTROL INTERNO,PRESUPUESTO Y DES.INSTITUCIONAL</strong></button>

  <button type="button" class="btn btn-danger dropdown-toggle"
          data-toggle="dropdown" style="background-color:#05d8df;border-color:blue;">
    <span class="sr-only">Desplegar menú</span>
    <img src="https://cdn-icons-png.flaticon.com/128/709/709722.png"Style="width:20px">
  </button>

  <ul class="dropdown-menu" role="menu">
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=78" title="View" aria-label="View" data-pjax="0">Actividad 2.1.1</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=79" title="View" aria-label="View" data-pjax="0">Actividad 2.3.2</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=80" title="View" aria-label="View" data-pjax="0">Actividad 2.4.2</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=81" title="View" aria-label="View" data-pjax="0">Actividad 2.4.3</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=82" title="View" aria-label="View" data-pjax="0">Actividad 6.2.1</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=83" title="View" aria-label="View" data-pjax="0">Actividad 6.4.2</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=84" title="View" aria-label="View" data-pjax="0">Actividad 6.4.3</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=85" title="View" aria-label="View" data-pjax="0">Actividad 6.4.3</a></li>
    
</ul>
</div>


<div class="btn-group" >
  <button type="button" class="btn btn-danger"style="background-color:#F4F9F9;color:black;width:250px;border-color:blue;"><strong>DEPARTAMENTO DE FINANZAS</strong></button>

  <button type="button" class="btn btn-danger dropdown-toggle"
          data-toggle="dropdown" style="background-color:#05d8df;border-color:blue;">
    <span class="sr-only">Desplegar menú</span>
    <img src="https://cdn-icons-png.flaticon.com/128/709/709722.png"Style="width:20px">
  </button>

  <ul class="dropdown-menu" role="menu">
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=77" title="View" aria-label="View" data-pjax="0">Actividad 2.1</a></li>
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=86" title="View" aria-label="View" data-pjax="0">Actividad 6.3.1</a></li>
    
</ul>
</div>


<div class="btn-group" >
  <button type="button" class="btn btn-danger"style="background-color:#F4F9F9;color:black;width:260px;border-color:blue;"><strong>DEPARTAMENTO DE INFORMATICA</strong></button>

  <button type="button" class="btn btn-danger dropdown-toggle"
          data-toggle="dropdown" style="background-color:#05d8df;border-color:blue;">
    <span class="sr-only ">Desplegar menú</span>
    <img src="https://cdn-icons-png.flaticon.com/128/709/709722.png"Style="width:20px">
  </button>

  <ul class="dropdown-menu" role="menu">
    <li><a href="/cursoyii2/frontend/web/index.php?r=estatus%2Fview&amp;id=76" title="View" aria-label="View" data-pjax="0">Actividad 6.2.4</a></li>
    
</ul>
</div>

<div id="reloj" style="font-size:20px;color:black;text-align:right;margin:20px;" ></div> 
<script language="Javascript">
function startTime(){
today=new Date();
h=today.getHours();
m=today.getMinutes();
s=today.getSeconds();
m=checkTime(m);
s=checkTime(s);
document.getElementById('reloj').innerHTML=h+":"+m+":"+s;
t=setTimeout('startTime()',500);}
function checkTime(i)
{if (i<10) {i="0" + i;}return i;}
window.onload=function(){startTime();}   
   </script>

</div>
</div>
</body>
</div>





