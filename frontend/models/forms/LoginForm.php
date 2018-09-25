<?php

namespace frontend\models\forms;

use Yii;
use yii\base\Model;
use frontend\models\User;
/**
 * Description of SignupForm
 *
 * @author webmaster
 */
class LoginForm extends Model{
    public $username;
    public $password;
    
    public function rules() {
        return [
            [['username'], 'trim'],
            [['username'], 'required'],
            [['password'], 'required'],
            [['password'], 'validatePassword'],
        ];
    }
    
    public function login(){
        if($this->validate()){
            $user = User::find()->where(['username' => $this->username])->one();
            return Yii::$app->user->login($user);
        }
        
        return false;
    }
    
    public function validatePassword($attributes, $params) {
        $user = User::find()->where(['username' => $this->username])->one();
        
        if(!$user || !$user->validatePassword($this->password)){
            $this->addError($attributes, 'Не правильный пароль');
        }
    }
}
