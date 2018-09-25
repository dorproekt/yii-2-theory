<?php

namespace common\components;

use Yii;
use yii\base\Component;
use common\components\UserNotificationInterface;

/**
 * Description of EmailService
 *
 * @author webmaster
 */
class EmailService extends Component{
    
    public function notifyUser($event){
        
        return Yii::$app->mailer->compose()
                ->setFrom('web@web-lab.com.ua')
                ->setTo($event->getEmail())
                ->setSubject($event->getSubject())
                ->send();
        
    }
    
    public function notifyAdmins($event){
        
        return Yii::$app->mailer->compose()
                ->setFrom('brovarycit@gmail.com')
                ->setTo('webmaster@brw-kiev.com.ua')
                ->setSubject($event->getSubject())
                ->send();
        
    }
}
