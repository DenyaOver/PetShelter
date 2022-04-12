<?php

namespace app\models;

use yii\base\Model;
use yii\db\ActiveRecord;

class RegistrationForm extends ActiveRecord
{
    public static function tableName()
    {
        return 'users';
    }

    public function rules()
    {
        return [
            [['name', 'email', 'phone', 'region', 'password'], 'required' ],
            ['email', 'email'],
            [['name', 'email', 'phone', 'region', 'password'],'trim'],
            ['phone', 'integer']
        ];
    }
}