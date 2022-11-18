<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<style>
.navbar-default {
    background-color: #10312B;
    border-color: #10312B;
    color: #FFFFFF;
}
.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
    color: #555;
    background-color: #e7e7e7;
}
</style>
<div class="wrap"  >
    <?php
   NavBar::begin([
      'brandLabel' => Yii::$app->name,
      'brandUrl' => Yii::$app->homeUrl
     //    'options' => [
       // 'class' => "navbar fixed-top navbar-light justify-content-center" style="background-color: #10312B; color: #FFFFFF">
       // <h3>Sistema de Integración Escolar (SIE)</h3>
    ]);
   $menuItems = [
        
    ];
    if (Yii::$app->user->isGuest) {

    } else{
       // $menuItems[] = ['label' => 'Inicio', 'url' => ['site/index']];
       // $menuItems[] = ['label' => 'Resultados', 'url' => ['indicadores/index']];
        //$menuItems[] = ['label' => 'Departamentos', 'url' => ['estatus/index']];
        //$menuItems[] = ['label' => 'Medio', 'url' => ['status/index']];
        //$menuItems[] = ['label' => 'Roles', 'url' => ['roles/index']];
        //$menuItems[] = ['label' => 'Usuarios', 'url' => ['usuariosindicadores/index']];
        //$menuItems[] = ['label' => 'Programas', 'url' => ['programashasindicadores/index']];
      
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Salir (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';   
            }
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                   'items' => $menuItems,
               ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                   'items' => [['label' => 'Crear', 'items' => [['label' => 'Roles', 'url' => ['roles/index']],
                   ['label' => 'Usuarios', 'url' => ['usuariosindicadores/index']],
                   ['label' => 'Programas', 'url' => ['programashasindicadores/index']],
                   ]],
                   ]
               ]);
            echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
               'items' => [['label' => 'Ver', 'items' => [['label' => 'Inicio', 'url' => ['site/index']],
               ['label' => 'Resultados', 'url' => ['indicadores/index']],
               ['label' => 'Departamentos', 'url' => ['estatus/index']],
               ['label' => 'Medio', 'url' => ['status/index']],
               ]],
               ]
           ]);

           NavBar::end();
    ?>
    

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
