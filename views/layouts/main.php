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

<!-- preloader -->
<style type="text/css">
    .preloader_bg { position: fixed; background: rgb(17, 17, 17); width: 100%; height: 100%; top: 0; left: 0; z-index: 3000; }
    .preloader_content { position: fixed; left: 50%; top: 50%; transform: translate(-50%,-50%); z-index: 3001; font-size: 14px; }
    .preloader_content span { display: block; margin: auto; text-align: center; text-transform: uppercase; color: rgba(225,225,225,1);}
</style>
<script type="text/javascript">
    $(function(){
        $('.preloader_bg, .preloader_content').fadeIn(0);
        $(window).on("load", function() {
            $('.preloader_bg').delay(1000).fadeOut(1500);
            $('.preloader_content').delay(1000).fadeOut(300);
        });
    });
</script>

<div class="preloader_bg"></div>
<div class="preloader_content">
    <img src="../../web/images/Ecxd.gif"/>
</div>
<noscript>
    <style>
        html, body { opacity: 1 !important; }
        .preloader_bg, .preloader_content { display: none !important; }
    </style>
</noscript>
<!-- /preloader -->

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
                    ['label' => '1С Отчётность', 'url' => ['/site/color2']],
            ]],
            ['label' => 'ИТ Аутсорсинг', 'url' => ['/site/outsourcing']],
            ['label' => 'Торговое оборудование', 'url' => ['/site/color1']],
            ['label' => 'Блог', 'url' => ['/site/contact']],
            ['label' => 'О нас', 'url' => ['/site/about']],
//            Yii::$app->user->isGuest ? (
//                ['label' => 'Login', 'url' => ['/site/login']]
//            ) : (
//                '<li>'
//                . Html::beginForm(['/site/logout'], 'post')
//                . Html::submitButton(
//                    'Logout (' . Yii::$app->user->identity->username . ')',
//                    ['class' => 'btn btn-link logout']
//                )
//                . Html::endForm()
//                . '</li>'
//            ),
        ],
    ]);
    NavBar::end();
    ?>
<!--            --><?//= Breadcrumbs::widget([
//                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
//            ]) ?>
<!--            --><?//= Alert::widget() ?>
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
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut delectus consectetur omnis, alias nulla repudiandae quasi non at ullam, vel officiis unde cum ea.</p>
                    <div class="footer_social_area">
                        <a href="https://facebook.ru/"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="https://twitter.ru/"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <!-- Footer About Area End -->

            <!-- latest news Area Start -->
<!--            <div class="col-xs-12 col-sm-6 col-md-3">-->
<!--                <div class="footer_upcoming_event wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">-->
<!--                    <div class="title">-->
<!--                        <h4>Блог</h4>-->
<!--                    </div>-->
<!---->
<!---->
                    <!-- Single latest post -->
<!--                    <div class="event_single_post">-->
<!--                        <img src="assets/cache/images/545632-634x375-a53.jpg" alt="">-->
<!--                        <a href="/blog/kopiya-statya-1.html">-->
<!--                            <p>Копия Статья 1</p>-->
<!--                        </a>-->
<!--                    </div>-->
                    <!-- Single latest post -->
<!--                    <div class="event_single_post">-->
<!--                        <img src="assets/cache/images/545632-634x375-a53.jpg" alt="">-->
<!--                        <a href="/blog/statya-1.html">-->
<!--                            <p>Статья 1</p>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            <!-- latest news Area End -->

            <!-- Contact info Area Start -->
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="footer_contact_info wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                    <div class="title">
                        <h4>Контакты</h4>
                    </div>
                    <!-- single contact info start -->
                    <div class="footer_single_contact_info">
                        <i class="fa fa-globe" aria-hidden="true"></i>
                        <p>адрес 1</p><p>адрес 2</p><p>адрес 3</p>
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
                </div>
            </div>
            <!-- Contact info Area End -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <iframe src="https://yandex.ru/map-widget/v1/-/CKErbEOi" class="map_yy" frameborder="1" allowfullscreen="true"></iframe>
            </div>
        </div>
        <p class="pull-left">&copy; ITP_LAB <?= date('Y') ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
