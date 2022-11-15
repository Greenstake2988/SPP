<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Programas */
/* @var $form yii\widgets\ActiveForm #c2c2c2#dcdcdc*/
?>

<div class="programas-form">
<?php $form = ActiveForm::begin(); ?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td{
  border: 2px solid #D6EAF8 ;
  text-align: left;
  padding: 8px;
  background-color: #96D4D4;
}
th{
    border: 2px solid #D6EAF8 ;
    background-color: #1F618D;
    text-align: center;
    color: white;
    padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<p style="text-align:center ;">"Activar o Desactivar Indicadores"</p>
<table>
  <tr>
    <th><strong>Todos los Indicadores</strong></th>
    <th><strong>Lenguas Extrangeras</strong></th>
    <th><strong>Coodinación de Incubadora</strong></th>
    <th><strong>Servicios Escolares</strong></th>
    <th><strong>Carreras Profecionales</strong></th>
    <th><strong>Jefe de División</strong></th>
  </tr>
  <tr>
    <td><strong><input type="radio" name="activar" value="1"> Activar</td></strong>
    <td><strong><input type="radio" name="len" value="1">Activar</strong></td>
    <td><strong><input type="radio" name="cub" value="1">Activar</strong></td>
    <td><strong><input type="radio" name="ser" value="1">Activar</strong></td>
    <td><strong><input type="radio" name="pro" value="1">Activar</strong></td>
    <td><strong><input type="radio" name="div" value="1">Activar</strong></td>
  </tr>
  <tr>
    <td><strong><input type="radio" name="activar" value="2"> Desactivar</strong></td>
    <td><strong><input type="radio" name="len" value="2">Desactivar</strong></td>
    <td><strong><input type="radio" name="cub" value="2">Desactivar</strong></td>
    <td><strong><input type="radio" name="ser" value="2">Desactivar</strong></td>
    <td><strong><input type="radio" name="pro" value="2">Desactivar</strong></td>
    <td><strong><input type="radio" name="div" value="2">Desactivar</strong></td>
  </tr>
  <tr>
    <td><strong><input type="submit" name="enviar" value="Aceptar"/></strong></td>
    <td><strong><input type="submit" name="envio" value="Aceptar"/></strong></td>
    <td><strong><input type="submit" name="encubadora" value="Aceptar"/></strong></td>
    <td><strong><input type="submit" name="servicios" value="Aceptar"/></strong></td>
    <td><strong><input type="submit" name="profesionales" value="Aceptar"/></strong></td>
    <td><strong><input type="submit" name="division" value="Aceptar"/></strong></td>
  </tr>
  <tr>
    <th>Desarrollo Académico</th>
    <th>Difusión y Comunicación</th>
    <th>Posgrado e Investigación</th>
    <th>Recursos Humanos</th>
    <th>Responsabilidad Social</th>
    <th>Innovación y Sistemas de Gestión</th>
  </tr>
  <tr>
    <td><strong><input type="radio" name="des" value="1"> Activar</strong></td>
    <td><strong><input type="radio" name="com" value="1">Activar</strong></td>
    <td><strong><input type="radio" name="inv" value="1">Activar</strong></td>
    <td><strong><input type="radio" name="hu" value="1">Activar</strong></td>
    <td><strong><input type="radio" name="so" value="1">Activar</strong></td>
    <td><strong><input type="radio" name="ges" value="1">Activar</strong></td>
  </tr>
  <tr>
    <td><strong><input type="radio" name="des" value="2"> Desactivar</strong></td>
    <td><strong><input type="radio" name="com" value="2">Desactivar</strong></td>
    <td><strong><input type="radio" name="inv" value="2">Desactivar</strong></td>
    <td><strong><input type="radio" name="hu" value="2">Desactivar</strong></td>
    <td><strong><input type="radio" name="so" value="2">Desactivar</strong></td>
    <td><strong><input type="radio" name="ges" value="2">Desactivar</strong></td>
  </tr>
  <tr>
    <td><strong><input type="submit" name="desarrollo" value="Aceptar"/></strong></td>
    <td><strong><input type="submit" name="comunicacion" value="Aceptar"/></strong></td>
    <td><strong><input type="submit" name="investigacion" value="Aceptar"/></strong></td>
    <td><strong><input type="submit" name="humanos" value="Aceptar"/></strong></td>
    <td><strong><input type="submit" name="social" value="Aceptar"/></strong></td>
    <td><strong><input type="submit" name="gestion" value="Aceptar"/></strong></td>
  </tr>
  <tr>
    <th>Vinculación y Extensión</th>
    <th>Informatica</th>
    <th>Finanzas</th>
    <th>Planeación</th>
  </tr>
  <tr>
    <td><strong><input type="radio" name="ex" value="1"> Activar</strong></td>
    <td><strong><input type="radio" name="inf" value="1">Activar</strong></td>
    <td><strong><input type="radio" name="fi" value="1">Activar</strong></td>
    <td><strong><input type="radio" name="pla" value="1">Activar</strong></td>
  </tr>
  <tr>
    <td><strong><input type="radio" name="ex" value="2"> Desactivar</strong></td>
    <td><strong><input type="radio" name="inf" value="2">Desactivar</strong></td>
    <td><strong><input type="radio" name="fi" value="2">Desactivar</strong></td>
    <td><strong><input type="radio" name="pla" value="2">Desactivar</strong></td>
  </tr>
  <tr>
    <td><strong><input type="submit" name="extension" value="Aceptar"/></strong></td>
    <td><strong><input type="submit" name="informatica" value="Aceptar"/></strong></td>
    <td><strong><input type="submit" name="finanzas" value="Aceptar"/></strong></td>
    <td><strong><input type="submit" name="planeacion" value="Aceptar"/></strong></td>
  </tr>

</table>
</html>
<?php ActiveForm::end(); ?>


    <div>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
    setTimeout(function() {
        $(".content").fadeOut(1500);
    },3000);
 
    setTimeout(function() {
        $(".content2").fadeOut(1500);
    },3000);
    });
    </script>
    </div>
</div>