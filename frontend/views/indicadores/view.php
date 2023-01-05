<?php

use app\models\Indicadores;
use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use kartik\Mpdf\PDF;


/* @var $this yii\web\View */
/* @var $model app\models\Indicadores */

$this->title = $model->idindicadores;
$this->title = 'Resultados';

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
<div class="caja" style="background-color:#FFFFFF; color: write; height:100%; padding:1% 2%; width:100%; margin:0% 0% 2%">
<body style="background-color:#727A72; margin:0px;">
<div class="indicadores-view">
<img src="https://www.itsva.edu.mx/archivos/imagenes/cabecera2019-veda.png"alt="W3Schools.com" style="width:40%;height:60px;float:right;">
<br>
<br>
    <h1 style="font-family:Impact; text-align:center">Indicador</h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'idindicadores',
            'Programa',
            'PeriodoEvaluacion',
            'nombre',
            //'objetivo',
            //'nivelObjetivo',
            //'unidadMedida',
            //'meta',
            'variableB',
            //'medioVerificacionB',
            'variableC',
            //'medioVerificacionC',
            //'estatus',
            //'periodicidad_idperiodicidad',
        ],
    ]) ?>


<table style="background-color:#f8f8f8;color:black;border:1px solid #d2cfc9; height: 50px;width: 1140px;margin:5px auto">
  <tr>
    <th style=color:white;background-color:#808B96><strong>PRIMERA EVALUACIÓN</strong></th>
    <th style=color:white;background-color:#808B96><strong>SEGUNDA EVALUACIÓN</strong></th>
    <th style=color:white;background-color:#808B96><strong>TERCERA EVALUACIÓN</strong></th>
    <th style=color:white;background-color:#808B96><strong>CUARTA EVALUACIÓN</strong></th>
  </tr>
  <tr>
    <td><p><strong>Total B:</strong></p></td>
    <td><p><strong>Total B:</strong></p></td>
    <td><p><strong>Total B:</strong></p></td>
    <td><p><strong>Total B:</strong></p></td>
  </tr>
  <tr>
    <td><p><?php
     $query = (new \yii\db\Query())->from('valoresb');
     $query->where('creado>="2023-01-01" && creado<"2023-03-31" && indicadores_idindicadores=:id',[':id'=>$model->idindicadores]);
     $sum1 = $query->sum('Total');
     echo (int)($sum1);
    ?></strong>
   </td>
    <td><p><?php 
     $query = (new \yii\db\Query())->from('valoresb');
     $query->where('creado>="2023-04-01" && creado<"2023-06-30" && indicadores_idindicadores=:id',[':id'=>$model->idindicadores]);
     $sum3 = $query->sum('Total');
     echo (int)($sum3);
    ?></strong>
    </td>
    <td><p><?php 
     $query = (new \yii\db\Query())->from('valoresb');
     $query->where('creado>="2023-07-01" && creado<"2023-09-30" && indicadores_idindicadores=:id',[':id'=>$model->idindicadores]);
     $sum5 = $query->sum('Total');
     echo (int)($sum5);
    ?></strong>
    </td>
    <td><p><?php 
      $query = (new \yii\db\Query())->from('valoresb');
      $query->where('creado>="2023-10-01" && creado<"2023-12-31" && indicadores_idindicadores=:id',[':id'=>$model->idindicadores]);
      $sum7 = $query->sum('Total');
      echo (int)($sum7);
    ?></strong>
    </td>
  </tr>
  <tr>
    <td><p><strong>Total C:</strong></p></td>
    <td><p><strong>Total C:</strong></p></td>
    <td><p><strong>Total C:</strong></p></td>
    <td><p><strong>Total C:</strong></p></td>
  </tr>
  <td><p><?php 
      $query = (new \yii\db\Query())->from('valoresc');
      $query->where('creado>="2023-01-01" && creado<"2023-03-31" && indicadores_idindicadores=:id',[':id'=>$model->idindicadores]);
      $sum2 = $query->sum('Total');
      echo (int)($sum2);
    ?></strong>
    </td>
    <td><p><?php 
      $query = (new \yii\db\Query())->from('valoresc');
      $query->where('creado>="2023-04-01" && creado<"2023-06-30" && indicadores_idindicadores=:id',[':id'=>$model->idindicadores]);
      $sum4 = $query->sum('Total');
      echo (int)($sum4);
    ?></strong>
    </td>
    <td><p><?php 
       $query = (new \yii\db\Query())->from('valoresc');
       $query->where('creado>="2023-07-01" && creado<"2023-09-30" && indicadores_idindicadores=:id',[':id'=>$model->idindicadores]);
       $sum6 = $query->sum('Total');
       echo (int)($sum6);
    ?></strong>
    </td>
    <td><p><?php 
     $query = (new \yii\db\Query())->from('valoresc');
     $query->where('creado>="2023-10-01" && creado<"2023-12-31" && indicadores_idindicadores=:id',[':id'=>$model->idindicadores]);
     $sum8 = $query->sum('Total');
     echo (int)($sum8);
    ?></strong>
    </td>
    
    <tr>
    <td><p><strong>Promedio:</strong></p></td>
    <td><p><strong>Promedio:</strong></p></td>
    <td><p><strong>Promedio:</strong></p></td>
    <td><p><strong>Promedio:</strong></p></td>
  </tr>
  <td><p><?php 
    if($sum1 && $sum2 >1){
      $variabletotal1=($sum1/$sum2)*100;
      echo (double)($variabletotal1);
      echo "%";
  }else{
      echo (string)('El indicador no ha sido evaluado');
  }
    ?></strong>
    </td>
    <td><p><?php 
    if($sum3 && $sum4 >1){
      $variabletotal2=($sum3/$sum4)*100;
      echo (double)($variabletotal2);
      echo "%";
  }else{
      echo (string)('El indicador no ha sido evaluado');
  }
    ?></strong>
    </td>
    <td><p><?php 
    if($sum5 && $sum6 >1){
      $variabletotal3=($sum5/$sum6)*1<00;
      echo (double)($variabletotal3);
      echo "%";
  }else{
      echo (string)('El indicador no ha sido evaluado');
  }
    ?></strong>
    </td>
    <td><p><?php 
    if($sum7 && $sum8 >1){
      $variabletotal4=($sum7/$sum8)*100;
      echo (double)($variabletotal4);
      echo "%";
  }else{
      echo (string)('El indicador no ha sido evaluado');
  }
    ?></strong>
    </td>
</table>
<p style="text-align:end">
<a class="btn " href="javascript:window.print()"><img src="https://cdn.icon-icons.com/icons2/3525/PNG/96/page_folder_document_file_paper_printing_print_printer_icon_221261.png" style="background-color:white; height:70px;">IMPRIMIR</a></p>
</div>
</body>
</div>



  










    

    