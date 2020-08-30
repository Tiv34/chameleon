<?php


namespace app\models;

use Yii;

class Telegram
{
    /**
     * @var mixed
     */
    private $token;
    /**
     * @var mixed
     */
    private $chat_id;


    public function __construct()
    {
        var_dump(Yii::$app->params);
        $this->token = Yii::$app->params['telegram']['token'];
        $this->chat_id = Yii::$app->params['telegram']['chat_id'];
    }

    public function buildParams($data)
    {
        $arr = array(
            "Имя: " => $data['name'],
            "Электронный адрес: " => $data['email'],
            "Телефон: " => $data['phone'],
            "Сообщение: " => $data['body']
        );
        $txt = '';
        foreach ($arr as $key => $value) {
            $txt .= "<b>" . $key . "</b> " . $value . "%0A";
        }
        return $txt;
    }

    public function send($data = [])
    {
        $txt = $this->buildParams($data);
        fopen("https://api.telegram.org/bot{$this->token}/sendMessage?chat_id={$this->chat_id}&parse_mode=html&text={$txt}","r");
    }
}