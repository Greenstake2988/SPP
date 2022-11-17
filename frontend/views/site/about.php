<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Resultados Indicadores PDI';
$this->params['breadcrumbs'][] = $this->title;
?>
 

<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>Porcentaje:</p>  
    <?php
        $query = (new \yii\db\Query())->from('valoresb');
        $sum = $query->sum('Total');
        echo (int)($sum);

        $post = Yii::$app->db->createCommand('SELECT * FROM valoresb WHERE indicadores_idindicadores=3');
        $sum = $post->queryOne();
?> 
    
</div>

