<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'О нас';
$this->params['breadcrumbs'][] = $this->title;
?>
<!--<img class="fonts_back" src="/web/images/fonts_back3.png">-->

<div class="container container_conntent">
    <div id="about_container">
    <div class="site-about">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <div class="row">
        <div class="col-xs-8">
            <p>
                Миссия компании «itp-lab» выходит далеко за рамки предоставления технологических решений.
                Мы помогаем максимально эффективно выстроить процессы, чтобы клиенты могли сосредоточить усилия на самом
                важном — своей основной деятельности.
                Располагая полным спектром услуг, мы заботимся о том, чтобы вы сохраняли преимущество в непрерывно
                меняющейся технологической среде и успешно достигали своих целей.
            </p>
        </div>
        <div class="col-xs-2">
            <img src="/web/images/about_start.png" width="300" height="300">
        </div>
    </div>
    </div>
</div>

