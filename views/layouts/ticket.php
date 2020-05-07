<?php
use webvimark\modules\UserManagement\components\GhostMenu;
use webvimark\modules\UserManagement\UserManagementModule;

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
<?php
NavBar::begin([
    'brandLabel' => Html::img('@web/images/logo_v20.png', ['alt'=>Yii::$app->name, 'class'=>'brand-img']),
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar-inverse navbar-ticket',
    ],
]);
echo '<div class="contact_info_phone"><a href="tel:+7 (499) 550 34 74" class="contact_href">+7 (499) 550 34 74</a><br><a href="mailto:info@itp-lab.ru" class="contact_href">info@itp-lab.ru</a></div>';
echo Nav::widget([
    'options' => ['class' => 'navbar-nav navbar-right'],
    'items' => [
        ['label' => 'Выход', 'url' => ['/user-management/auth/logout']],
    ],
]);
NavBar::end();

?>


<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            Общее
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Написать
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            История обращений
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="users"></span>
                            Отчёт
                        </a>
                    </li>
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Админ</span>
                    <a class="d-flex align-items-center text-muted" href="#">
                        <span data-feather="plus-circle"></span>
                    </a>
                </h6>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Добавить пользователя
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Смена пароля
                        </a>
                    </li>
                    <li class="nav-item">
                        <?= Html::a('Восстановление пароля', '/user-management/auth/password-recovery'); ?>
                    </li>
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <?= $content ?>
        </main>
    </div>
</div>

<?php
//echo GhostMenu::widget([
//    'encodeLabels'=>false,
//    'activateParents'=>true,
//    'items' => [
//        [
//            'label' => 'Backend routes',
//            'items'=>UserManagementModule::menuItems()
//        ],
//        [
//            'label' => 'Frontend routes',
//            'items'=>[
//                ['label'=>'Вход', 'url'=>['/user-management/auth/login']],
//                ['label'=>'Выход', 'url'=>['/user-management/auth/logout']],
//                ['label'=>'Регистрация', 'url'=>['/user-management/auth/registration']],
//                ['label'=>'Смена пароля', 'url'=>['/user-management/auth/change-own-password']],
//                ['label'=>'Восстановление пароля', 'url'=>['/user-management/auth/password-recovery']],
//                ['label'=>'Подтверждение e-mail', 'url'=>['/user-management/auth/confirm-email']],
//            ],
//        ],
//    ],
//]);

?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>