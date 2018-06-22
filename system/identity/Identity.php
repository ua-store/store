<?php
namespace identity;

use yii\db\ActiveRecord;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\web\IdentityInterface;

/**
 * Identity class implements IdentityInterface
 *
 * @author ReSoul <roberts.mark1985@gmail.com>
 * @ver 1.0
 * @since 0.1
 */
class Identity extends ActiveRecord implements IdentityInterface
{
    const STATUS_ACTIVE = 10;
    const STATUS_BANNED = 20;
    const STATUS_NOT_ACTIVE = 0;

    const ADMIN_ROLE = 15;
    const MANAGER_ROLE = 30;

    static function tableName()
    {
        return '{{%users%}}';
    }

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::class
            ]
        ];
    }

    static function getUsername($user_id)
    {
        $user = self::findOne(['id' => $user_id]);

        return $user->username;
    }

    static function findIdentity($id)
    {
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['auth_key' => $token, 'status' => self::STATUS_ACTIVE]);
    }

    public function getId()
    {
        return $this->getPrimaryKey();
    }

    public function getAuthKey()
    {
        return $this->auth_key;
    }

    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    public function generateConfirmationToken()
    {
        $this->confirmation_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }
}