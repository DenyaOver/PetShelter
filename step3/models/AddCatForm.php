<?php

namespace app\models;

use yii\base\Model;
use yii\db\ActiveRecord;

class AddCatForm extends ActiveRecord
{
    public static function tableName()
    {
        return 'cats';
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