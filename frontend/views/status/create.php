<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Programas */

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
<div class="programas-create">
<input type="button" value="Recargar página" onClick="location.reload();" style="width: 150px; height: 30px; background: #6699FF; color: #ffffff; cursor: pointer; border: 0px;"/>
<br>
<img src="https://www.itsva.edu.mx/archivos/imagenes/cabecera2019-veda.png"alt="W3Schools.com" style="width:40%;height:60px;text-align:center;float: right;">
<br>
<br>
<div><h1 style="font-family:Impact; text-align:center">Estatus</h1></div>

    <?= $this->render('_form', [
        'model' => $model,
        
    ]) ?>
      <?php
   if(isset($_POST['enviar']))
   {
        if (isset($_POST['activar'])&& $_POST['activar']=='1'){
            $query = Yii::$app->db;
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores > 1')->execute();
            echo'<br>';
            echo'<br>';
            echo'<script>alert("Se han activado los Indicadores")</script>';
        }else if(isset($_POST['activar'])&& $_POST['activar']=='2'){ 
            $query = Yii::$app->db;
            $query->createCommand('UPDATE indicadores SET estatus = 0 WHERE indicadores.idindicadores > 1')->execute();
            echo'<br>';
            echo'<br>';
            echo '<script>alert("Se han desactivado los Indicadores")</script>';
        }else{
            echo'<br>';
            echo'<br>';
            echo '<script>alert("No se ha seleccionado ninguna opción")</script>';
        }
    
   }
   ?>


    <?php
   if(isset($_POST['envio']))
   {
        if (isset($_POST['len'])&& $_POST['len']=='1'){
            $query = Yii::$app->db;
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 3')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 4')->execute();
            echo'<br>';
            echo'<br>';
            echo'<script>alert("Se han activado los Indicadores")</script>';
        }else if(isset($_POST['len'])&& $_POST['len']=='2'){ 
            $query = Yii::$app->db;
            $query->createCommand('UPDATE indicadores SET estatus = 0 WHERE indicadores.idindicadores = 3')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 0 WHERE indicadores.idindicadores = 4')->execute();
            echo'<br>';
            echo'<br>';
            echo'<script>alert("Se han desactivado los Indicadores")</script>';
        }else{
            echo'<br>';
            echo'<br>';
            echo'<script>alert("No se ha seleccionado ninguna opción")</script>';
        }
    
   }
   ?>



    <?php
   if(isset($_POST['encubadora']))
   {
        if (isset($_POST['cub'])&& $_POST['cub']=='1'){
            $query = Yii::$app->db;
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 5')->execute();
            echo'<br>';
            echo'<br>';
            echo '<script>alert("Se han activado los Indicadores")</script>';
        }else if(isset($_POST['cub'])&& $_POST['cub']=='2'){ 
            $query = Yii::$app->db;
            $query->createCommand('UPDATE indicadores SET estatus = 0 WHERE indicadores.idindicadores = 5')->execute();
            echo'<br>';
            echo'<br>';
            echo'<script>alert("Se han desactivado los Indicadores")</script>';
        }else{
            echo'<br>';
            echo'<br>';
            echo'<script>alert("No se ha seleccionado ninguna opción")</script>';
        }
    
   }
   ?>


    <?php
   if(isset($_POST['servicios']))
   {
        if (isset($_POST['ser'])&& $_POST['ser']=='1'){
            $query = Yii::$app->db;
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 6')->execute();
            echo'<br>';
            echo'<br>';
            echo'<script>alert("Se han activado los Indicadores")</script>';
        }else if(isset($_POST['ser'])&& $_POST['ser']=='2'){ 
            $query = Yii::$app->db;
            $query->createCommand('UPDATE indicadores SET estatus = 0 WHERE indicadores.idindicadores = 6')->execute();
            echo'<br>';
            echo'<br>';
            echo'<script>alert("Se han desactivado los Indicadores")</script>';
        }else{
            echo'<br>';
            echo'<br>';
            echo'<script>alert("No se ha seleccionado ninguna opción")</script>';
        }
    
   }
   ?>



    <?php
   if(isset($_POST['profesionales']))
   {
        if (isset($_POST['pro'])&& $_POST['pro']=='1'){
            $query = Yii::$app->db;
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 7')->execute();
            echo'<br>';
            echo'<br>';
            echo'<script>alert("Se han activado los Indicadores")</script>';
        }else if(isset($_POST['pro'])&& $_POST['pro']=='2'){ 
            $query = Yii::$app->db;
            $query->createCommand('UPDATE indicadores SET estatus = 0 WHERE indicadores.idindicadores = 7')->execute();
            echo'<br>';
            echo'<br>';
            echo'<script>alert("Se han desactivado los Indicadores")</script>';
        }else{
            echo'<br>';
            echo'<br>';
            echo'<script>alert("No se ha seleccionado ninguna opción")</script>';
        }
   }
   ?>



    <?php
   if(isset($_POST['division']))
   {
        if (isset($_POST['div'])&& $_POST['div']=='1'){
            $query = Yii::$app->db;
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 8')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 10')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 11')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 12')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 13')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 14')->execute();
            echo'<br>';
            echo'<br>';
            echo'<script>alert("Se han activado los Indicadores")</script>';
        }else if(isset($_POST['div'])&& $_POST['div']=='2'){ 
            $query = Yii::$app->db;
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 8')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 10')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 11')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 12')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 13')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 14')->execute();
            echo'<br>';
            echo'<br>';
            echo'<script>alert("Se han desactivado los Indicadores")</script>';
        }else{
            echo'<br>';
            echo'<br>';
            echo'<script>alert("No se ha seleccionado ninguna opción")</script>';
        }
   }
   ?>


<?php
   if(isset($_POST['desarollo']))
   {
        if (isset($_POST['des'])&& $_POST['des']=='1'){
            $query = Yii::$app->db;
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 15')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 17')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 20')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 21')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 22')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 23')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 24')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 25')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 26')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 27')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 28')->execute();
            echo'<br>';
            echo'<br>';
            echo'<script>alert("Se han activado los Indicadores")</script>';
        }else if(isset($_POST['des'])&& $_POST['des']=='2'){ 
            $query = Yii::$app->db;
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 15')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 17')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 20')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 21')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 22')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 23')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 24')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 25')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 26')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 27')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 28')->execute();
            echo'<br>';
            echo'<br>';
            echo'<script>alert("Se han desactivado los Indicadores")</script>';
        }else{
            echo'<br>';
            echo'<br>';
            echo'<script>alert("No se ha seleccionado ninguna opción")</script>';
        }
    
   }
   ?>


    <?php
   if(isset($_POST['comunicacion']))
   {
        if (isset($_POST['com'])&& $_POST['com']=='1'){
            $query = Yii::$app->db;
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 29')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 30')->execute();
            echo'<br>';
            echo'<br>';
            echo'<script>alert("Se han activado los Indicadores")</script>';
        }else if(isset($_POST['com'])&& $_POST['com']=='2'){ 
            $query = Yii::$app->db;
            $query->createCommand('UPDATE indicadores SET estatus = 0 WHERE indicadores.idindicadores = 29')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 0 WHERE indicadores.idindicadores = 30')->execute();
            echo'<br>';
            echo'<br>';
            echo'<script>alert("Se han desactivado los Indicadores")</script>';
        }else{
            echo'<br>';
            echo'<br>';
            echo'<script>alert("No se ha seleccionado ninguna opción")</script>';
        }
    
   }
   ?>


    <?php
   if(isset($_POST['investigacion']))
   {
        if (isset($_POST['inv'])&& $_POST['inv']=='1'){
            $query = Yii::$app->db;
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 31')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 32')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 33')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 35')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 36')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 37')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 38')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 39')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 40')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 41')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 43')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 44')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 45')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 46')->execute();
            echo'<br>';
            echo'<br>';
            echo'<script>alert("Se han activado los Indicadores")</script>';
        }else if(isset($_POST['inv'])&& $_POST['inv']=='2'){ 
            $query = Yii::$app->db;
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 31')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 32')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 33')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 35')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 36')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 37')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 38')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 39')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 40')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 41')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 43')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 44')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 45')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 46')->execute();
            echo'<br>';
            echo'<br>';
            echo'<script>alert("Se han desactivado los Indicadores")</script>';
        }else{
            echo'<br>';
            echo'<br>';
            echo'<script>alert("No se ha seleccionado ninguna opción")</script>';
        }
    
   }
   ?>



<?php
   if(isset($_POST['humanos']))
   {
        if (isset($_POST['hu'])&& $_POST['hu']=='1'){
            $query = Yii::$app->db;
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 47')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 48')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 49')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 50')->execute();
            echo'<br>';
            echo'<br>';
            echo'<script>alert("Se han activado los Indicadores")</script>';
        }else if(isset($_POST['hu'])&& $_POST['hu']=='2'){ 
            $query = Yii::$app->db;
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 47')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 48')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 49')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 50')->execute();
            echo'<br>';
            echo'<br>';
            echo'<script>alert("Se han desactivado los Indicadores")</script>';
        }else{
            echo'<br>';
            echo'<br>';
            echo'<script>alert("No se ha seleccionado ninguna opción")</script>';
        }
   }
   ?>



    <?php
   if(isset($_POST['social']))
   {
        if (isset($_POST['so'])&& $_POST['so']=='1'){
            $query = Yii::$app->db;
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 52')->execute();
            echo'<br>';
            echo'<br>';
            echo'<script>alert("Se han activado los Indicadores")</script>';
        }else if(isset($_POST['so'])&& $_POST['so']=='2'){ 
            $query = Yii::$app->db;
            $query->createCommand('UPDATE indicadores SET estatus = 0 WHERE indicadores.idindicadores = 52')->execute();
            echo'<br>';
            echo'<br>';
            echo'<script>alert("Se han desactivado los Indicadores")</script>';
        }else{
            echo'<br>';
            echo'<br>';
            echo'<script>alert("No se ha seleccionado ninguna opción")</script>';
        }
   }
   ?>

    <?php
   if(isset($_POST['gestion']))
   {
        if (isset($_POST['ges'])&& $_POST['ges']=='1'){
            $query = Yii::$app->db;
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 53')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 54')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 55')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 56')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 57')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 58')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 59')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 60')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 61')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 62')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 63')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 64')->execute();
            echo'<br>';
            echo'<br>';
            echo'<script>alert("Se han activado los Indicadores")</script>';
        }else if(isset($_POST['ges'])&& $_POST['ges']=='2'){ 
            $query = Yii::$app->db;
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 53')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 54')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 55')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 56')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 57')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 58')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 59')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 60')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 61')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 62')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 63')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 64')->execute();
            echo'<br>';
            echo'<br>';
            echo'<script>alert("Se han desactivado los Indicadores")</script>';
        }else{
            echo'<br>';
            echo'<br>';
            echo'<script>alert("No se ha seleccionado ninguna opción")</script>';
        }
    
   }
   ?>


<?php
   if(isset($_POST['extension']))
   {
        if (isset($_POST['ex'])&& $_POST['ex']=='1'){
            $query = Yii::$app->db;
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 65')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 66')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 67')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 68')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 69')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 70')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 71')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 72')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 73')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 74')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 75')->execute();
            echo'<br>';
            echo'<br>';
            echo'<script>alert("Se han activado los Indicadores")</script>';
        }else if(isset($_POST['ex'])&& $_POST['ex']=='2'){ 
            $query = Yii::$app->db;
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 65')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 66')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 67')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 68')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 69')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 70')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 71')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 72')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 73')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 74')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 75')->execute();
            echo'<br>';
            echo'<br>';
            echo'<script>alert("Se han desactivado los Indicadores")</script>';
        }else{
            echo'<br>';
            echo'<br>';
            echo'<script>alert("No se ha seleccionado ninguna opción")</script>';
        }
    
   }
   ?>


    <?php
   if(isset($_POST['informatica']))
   {
        if (isset($_POST['inf'])&& $_POST['inf']=='1'){
            $query = Yii::$app->db;
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 76')->execute();
            echo'<br>';
            echo'<br>';
            echo'<script>alert("Se han activado los Indicadores")</script>';
        }else if(isset($_POST['inf'])&& $_POST['inf']=='2'){ 
            $query = Yii::$app->db;
            $query->createCommand('UPDATE indicadores SET estatus = 0 WHERE indicadores.idindicadores = 76')->execute();
            echo'<br>';
            echo'<br>';
            echo'<script>alert("Se han desactivado los Indicadores")</script>';
        }else{
            echo'<br>';
            echo'<br>';
            echo'<script>alert("No se ha seleccionado ninguna opción")</script>';
        }
    
   }
   ?>



    <?php
   if(isset($_POST['finanzas']))
   {
        if (isset($_POST['fi'])&& $_POST['fi']=='1'){
            $query = Yii::$app->db;
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 77')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 86')->execute();
            echo'<br>';
            echo'<br>';
            echo'<script>alert("Se han activado los Indicadores")</script>';
        }else if(isset($_POST['fi'])&& $_POST['fi']=='2'){ 
            $query = Yii::$app->db;
            $query->createCommand('UPDATE indicadores SET estatus = 0 WHERE indicadores.idindicadores = 76')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 86')->execute();
            echo'<br>';
            echo'<br>';
            echo'<script>alert("Se han desactivado los Indicadores")</script>';
        }else{
            echo'<br>';
            echo'<br>';
            echo'<script>alert("No se ha seleccionado ninguna opción")</script>';
        }
    
   }
   ?>


   
<?php
   if(isset($_POST['planeacion']))
   {
        if (isset($_POST['pla'])&& $_POST['pla']=='1'){
            $query = Yii::$app->db;
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 78')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 79')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 80')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 81')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 82')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 83')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 84')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 85')->execute();
            echo'<br>';
            echo'<br>';
            echo'<script>alert("Se han activado los Indicadores")</script>';
        }else if(isset($_POST['pla'])&& $_POST['pla']=='2'){ 
            $query = Yii::$app->db;
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 78')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 79')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 80')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 81')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 82')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 83')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 84')->execute();
            $query->createCommand('UPDATE indicadores SET estatus = 1 WHERE indicadores.idindicadores = 85')->execute();
            echo'<br>';
            echo'<br>';
            echo'<script>alert("Se han desactivado los Indicadores")</script>';
        }else{
            echo'<br>';
            echo'<br>';
            echo'<script>alert("No se ha seleccionado ninguna opción")</script>';
        }
    
   }
   ?>

</div>
</body>
</div>






