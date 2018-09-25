<?php
namespace frontend\models\events;

use yii\base\Event;
use frontend\models\User;
/**
 * Description of UserRegisterEvent
 *
 * @author webmaster
 */
class UserRegistredEvent extends Event {
    public $user;
    public $subject;
    
    public function getSubject() {
        return $this->subject;
    }
    
    public function getEmail() {
        return $this->user->email;
    }
}
