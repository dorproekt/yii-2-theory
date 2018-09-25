<?php

namespace console\models;
use Yii;
/**
 * Description of Sender
 *
 * @author webmaster
 */
class Sender {
    public static function run($subscribers, $newsList){
        foreach($subscribers as $subscriber){
            $result = Yii::$app->mailer->compose('/mailer/newsList',[
                'newsList' => $newsList
            ])
                ->setFrom('brovarycit@gmail.com')
                ->setTo($subscriber['email'])
                ->setSubject('Test')
                ->send();
            var_dump($result);
        }
    }
}
