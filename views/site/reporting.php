<?php

$this->title = '1С Отчётность';
$this->params['breadcrumbs'][] = $this->title;
?>
<link rel="stylesheet" type="text/css" href="/web/css/polzunok/polzunok.css">
<link rel="stylesheet" type="text/css" href="/web/css/polzunok/polzunok.web.css">



<div class="container">
    <div class="site-about">
        <h1 class="mb-5">1C-Отчётность</h1>
        <div class="line_perfct"></div>
        <br>
        <p class="section-content__subtitle">
            Выберите категорию вашего бизнеса и мы подберем для <br>
            вас оптимальное ценовое решение.
        </p>
    </div>
    <div class="submit_okopf">
        <button type="submit" id="ip" class="btn btn-lg type-reporting">Индивидуальным предпринимателям</button>
        <button type="submit" id="ul" class="btn btn-lg type-reporting noactive">Юридическим лицам</button>
        <button type="submit" id="ub" class="btn btn-lg type-reporting noactive">Уполномоченным бухгалтериям</button>
    </div>


    <div class="price-box" id="ip-box">
        <form class="form-horizontal form-pricing ul-block" role="form">
            <div class="price-slider">
                <h4 class="great">Индивидуальным предпринимателям</h4>
                <span>Стоимость лицензии</span>
                <div class="col-sm-12">
                    <div id="slider2"></div>
                </div>
            </div>

            <div class="price-form">
                <div class="form-group">
                    <div class="header-calculate">
                        <input type="hidden" id="duration" class="form-control duration">
                        <p class="price lead text-bold" id="duration-label"></p>
                        <span class="price">₽/в год</span>
                    </div>
                </div>
            </div>

            <ul class="efsol_goldUL mb-40">
                <li>Отправка отчетности в ФНС, ПФР, ФСС, Росстат, ФСРАР, РПН и ФТС</li>
                <li>Письма в ФНС, ПФР и Росстат</li>
                <li>Сверки с ФНС</li>
                <li>Сверка НДС с контрагентами</li>
                <li>Отправка реестров больничных листов в ФСС</li>
                <li>Онлайн-проверка отчетности</li>
                <li>Мониторинг доставки отчетности</li>
                <li>СМС, email уведомления о статусах отчетности и требованиях госорганов</li>
                <li>Отправка ответов на требования госорганов</li>
                <li>Выписки ЕГРЮЛ/ЕГРИП (юридически значимые)</li>
                <li>Отправка уведомлений о контролируемых сделках в ФНС</li>
            </ul>
            <hr>

            <div class="d-flex align-items-center mb-4">
                <svg class="mr-4" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 10C14.486 10 10 14.486 10 20V24.143C10 25.167 10.897 26 12 26H13C13.2652 26 13.5196 25.8946 13.7071 25.7071C13.8946 25.5196 14 25.2652 14 25V19.857C14 19.5918 13.8946 19.3374 13.7071 19.1499C13.5196 18.9624 13.2652 18.857 13 18.857H12.092C12.648 14.987 15.978 12 20 12C24.022 12 27.352 14.987 27.908 18.857H27C26.7348 18.857 26.4804 18.9624 26.2929 19.1499C26.1054 19.3374 26 19.5918 26 19.857V26C26 27.103 25.103 28 24 28H22V27H18V30H24C26.206 30 28 28.206 28 26C29.103 26 30 25.167 30 24.143V20C30 14.486 25.514 10 20 10Z" fill="black"></path>
                    <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#D5D9E0"></rect>
                </svg>
                <p class="m-0">Техподдержка 24/7</p>
            </div>
            <div class="d-flex align-items-center mb-4">
                <svg class="mr-4" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.035 23.479C12.0119 23.6517 12.0002 23.8258 12 24C12 26.378 14.138 28.284 16.521 27.964C17.214 29.198 18.534 30 20 30C21.466 30 22.786 29.198 23.479 27.964C25.857 28.284 28 26.378 28 24C28 23.827 27.988 23.653 27.965 23.479C29.198 22.786 30 21.465 30 20C30 18.535 29.198 17.214 27.965 16.521C27.988 16.347 28 16.173 28 16C28 13.622 25.857 11.712 23.479 12.036C22.786 10.802 21.466 10 20 10C18.534 10 17.214 10.802 16.521 12.036C14.138 11.712 12 13.622 12 16C12 16.173 12.012 16.347 12.035 16.521C10.802 17.214 10 18.535 10 20C10 21.465 10.802 22.786 12.035 23.479ZM13.477 18.076L14.579 17.783L14.145 16.73C14.0498 16.4984 14.0006 16.2504 14 16C14 14.897 14.897 14 16 14C16.247 14 16.499 14.05 16.73 14.145L17.784 14.579L18.077 13.477C18.1899 13.0532 18.4396 12.6785 18.7873 12.4112C19.1351 12.1439 19.5614 11.999 20 11.999C20.4386 11.999 20.8649 12.1439 21.2127 12.4112C21.5604 12.6785 21.8101 13.0532 21.923 13.477L22.216 14.579L23.27 14.145C23.501 14.05 23.753 14 24 14C25.103 14 26 14.897 26 16C26 16.247 25.95 16.5 25.855 16.73L25.421 17.783L26.523 18.076C26.9458 18.1903 27.3193 18.4406 27.5856 18.7884C27.8518 19.1362 27.9961 19.562 27.9961 20C27.9961 20.438 27.8518 20.8638 27.5856 21.2116C27.3193 21.5594 26.9458 21.8097 26.523 21.924L25.421 22.217L25.855 23.27C25.95 23.5 26 23.753 26 24C26 25.103 25.103 26 24 26C23.753 26 23.501 25.95 23.27 25.855L22.216 25.421L21.923 26.523C21.8101 26.9468 21.5604 27.3215 21.2127 27.5888C20.8649 27.8561 20.4386 28.001 20 28.001C19.5614 28.001 19.1351 27.8561 18.7873 27.5888C18.4396 27.3215 18.1899 26.9468 18.077 26.523L17.784 25.421L16.73 25.855C16.4983 25.9501 16.2504 25.9994 16 26C14.897 26 14 25.103 14 24C14 23.753 14.05 23.5 14.145 23.27L14.579 22.217L13.477 21.924C13.0542 21.8097 12.6807 21.5594 12.4144 21.2116C12.1482 20.8638 12.0039 20.438 12.0039 20C12.0039 19.562 12.1482 19.1362 12.4144 18.7884C12.6807 18.4406 13.0542 18.1903 13.477 18.076Z" fill="black"></path>
                    <path d="M23.742 18.71L22.334 17.29L19.003 20.589L17.707 19.293L16.293 20.707L18.997 23.411L23.742 18.71Z" fill="black"></path>
                    <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#D5D9E0"></rect>
                </svg>
                <p class="m-0">Бесплатная замена сертификата</p>
            </div>

            <div class="d-flex align-items-center mb-4">
                <svg class="mr-4" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 24C21.671 24 23 22.669 23 21C23 19.331 21.671 18 20 18C18.329 18 17 19.331 17 21C17 22.669 18.329 24 20 24Z" fill="black"></path>
                    <path d="M28.817 19.186C28.5814 18.0344 28.1209 16.9405 27.462 15.967C26.8146 15.0093 25.9897 14.1844 25.032 13.537C24.0584 12.8783 22.9646 12.4179 21.813 12.182C21.2081 12.0593 20.5922 11.999 19.975 12.002V10L16 13L19.975 16V14.002C20.459 14 20.943 14.046 21.41 14.142C22.305 14.3254 23.1552 14.6832 23.912 15.195C24.6584 15.6982 25.3008 16.3406 25.804 17.087C26.5853 18.2422 27.002 19.6054 27 21C26.9998 21.9359 26.8128 22.8623 26.45 23.725C26.2735 24.1405 26.0579 24.5383 25.806 24.913C25.5531 25.2854 25.2659 25.6332 24.948 25.952C23.98 26.9182 22.7511 27.5809 21.412 27.859C20.4807 28.047 19.5213 28.047 18.59 27.859C17.6946 27.6754 16.844 27.3173 16.087 26.805C15.3415 26.3022 14.6998 25.6605 14.197 24.915C13.4166 23.7585 12.9997 22.3952 13 21H11C11.0011 22.7937 11.5369 24.5463 12.539 26.034C13.1868 26.9901 14.0109 27.8142 14.967 28.462C16.4526 29.4675 18.2061 30.0033 20 30C20.6093 29.9999 21.217 29.9386 21.814 29.817C22.9647 29.5794 24.0579 29.1191 25.032 28.462C25.5103 28.1397 25.956 27.7717 26.363 27.363C26.7705 26.9544 27.1388 26.5084 27.463 26.031C28.4676 24.5458 29.0031 22.7931 29 21C28.9999 20.3907 28.9386 19.783 28.817 19.186Z" fill="black"></path>
                    <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#D5D9E0"></rect>
                </svg>
                <p class="m-0">Безбумажное продление сертификата</p>
            </div>
        </form>
    </div>

    <div class="price-box" id="ul-box" hidden>
        <form class="form-horizontal form-pricing" role="form">
            <div class="price-slider">
                <h4 class="great">Юридическим лицам</h4>
                <span>Стоимость лицензии</span>
                <div class="col-sm-12">
                    <div id="slider2"></div>
                </div>
            </div>

            <div class="price-form">
                <div class="form-group">
                    <div class="header-calculate">
                        <input type="hidden" id="duration" class="form-control duration">
                        <p class="price lead text-bold" id="duration-label"></p>
                        <span class="price">₽/в год</span>
                    </div>
                </div>
            </div>

            <ul class="efsol_goldUL mb-40">
                <li>Отправка отчетности в ФНС, ПФР, ФСС, Росстат, ФСРАР, РПН и ФТС</li>
                <li>Письма в ФНС, ПФР и Росстат</li>
                <li>Сверки с ФНС</li>
                <li>Сверка НДС с контрагентами</li>
                <li>Отправка реестров больничных листов в ФСС</li>
                <li>Онлайн-проверка отчетности</li>
                <li>Мониторинг доставки отчетности</li>
                <li>СМС, email уведомления о статусах отчетности и требованиях госорганов</li>
                <li>Отправка ответов на требования госорганов</li>
                <li>Выписки ЕГРЮЛ/ЕГРИП (юридически значимые)</li>
                <li>Отправка уведомлений о контролируемых сделках в ФНС</li>
            </ul>
        </form>
    </div>

    <div class="price-box" id="ub-box" hidden>
        <form class="form-horizontal form-pricing" role="form">
            <div class="price-slider3">
                <h4 class="great">Уполномоченным бухгалтериям</h4>
                <span>Стоимость лицензии</span>
            </div>

            <div>
                <h4>Количество транзакций в квартал</h4>
            </div>

            <div class="price-form">
                <div class="form-group">
                    <div class="header-calculate">
                        <input type="hidden" class="form-control duration" value="5000">
                        <p class="price lead text-bold" id="duration-label">5000</p>
                        <span class="price">₽/в год</span>
                    </div>
                </div>
            </div>

            <ul class="efsol_goldUL mb-40">
                <li>Отправка отчетности в ФНС, ПФР, ФСС, Росстат, ФСРАР, РПН и ФТС</li>
                <li>Письма в ФНС, ПФР и Росстат</li>
                <li>Сверки с ФНС</li>
                <li>Сверка НДС с контрагентами</li>
                <li>Отправка реестров больничных листов в ФСС</li>
                <li>Онлайн-проверка отчетности</li>
                <li>Мониторинг доставки отчетности</li>
                <li>СМС, email уведомления о статусах отчетности и требованиях госорганов</li>
                <li>Отправка ответов на требования госорганов</li>
                <li>Выписки ЕГРЮЛ/ЕГРИП (юридически значимые)</li>
                <li>Отправка уведомлений о контролируемых сделках в ФНС</li>
            </ul>
        </form>
    </div>

</div>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script src="/web/js/polzunok/polzunok.tuch.js"></script>
<script src="/web/js/reporting.js"></script>
