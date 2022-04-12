<?php

namespace app\models;

use yii\base\Model;
use yii\db\ActiveRecord;

class VolunteerForm extends ActiveRecord
{
    public static function tableName()
    {
        return 'volunteers';
    }

    public function rules()
    {
        return [
            [['name', 'email', 'amount'], 'required' ],
            ['email', 'email'],
            [['name', 'email'],'trim']
        ];
    }
}