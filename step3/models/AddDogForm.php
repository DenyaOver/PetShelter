<?php

namespace app\models;

use yii\base\Model;
use yii\db\ActiveRecord;

class AddDogForm extends ActiveRecord
{
    public static function tableName()
    {
        return 'dogs';
    }

    public function rules()
    {
        return [
            [['name', 'sex', 'description', 'pet'], 'required' ],
            [['name', 'age', 'breed', 'description'],'trim'],
            ['age', 'integer']
        ];
    }
}