<?php

namespace app\controllers;

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
            $token = Yii::$app->params['telegram']['token'];
            $chat_id = Yii::$app->params['telegram']['chat_id'];
            $arr = array(
                "Имя: " => $post['name'],
                "Электронный адрес: " => $post['email'],
                "Телефон: " => $post['phone'],
                "Сообщение: " => $post['body']
            );
            $txt = '';
            foreach($arr as $key => $value) {
                $txt .= "<b>".$key."</b> ".$value."%0A";
            };
            $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
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
        return $this->render('outsourcing');
    }
    public function actionColor1()
    {
        return $this->render('color1');
    }
    public function actionReporting()
    {
        return $this->render('reporting');
    }
    public function actionColor3()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            return $this->refresh();
        }
        return $this->render('index', [
            'model' => $model,
        ]);
    }
}
