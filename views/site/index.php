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
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="single_service show-fanny wow fadeInUp" data-wow-delay="0.2s"
                 style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <div class="single_service_icon">
                    <img src="/web/images/service-2-workplace.png">
                </div>
                <div class="single_service_text">
                    <h4>Администрирование ПО рабочих мест</h4>
                    <div class="service-box-price">от 500 руб</div>
                    <div class="service-box-text"><p>Поддержка рабочих мест и пользователей</p></div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="single_service show-fanny wow fadeInUp" data-wow-delay="0.2s"
                 style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <div class="single_service_icon">
                    <img src="/web/images/service-3-orgtech.png">
                </div>
                <div class="single_service_text">
                    <h4>Настройка и поддержка оргтехники (не включая ремонт)</h4>
                    <p>от 500 руб</p>
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
<div class="container">
    <div class="row complecs_service">
        <div class="col-md-12 wow fadeInUp" data-wow-delay="0.2s"
             style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
            <div class="section_heading wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <h1>Комплексные услуги</h1>
                <div class="line_perfct"></div>
            </div>
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

    <div class="site-contact">
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
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <?= $form->field($model, 'email') ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <?= $form->field($model, 'phone') ?>
                        <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                            'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                        ]) ?>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <?= $form->field($model, 'body')->textarea(['rows' => 5]) ?>
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