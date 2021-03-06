<?php

/* @var $this yii\web\View */

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Главная';
?>
<script src="/web/js/slick-1.8.1/slick/slick.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/web/js/carusel.js" type="text/javascript" charset="utf-8"></script>

<link rel="stylesheet" type="text/css" href="/web/js/slick-1.8.1/slick/slick.css">
<link rel="stylesheet" type="text/css" href="/web/js/slick-1.8.1/slick/slick-theme.css">
<style>
    .wrap > .container {
        padding: 0 15px 20px;
    !important;
    }
</style>
<div class="jumbotron">
    <img src="../images/welcome-bg.jpg" id="img-back">
    <canvas class="background"></canvas>
    <div class="info-supre">
        <h1>Управление информационными<br> технологиями</h1>
        <p class="lead">Ваши возможности. Наша страсть.</p>
        <p><a class="btn btn-lg send_info" href="#site-contact">Связаться</a></p>
    </div>
</div>
<!--<div class="box" data-scroll-speed="9">L</div>-->
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="section_heading wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <!--                <p>Мы предлагаем</p>-->
                <h1>Наши <span>Услуги</span></h1>
                <div class="line_perfct"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <a class="no_href_style" href="/site/outsourcing">
                <div class="single_service show-fanny wow fadeInUp" data-wow-delay="0.2s"
                     style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <div class="single_service_icon">
                        <img src="/web/images/service-1-serveradm.png">
                    </div>
                    <div class="single_service_text">
                        <h4>Администрирование серверов</h4>
                        <p>от 1800 руб</p>
                        <p>Мониторинг серверов,
                        <p>Поддержка и администрирование сети</p>
                        <p>Мониторинг сети</p>
                        <p>Резервное копирование</p>
                        <p>Антивирусный контроль</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-md-4">
            <a class="no_href_style" href="/site/outsourcing">
                <div class="single_service show-fanny wow fadeInUp" data-wow-delay="0.2s"
                     style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <div class="single_service_icon">
                        <img src="/web/images/service-2-workplace.png">
                    </div>
                    <div class="single_service_text">
                        <h4>Администрирование ПО рабочих мест</h4>
                        <p>от 500 руб</p>
                        <div class="service-box-text"><p>Поддержка рабочих мест и пользователей</p></div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="single_service_devops show-fanny wow fadeInUp" data-wow-delay="0.2s"
                 style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <div class="single_service_icon">
                    <img src="/web/images/service-3-orgtech.png">
                </div>
                <div class="single_service_text_devops">
                    <h4>Настройка и поддержка оргтехники (не включая ремонт)</h4>
                    <p>от 500 руб</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="single_service_devops show-fanny wow fadeInUp" data-wow-delay="0.2s"
                 style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <div class="single_service_icon">
                    <img src="/web/images/development.png" width="64px" height="64">
                </div>
                <div class="single_service_text_devops">
                    <h4>Web-development</h4>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="single_service show-fanny wow fadeInUp little_block" data-wow-delay="0.2s"
                 style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <div class="single_service_icon">
                    <img src="/web/images/service-4-modernisation.png">
                </div>
                <div class="single_service_text">
                    <h4>Работы по модернизации ИТ оборудования</h4>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="single_service show-fanny wow fadeInUp little_block" data-wow-delay="0.2s"
                 style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <div class="single_service_icon">
                    <img src="/web/images/1-e1500627142330.png">
                </div>
                <div class="single_service_text">
                    <h4>Подключение к ОФД согласно 54-ФЗ</h4>

                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="single_service show-fanny wow fadeInUp little_block" data-wow-delay="0.2s"
                 style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <div class="single_service_icon">
                    <img src="/web/images/1s-e1500627187151.png">
                </div>
                <div class="single_service_text">
                    <h4>Подключение к 1С - Отчётности</h4>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="single_service show-fanny wow fadeInUp little_block" data-wow-delay="0.2s"
                 style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <div class="single_service_icon">
                    <img src="/web/images/service-5-sell.png">
                </div>
                <div class="single_service_text">
                    <h4>Продажа ИТ оборудования и ПО</h4>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="single_service show-fanny wow fadeInUp little_block" data-wow-delay="0.2s"
                 style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <div class="single_service_icon">
                    <img src="/web/images/service-6-it-infrastr.png">
                </div>
                <div class="single_service_text">
                    <h4>ИТ инфраструктура с нуля</h4>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="single_service show-fanny wow fadeInUp little_block" data-wow-delay="0.2s"
                 style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <div class="single_service_icon">
                    <img src="/web/images/logo1cr1-e1510913475553.jpg">
                </div>
                <div class="single_service_text">
                    <h4>1С Франчайзинг</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="row complecs_service">
        <div class="col-md-12 wow fadeInUp" data-wow-delay="0.2s"
             style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
            <div class="special_area_text">
                <p>«Ваш бэк-офис — фронт-офис другой компании. Не организуйте столовую своими силами — пусть это сделает
                    подрядчик. Не печатайте материалы сами — поручите это типографии. Нужно понимать, где вы создаете
                    реальную добавленную стоимость, и направлять туда своих лучших людей и ресурсы. Вспомогательные
                    функции по определению не смогут привлечь ваших лучших людей. Мы поручили эти функции
                    специализированным компаниям, которые поручили их выполнение своим лучшим сотрудникам. Эта практика
                    много раз себя оправдывала. Именно в этом суть аутсорсинга.»</p>
                <p>Джек Уэлч, CEO General Electric.</p>
                <p>Мы создаем решения, руководствуясь многолетним нашим опытом в сфере ИТ, с учетом конкретных
                    технологических и эксплуатационных требований наших клиентов. Каждый бизнес уникален, и наши
                    сотрудники всегда учитывают это при разработке решений.</p>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="like_client">
        <div class="row icon_center">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="cool_fact_text wow fadeInUp" data-wow-delay="0.2s"
                     style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <img class="icon_info_company" src="/web/images/icons8.png">
                    <h3><span class="counter">8</span></h3>
                    <h5>Многолетний опыт</h5>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="cool_fact_text wow fadeInUp" data-wow-delay="0.4s"
                     style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                    <img class="icon_info_company" src="/web/images/icons9.png">
                    <h3><span class="counter">50</span>+</h3>
                    <h5>Счастливых клиентов</h5>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="cool_fact_text wow fadeInUp" data-wow-delay="0.6s"
                     style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                    <img class="icon_info_company" src="/web/images/icons10.png">
                    <h3><span class="counter">100</span>+</h3>
                    <h5>Запущенных проектов</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container marg_top_cont">
    <div class="section_heading wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
        <h1>Отзывы</h1>
        <div class="line_perfct"></div>
    </div>
    <section class="regular slider">
        <div>
            <div class="osnov_review">
                <img class="reply-item__logo"
                     src="https://werterservice.ru/wp-content/uploads/2017/05/reply-logo__bonne.png">
                <span class="reply-item__reply-person">Заместитель главного бухгалтера Кокорева А.Д.</span>
                <span class="reply-item__city">ООО "Бонн Интернейшенл"</span>
                <div class="reply-item__reply-text"><p>ООО "Бонн Интернейшенл" не один год сотрудничает с командой
                        itp-lab (WerterService). Хотим выразить благодарность за высокий профессионализм, отличное
                        качество и оперативность.</p>
                </div>
            </div>
        </div>
        <div>
            <div class="osnov_review">
                <img class="reply-item__logo" src="https://werterservice.ru/wp-content/uploads/2017/05/logo_since.jpg">
                <span class="reply-item__reply-person">Главный бухгалтер Сушко А.В.</span>
                <span class="reply-item__city">Центр развития ребёнка</span>
                <div class="reply-item__reply-text"><p>Профессионализм и высокое качество работы сотрудников компании
                        заслуживает самой высокой оценки. Благодарим за профессиональный подход и внимание ко всем нашим
                        требованиям! </p>
                </div>
            </div>
        </div>
        <div>
            <div class="osnov_review">
                <img class="reply-item__logo"
                     src="https://werterservice.ru/wp-content/uploads/2017/05/reply-logo__ils.png">
                <span class="reply-item__reply-person">Главный бухгалтер Малыгина Л.Л.</span>
                <span class="reply-item__city">Международная лингвистическая школа</span>
                <div class="reply-item__reply-text"><p>Выражает благодарность команде специалистов itp-lab
                        (WerterService) за предоставленные высоком профессиональном уровне ИТ-услуги.</p>
                </div>
            </div>
        </div>
        <div>
            <div class="osnov_review">
                <img class="reply-item__logo"
                     src="https://werterservice.ru/wp-content/uploads/2017/05/reply-logo__bonne.png">
                <span class="reply-item__reply-person">Заместитель главного бухгалтера Кокорева А.Д.</span>
                <span class="reply-item__city">ООО "Бонн Интернейшенл"</span>
                <div class="reply-item__reply-text"><p>ООО "Бонн Интернейшенл" не один год сотрудничает с командой
                        itp-lab (WerterService). Хотим выразить благодарность за высокий профессионализм, отличное
                        качество и оперативность.</p>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="container">
    <div class="site-contact" id="site-contact">
        <div class="section_heading wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <h1>Связаться с нами</h1>
            <div class="line_perfct"></div>
        </div>

        <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
            <div class="alert alert-success">
                Благодарим Вас за обращение к нам. Мы ответим вам как можно скорее.
            </div>
        <?php else: ?>
            <div class="contact_form_info">
                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <?= $form->field($model, 'name') ?>
                        <?= $form->field($model, 'phone') ?>
                        <?= $form->field($model, 'email') ?>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <?= $form->field($model, 'body')->textarea(['rows' => 9]) ?>
                    </div>
                </div>
                <div class="form-group contact_center">
                    <?= Html::submitButton('Связаться', ['class' => 'btn btn-lg send_info', 'name' => 'contact-button']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        <?php endif; ?>
    </div>
</div>