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
        <div class="col-sm-5 col-md-5">
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
        <div class="col-sm-5 col-md-5">
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

    <div class="site-about">
        <h1>Стоимость ИТ-аутсорсинга</h1>
        <div class="line_perfct"></div>
    </div>

    <div class="row">
        <div class="col-sm-3 col-md-3 price">
            <div class="expenses">
                <h4>Хит</h4>
                <div class="box_or_left"></div>
            </div>
            <div class="text_price">
                <table class="table">
                    <tbody>
                    <tr>
                        <td>до 10 рабочих мест</td>
                    </tr>
                    <tr>
                        <td>1-2 сервера со стандартными ролями</td>
                    </tr>
                    <tr>
                        <td>1-2 МФУ или принтера</td>
                    </tr>
                    <tr>
                        <td>Обслуживание ip-телефонии</td>
                    </tr>
                    <tr>
                        <td>2 плановых выезда в месяц</td>
                    </tr>
                    <tr>
                        <td>2 аварийных выезда в месяц</td>
                    </tr>
                    <tr>
                        <td>Удаленное администрирование онлайн с 9.00 до 19.00</td>
                    </tr>
                    </tbody>
                </table>
                <div class="sum-expenses">
                    <h3 id="int_price_sum1">15 000 руб</h3>
                </div>
            </div>
        </div>
        <div class="col-sm-3 col-md-3 price">
            <div class="expenses">
                <h4>Стандарт</h4>
                <div class="box_or_left"></div>
            </div>
            <div class="text_price">
                <table class="table">
                    <tbody>
                    <tr>
                        <td>11-20 рабочих мест</td>
                    </tr>
                    <tr>
                        <td>2-3 сервера со стандартными ролями</td>
                    </tr>
                    <tr>
                        <td>3-5 МФУ или принтера</td>
                    </tr>
                    <tr>
                        <td>Обслуживание ip-телефонии</td>
                    </tr>
                    <tr>
                        <td>Обслуживание корпоративной почты</td>
                    </tr>
                    <tr>
                        <td>4 плановых выезда в месяц</td>
                    </tr>
                    <tr>
                        <td>2 аварийных выезда в месяц</td>
                    </tr>
                    <tr>
                        <td>Удаленное администрирование онлайн с 9.00 до 19.00</td>
                    </tr>
                    </tbody>
                </table>
                <div class="sum-expenses">
                    <h3 id="int_price_sum2">25 000 руб</h3>
                </div>
            </div>
        </div>
        <div class="col-sm-3 col-md-3 price">
            <div class="expenses">
                <h4>Бизнес</h4>
                <div class="box_or_left"></div>
            </div>
            <div class="text_price">
                <table class="table">
                    <tbody>
                    <tr>
                        <td>21-40 рабочих мест</td>
                    </tr>
                    <tr>
                        <td>3-5 сервера со стандартными ролями</td>
                    </tr>
                    <tr>
                        <td>6-10 МФУ или принтера</td>
                    </tr>
                    <tr>
                        <td>Обслуживание корпоративной почты и ip-телефонии</td>
                    </tr>
                    <tr>
                        <td>Обслуживание видеонаблюдения и СКУД</td>
                    </tr>
                    <tr>
                        <td>4 плановых выезда в месяц</td>
                    </tr>
                    <tr>
                        <td>Неограниченное число аварийных выездов</td>
                    </tr>
                    <tr>
                        <td>Удаленное администрирование онлайн с 9.00 до 19.00</td>
                    </tr>
                    </tbody>
                </table>
                <div class="sum-expenses">
                    <h3 id="int_price_sum3">35 000 руб</h3>
                </div>
            </div>
        </div>
        <div class="col-sm-3 col-md-3 price">
            <div class="expenses">
                <h4>VIP</h4>
                <div class="box_or_left"></div>
            </div>
            <div class="text_price">
                <table class="table">
                    <tbody>
                    <tr>
                        <td height="51px">Неограниченное число выездов</td>
                    </tr>
                    <tr>
                        <td height="70px">Обслуживание нескольких подразделений компании</td>
                    </tr>
                    <tr>
                        <td height="70px">Выделенный инженер для Вашей компании</td>
                    </tr>
                    <tr>
                        <td>Выделенный менеджер для Вашей компании</td>
                    </tr>
                    <tr>
                        <td>Реализация индивидуальных ИТ-проектов</td>
                    </tr>
                    <tr>
                        <td height="70px">Удаленное администрирование онлайн в нерабочее время</td>
                    </tr>
                    </tbody>
                </table>
                <div class="sum-expenses-last">
                    <h4 id="int_price_sum4">Рассчитывается индивидуально</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="row" id="info_block_loga">
        <div class="col-sm-3 col-md-6">
            <h3>Чем ИТ аутсорсинг лучше штатного сис. админа?</h3>
            <ul id="shtat">
                <li>Компетентность специалистов ИТ-отдела (администратор Windows Server, администратор Linux, 1с-ник, сетевик, эникейщик)</li>
                <li>Компетентность ограничивается знаниями и опытом одного-двух сотрудников. Нет возможности оценить уровень компетенции</li>
                <li>Взаимозаменяемость сотрудников в случае больничного, отпуска или увольнения</li>
                <li>Штатный админ может заболеть или уволиться, оставив компанию без поддержки</li>
                <li>Фиксированная плата, которая зачисляется в расходы; отсутствие налогов по ЗП и понятные обязанности</li>
                <li>Необходимость платить зарплату работнику, выплачивать налоги и делать отчисления в различные фонды</li>
            </ul>
        </div>
        <div class="col-sm-3 col-md-4" id="big_logo">
            <img src="/web/images/logo_big.png" width="300" height="300">
        </div>
    </div>
</div>