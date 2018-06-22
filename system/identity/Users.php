<?php
namespace identity;

class Users extends Identity
{
    static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }

    static function findByEmail($email)
    {
        return static::findOne(['email' => $email]);
    }
}