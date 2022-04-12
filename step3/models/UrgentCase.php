<?php

namespace app\models;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

class UrgentCase extends ActiveRecord
{
    public static function tableName()
    {
        return 'urgent_case';
    }

    public function getUser(){
        return $this->hasOne(Users::class, ['id'=>'user_id']);
    }

        public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'createdAtAttribute' => 'date',
                'value' => new Expression('NOW()'),
            ],
        ];
    }
}