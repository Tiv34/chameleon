<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'ИТ Аутсорсинг';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="site-about">
        <h1><?= Html::encode($this->title) ?></h1>
        <div class="line_perfct"></div>
    </div>

    <div class="row">
        <div class="demo-wrapper col-sm-6 col-md-4">
            <div class="link-inner link">
                <div id="first_test" class="mobile">
                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                    <div class="row">
                        <?= $form->field($model, 'name') ?>
                        <?= $form->field($model, 'phone') ?>
                        <?= $form->field($model, 'email') ?>
                    </div>
                    <?php ActiveForm::end(); ?>
                    <div class="form-group">
                        <?= Html::submitButton('Связаться', ['class' => 'btn btn-lg send_info', 'name' => 'contact-button']) ?>
                    </div>
                </div>

                <div id="second_test">
                    <div class="topinfo-form_text">
                        <h1 class="h2 wow fadeIn mt-0 mb-32" style="visibility: visible; animation-name: fadeIn;"><span>ИТ-обслуживание</span>
                        </h1>
                        <p><strong>ИТ-аутсорсинг для оптимального обслуживания вашего бизнеса</strong></p>
                        <ul class="efsol_goldUL mb-40">
                            <li>обслуживание компьютеров, оргтехники и серверов компаний</li>
                            <li>организация системы резервного копирования</li>
                            <li>внедрение круглосуточного мониторинга ИТ-структуры</li>
                            <li>регламентные работы, настройка ПО и консультации</li>
                            <li>команда ИТ-инженеров</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="first_test1" class="col-sm-6 col-md-4">
            <p>
                Мы оказываем услуги <strong>ИТ-аутсорсинга</strong>
                - вы передаете нашим специалистам обслуживание ИТ-инфраструктуры вашей компании, а взамен получаете
                высокое качество сервиса по выгодной стоимости и оперативное решение задач.
                <b>Больше нет необходимости содержать штатных ИТ-специалистов.</b>
            </p>
            <h4><span>ИТ-аутсорсинг позволяет предприятиям:</span></h4>
            <ul>
                <li>Организовать качественное обслуживание ИТ-инфраструктуры</li>
                <li>Сократить затраты на содержание ИТ-специалистов</li>
                <li>Получать ИТ-услуги в режиме 24/7</li>
            </ul>
            <p>
                Услуга ИТ-аутсорсинга актуальна как для новых компаний, которые стремятся минимизировать свои затраты
                без потери качества обслуживания,
                так и для организаций, которые имеют растущие потребности в ИТ-сфере и необходимость в привлечении
                квалифицированных специалистов.
            </p>
        </div>
    </div>

    <div class="row outsourcing_row">
        <!--        <div class="site-about">-->
        <!--            <h1>Стоимость ИТ-аутсорсинга</h1>-->
        <!--            <div class="line_perfct"></div>-->
        <!--        </div>-->
        <div class="col-sm-5 col-md-5 expenses">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Расходы на собственного ИТ-специалиста</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Количество рабочих станций</td>
                    <td>25</td>
                </tr>
                <tr>
                    <td>Количество серверов	</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>Средний оклад специалиста</td>
                    <td>50 000 р.</td>
                </tr>
                <tr>
                    <td>Аренда площади для 1 рабочего места</td>
                    <td>5 000 р.</td>
                </tr>
                <tr>
                    <td>Социальное налогообложение	</td>
                    <td>15 000 р.</td>
                </tr>
                <tr>
                    <td>Итого + социальные выплаты</td>
                    <td>70 000 р.</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-sm-5 col-md-5 expenses">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Расходы на ИТ-аутсорсинг itp-lab</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Количество рабочих станций</td>
                    <td>25</td>
                </tr>
                <tr>
                    <td>Количество серверов	</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>Средний оклад специалиста</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Аренда площади для 1 рабочего места</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Социальное налогообложение	</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Итого + социальные выплаты</td>
                    <td>25 000 р.</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>