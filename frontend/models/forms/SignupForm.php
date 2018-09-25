<?php

namespace frontend\models\forms;

use Yii;
use yii\base\Model;
use frontend\models\User;
use frontend\models\events\UserRegistredEvent;
/**
 * Description of SignupForm
 *
 * @author webmaster
 */
class SignupForm extends Model{
    public $username;
    public $email;
    public $password;
    
    public function rules() {
        return [
            [['username'], 'trim'],
            [['username'], 'required'],
            [['username'], 'string', 'min' => 2, 'max' => 255],
            [['username'], 'unique', 'targetClass' => User::className()],
            
            [['email'], 'trim'],
            [['email'], 'required'],
            [['email'], 'unique', 'targetClass' => User::className()],
            [['email'], 'email'],
            [['email'], 'string', 'max' => 255],
            
            [['password'], 'required'],
            [['password'], 'string', 'min' => 6]
        ];
    }
    
    public function save() {
        
        if($this->validate()){
            $user = new User();
            
            $user->username = $this->username;
            $user->email = $this->email;
            $user->created_at = $time = time();
            $user->updated_at = $time;
            $user->auth_key = Yii::$app->security->generateRandomString();
            $user->password_hash = Yii::$app->security->generatePasswordHash($this->password);
            
            if($user->save()){
                /*Yii::$app->emailService->notifyAdmins('Registred new user');
                Yii::$app->emailService->notifyUser($user, 'Welcome to Yii 2');*/
                $event = new UserRegistredEvent();
                $event->user = $user;
                $event->subject = 'New user registred!';
                
                $user->trigger(User::USER_REGISTRED, $event);
                
                return $user;
            }
        }
        
        return false;
    }
}
