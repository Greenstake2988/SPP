<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProgramasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider 
Boton para crear programas:
    <p>
        <?= Html::a('Create Programas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

*/

$this->title = 'Programas';

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
</style>
<style>
.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
    color: black;
    background-color: #e7e7e7;
}

</style>
<div class="caja" style="background-color:#FFFFFF; color: write; height:100%; padding:1% 2%; width:100%; margin:0% 0% 2%">
<body style="background-color:#727A72; margin:0px;">
<div class="programas-index">
<img src="https://www.itsva.edu.mx/archivos/imagenes/cabecera2019-veda.png"alt="W3Schools.com" style="width:40%;height:60px;float:right;">
<br>
<br>
<h1 style="font-family:Impact; text-align:center">Ayuda</h1>


<h3 style="font-family:Cambria;"><strong>Tutorial</strong></h3>
<video width="320" height="240" controls >
  <source src="tutorial.mp4" type="video/mp4">
  <source src="tutorial.ogg" type="video/ogg">
  Your browser does not support the video tag.
</video>

<h3 style="font-family:Cambria;"><strong>Preguntas Frecuentes</strong></h3>
<p><strong>*¿Qué pasa si mi indicador no cuenta con unidad de medida para hombres y mujeres?</strong></p>
<p>Para aquellos indicadores que no pueden ser medidos por unidad de medida de hombres y mujeres
     y tampoco por carrera académica únicamente deberán ingresar el valor del indicador en el primer 
     cuadro de total del formato de llenado y a los demás campos deberán colocarle un 0. 
</p>
<p><strong>*¿Por qué no puedo visualizar los indicadores?</strong></p>
<p>Suelen ser por dos motivos: 
</p>
<p>1.Aún no se te han asignado los indicadores que te corresponden. 
    En este caso se deberá notificar al departamento de División de Control Interno, Presupuesto y Desarrollo Institucional . 
</p>
<p>
2. Se ha vencido el plazo para capturar datos, por lo que la plataforma se ha cerrado. En este caso 
deberá solicitar nuevamente que se le abra la plataforma o por el contrario si ya ha capturado los 
datos del trimestre concluido, deberá esperar el siguiente periodo de evaluación .
</p>
<p><strong>*¿Qué pasa si me asignan un indicador que no me corresponde?</strong></p>
<p>Puede ser por lo siguiente:</p>
<p>1.El indicador puede que no le corresponda directamente pero sí al departamento al que pertenece
    y al ser el responsable es por eso que se le solicita. En este caso deberá solicitar la información 
    del indicador a la persona que la maneja y capturar los datos.
</p>
<p>2.Hubo un error de asignación de indicador.En este caso se deberá nortificar al departamento
de División de Control Interno, Presupuesto y Desarrollo Institucional para corregir este error.
</p>
<p><strong>*¿Qué pasa si no subo mi medio de verificación?</strong></p>
<p>La información que constantemente es ingresada normalmente llevan un seguimiento y si al verificar 
    los datos capturados del indicador no cuentan con un archivo de respaldo que corrobore lo ingresado
    no se contará como válido o confiable la información proporcionada.
</p>
<p><strong>*¿Cuántos medios de verificación debo subir?</strong></p>
<p>Una por cada indicador.
</p>
</div>
</body>
<br>
</div>

