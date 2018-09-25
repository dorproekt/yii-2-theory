<?php

namespace console\controllers;

use Yii;
use console\models\News;
use console\models\Subscriber;
use console\models\Sender;
/**
 * Description of MailerController
 *
 * @author webmaster
 */
class MailerController extends \yii\console\Controller {
    public function actionSend() {
        $newsList = News::getList();
        $subscribers = Subscriber::getList();
        
        $result = Sender::run($subscribers, $newsList);

        /*$result = Yii::$app->mailer->compose()
            ->setFrom('brovarycit@gmail.com')
            ->setTo('dorproekt@ukr.net')
            ->setSubject('Test')
            ->setTextBody('Текст сообщения')
            ->setHtmlBody('<h1>Текст сообщения!</h1>')
            ->send();
        
        var_dump($result);
        die;*/
    }
    
}
