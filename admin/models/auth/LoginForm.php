<?php
namespace admin\models\auth;

use identity\Users;
use yii\base\Model;
use Yii;

/**
 * Auth LoginForm
 *
 * @author ReSoul <roberts.mark1985@gmail.com>
 * @ver 0.59
 * @since 1.0
 */
class LoginForm extends Model
{
    public $email;
    public $password;
    public $rememberMe = false;

    private $_user = false;

    public function login()
    {
        $duration = $this->rememberMe ? 3600 * 24 * 30 : 0;

        if($this->validate()){
            return Yii::$app->user->login($this->getUser(), $duration);
        }

        return false;
    }

    public function getUser()
    {
        if(false === $this->_user){
            $this->_user = Users::findByEmail($this->email);
        }

        return $this->_user;
    }

    public function rules()
    {
        return [
            [['email', 'password'], 'required'],
            ['rememberMe', 'boolean'],
            ['password', 'validatePassword'],
        ];
    }

    public function validatePassword($attribute, $params)
    {
        if(!$this->hasErrors()){
            $user = $this->getUser();

            if(!$user->validatePassword($this->password)){
                $this->addError('password', 'Wrong password');
            }
            else if($user->status == Users::STATUS_NOT_ACTIVE){
                $this->addError('email', 'Your account not active');
            }
            else if($user->status == Users::STATUS_BANNED){
                $this->addError('email', 'Your account baned');
            }
        }
    }

    public function attributeLabels()
    {
        return [
            'email' => 'Email',
            'password' => 'Password',
            'rememberMe' => 'Remember Me'
        ];
    }
}