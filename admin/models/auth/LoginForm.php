<?php
namespace admin\models\auth;

use yii\base\Model;

/**
 * Auth LoginForm
 *
 * @author ReSoul <roberts.mark1985@gmail.com>
 * @ver 0.29
 * @since 0.1
 */
class LoginForm extends Model
{
    public $email;
    public $password;
    public $rememberMe = false;

    private $_user;

    public function attributeLabels()
    {}
}