<?php

namespace app\controllers;

use app\models\Telegram;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\widgets\ActiveForm;
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        $this->view->registerJsFile('/js/site.js');
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            $post = Yii::$app->request->post('ContactForm');
            $telegram = new Telegram();
            $telegram->send($post);
            Yii::$app->session->setFlash('contactFormSubmitted');
            return $this->refresh();
        }
        return $this->render('index', [
            'model' => $model,
        ]);
    }

    public function actionLogin()
    {
        if ( !Yii::$app->user->isGuest )
        {
            return $this->redirect('/ticket/admin/index');
        }
        $model = new \webvimark\modules\UserManagement\models\forms\LoginForm();
        if ( Yii::$app->request->isAjax AND $model->load(Yii::$app->request->post()) )
        {
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ActiveForm::validate($model);
        }
        if ( $model->load(Yii::$app->request->post()) AND $model->login() )
        {
            return $this->redirect('/ticket/admin/index');
        }
        return $this->render('login', [
            'model' => $model,
        ]);

    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionService1c()
    {
        return $this->render('service1c');
    }

    public function actionOutsourcing()
    {
        $this->view->registerCssFile('/css/outsourcing.css');
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            $post = Yii::$app->request->post('ContactForm');
            $telegram = new Telegram();
            $telegram->send($post);
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('outsourcing', [
            'model' => $model,
        ]);
    }
    public function actionDevice()
    {
        return $this->render('device');
    }
    public function actionReporting()
    {
        $this->view->registerCssFile('/css/reporting.css');

        return $this->render('reporting');
    }
}
