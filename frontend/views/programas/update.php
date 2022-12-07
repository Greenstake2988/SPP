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
.caja{
border-radius: 5px;
}
</style>

<style>
.wrap > .container {
     padding: 0px 0px 0px; 
}
.btn-success {
    color: #fff;
    background-color: #044887;
    border-color: #044887;
    }
</style>
<style>
.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
    color: black;
    background-color: #e7e7e7;
}

</style>
<div class="programas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
