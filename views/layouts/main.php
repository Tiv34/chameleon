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
$this->registerCssFile('/web/css/background.css');
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

<noscript>
    <style>
        html, body { opacity: 1 !important; }
        .preloader_bg, .preloader_content { display: none !important; }
    </style>
</noscript>
<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Html::img('@web/images/logo_v20.png', ['alt'=>Yii::$app->name, 'class'=>'brand-img']),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo '<div class="contact_info_phone"><a href="tel:+7 (499) 550 34 74" class="contact_href">+7 (499) 550 34 74</a><br><a href="mailto:info@itp-lab.ru" class="contact_href">info@itp-lab.ru</a></div>';
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Главная', 'url' => ['/site/index']],
            ['label' => '1С Программы и сервисы', 'items' => [
                    ['label' => '1С Программы', 'url' => ['/site/service1c']],
                    ['label' => '1С Отчётность', 'url' => ['/site/reporting']],
            ]],
            ['label' => 'ИТ Аутсорсинг', 'url' => ['/site/outsourcing']],
            ['label' => 'Торговое оборудование', 'url' => ['/site/device']],
            ['label' => 'О нас', 'url' => ['/site/about']],
            ['label' => 'Вход', 'url' => ['/user-management/auth/login']],
        ],
    ]);
    NavBar::end();
    ?>
        <?= $content ?>
</div>

<footer class="footer">
    <div class="container">
        <div class="row">
            <!-- Footer About Area Start -->
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="footer_about_us wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <div class="title">
                        <h4>О нас</h4>
                    </div>
                    <p>В компании «ltp-lab» всегда рады общению с клиентами. Свяжитесь с нами. Мы разработаем ИТ-решение, которое решит ваши задачи.</p>
                    <div class="footer_social_area">
                        <a href="https://facebook.ru/"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="https://twitter.ru/"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </div>
                </div>

                <div class="footer_about_us wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; margin-top: 35px; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <a target="_blank" class="contact_href" href="/web/files/COMREQ-40802810900000065876-2017-04-17.pdf">Реквизиты</a>
                </div>
            </div>


            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="footer_contact_info wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                    <div class="title">
                        <h4>Контакты</h4>
                    </div>
                    <!-- single contact info start -->
                    <div class="footer_single_contact_info">
                        <i class="fa fa-globe" aria-hidden="true"></i>
                        <p>127549, Москва, ул Костромская, дом 20</p>
                    </div>

                    <!-- single contact info start -->
                    <div class="footer_single_contact_info">
                        <i class="fa fa-phone-square" aria-hidden="true"></i>
                        <a href="tel:+7 (499) 550 34 74" class="contact_href">+7 (499) 550 34 74</a>
                    </div>

                    <!-- single contact info start -->
                    <div class="footer_single_contact_info">
                        <i class="fa fa-envelope-square" aria-hidden="true"></i>
                        <a href="mailto:info@itp-lab.ru" class="contact_href">info@itp-lab.ru</a>
                    </div>
                    <p><a class="btn btn-lg send_info" id="send_info_footer" href="#site-contact">Связаться c нами</a></p>
                </div>
            </div>
            <!-- Contact info Area End -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <iframe src="https://yandex.ru/map-widget/v1/-/CKaoFA5C" class="map_yy" frameborder="1" allowfullscreen="true"></iframe>
            </div>
        </div>
        <p class="pull-left">&copy; ITP_LAB <?= date('Y') ?></p>
    </div>
</footer>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(57256903, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/57256903" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
