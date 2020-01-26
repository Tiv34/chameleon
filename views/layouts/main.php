<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Html::img('@web/images/logo_v20.png', ['alt'=>Yii::$app->name, 'class'=>'brand-img']),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo '<div class="contact_info_phone"> + 7 499 550 34 74 <br> info@itp-lab.ru</div>';
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Главная', 'url' => ['/site/index']],
            ['label' => 'Торговое оборудование', 'url' => ['/site/color1']],
            ['label' => '1С Программы и сервисы', 'items' => [
                    ['label' => '1С Программы', 'url' => ['/site/service1c']],
                    ['label' => '1С Отчётность', 'url' => ['/site/service1c']],
//                    ['label' => 'Цвет 1', 'url' => ['/site/color1']],
//                    ['label' => 'Цвет 2', 'url' => ['/site/color2']],
//                    ['label' => 'Цвет 3', 'url' => ['/site/color3']],
            ]],
            ['label' => 'ИТ Аутсорсинг', 'url' => ['/site/outsourcing']],
            ['label' => 'Блог', 'url' => ['/site/contact']],
            ['label' => 'О нас', 'url' => ['/site/about']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            ),
        ],
    ]);
    NavBar::end();
    ?>

    <div class="jumbotron">
        <canvas class="background"></canvas>
        <div class="info-supre">
            <h1>Управление информационными технологиями</h1>
            <p class="lead">Ваши возможности. Наша страсть.</p>
            <p><a class="btn btn-lg send_info" href="">Связаться</a></p>
        </div>
    </div>

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
        <p class="pull-left">&copy; ITP_LAB <?= date('Y') ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
