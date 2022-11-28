<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Valoresc */
/* @var $form yii\widgets\ActiveForm */
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
border-radius: 7px;
}
</style>
<style>
.wrap > .container {
     padding: 0px 0px 0px; 
}
</style>
<style>.titulo{
border-radius: 10px 10px 0px 0px;
}
</style>
<body style="background-color:#727A72; margin:0%">
<div class="caja" style="background-color:#FFFFFF; color: write; height:100%; padding:1% 2%; width:100%; margin:0% 0% 2%">
<div class="Valores B" style=" max-width:100%;text-align:center">
<img src="https://www.itsva.edu.mx/archivos/imagenes/cabecera2019-veda.png"alt="W3Schools.com" style="width:40%;height:50px;float:right;">
<br>
<br>
<div><h1 style="font-family:Impact; text-align:center">Valores</h1></div>
<?php $form = ActiveForm::begin(); ?>
<?php foreach ($prts as $index => $valoresc) { ?>
    
    <?php } ?>
    <?= 
        DetailView::widget([
        'model' => $valoresc,
        'attributes' => [
            //'idvaloresb',
            ['label'=>'Nombre de la Variable',
            'value'=>$valoresc->getIndicadores($valoresc->indicadores_idindicadores)],            
        ],
    ]) ?>
<html>
<p class="titulo" style="background-color:#BC955C; height: 40px;color:white;font-size: 20px;font-family:Cambria;text-align:center; margin:0%"><strong>Tabla Variable C<strong></p>
</html>
<table style="width:100%;">
    <tr>
        <td bgcolor="#E6E9ED">Ingenieria</td>
        <td bgcolor="#E6E9ED ">Total</td>
        <td bgcolor="#E6E9ED ">Hombres</td>
        <td bgcolor="#E6E9ED ">Mujeres</td>
        <td bgcolor="#E6E9ED ">Pertenecen Etnia</td>
        <td bgcolor="#E6E9ED ">Habitan en el Estado</td>
        <td bgcolor="#E6E9ED ">Dis.Motriz</td>
        <td bgcolor="#E6E9ED ">Dis.Mental</td>
        <td bgcolor="#E6E9ED ">Dis.Sensorial</td>
        <td bgcolor="#E6E9ED ">Dis.Psicosocial</td>
        <td bgcolor="#E6E9ED ">Disc. Comunicacion</td> 
    </tr>

    <?php 
        $ingenierias[0] = "Administración";
        $ingenierias[1] = "Gestión Empresarial";
        $ingenierias[2] = "Civil";
        $ingenierias[3] = "Industrial";
        $ingenierias[4] = "Sistemas";
        $ingenierias[5] = "Ambiental";
        ?>

    <?php foreach ($prts as $index => $valoresc) { ?>
               
    <tr>
        
        <td><?= $form->field($valoresc, "[$index]ingenieria")->hiddenInput(['value'=>$ingenierias[$index]])->label(false)?><label><?php echo $ingenierias[$index]?></label></td>
        <td><?= $form->field($valoresc, "[$index]Total")->textInput(['maxlength' => true])->label(FALSE) ?></td>
        <td><?= $form->field($valoresc, "[$index]hombres")->textInput(['maxlength' => true])->label(FALSE) ?></td> 
        <td><?= $form->field($valoresc, "[$index]mujeres")->textInput(['maxlength' => true])->label(FALSE) ?></td>       
        <td><?= $form->field($valoresc, "[$index]pertenecenEtnia")->textInput(['maxlength' => true])->label(FALSE) ?></td>
        <td><?= $form->field($valoresc, "[$index]HabitanEnElEstado")->textInput()->label(FALSE) ?></td>
        <td><?= $form->field($valoresc, "[$index]DiscapacidadMotriz")->textInput(['maxlength' => true])->label(FALSE) ?></td>  
        <td><?= $form->field($valoresc, "[$index]DiscapacidadMental")->textInput(['maxlength' => true])->label(FALSE) ?></td>
        <td><?= $form->field($valoresc, "[$index]DiscapacidadSensorial")->textInput()->label(FALSE) ?></td>
        <td><?= $form->field($valoresc, "[$index]DiscapacidadPsicosocial")->textInput(['maxlength' => true])->label(FALSE) ?></td>
        <td><?= $form->field($valoresc, "[$index]DiscapacidadComunicacion")->textInput(['maxlength' => true])->label(FALSE) ?></td> 
    </tr> 
   <?php } ?>
</table>

<div class="form-group">
        <?= Html::submitButton($valoresc->isNewRecord ? 'Guardar' : 'Update', ['class' => $valoresc->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>
<div class="Una vez llenado y guardado no podra realizar el proceso hasta el siguiente trimestre" style="background-color:#D6DBDF;color:#C0392B ;border-left: 6px solid #f44336;">
<marquee behavior="scroll" direction="right" scrolldelay="70"> Una vez llenado y guardado no podra realizar el proceso hasta el siguiente trimestre..</marquee>
</div>
</div>
</div>
</div>
</body>
