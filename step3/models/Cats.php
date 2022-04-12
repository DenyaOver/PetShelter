<?php

namespace app\models;

use yii\db\ActiveRecord;

class Cats extends ActiveRecord
{
    public function getUser(){
        return $this->hasOne(Users::class, ['id'=>'user_id']);
    }

}