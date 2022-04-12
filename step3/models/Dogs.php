<?php

namespace app\models;

use yii\db\ActiveRecord;

class Dogs extends ActiveRecord
{

    public function getUser(){
        return $this->hasOne(Users::class, ['id'=>'user_id']);
    }

}