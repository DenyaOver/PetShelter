<?php

namespace app\models;

use yii\base\Model;
use yii\db\ActiveRecord;

class AddNewsForm extends ActiveRecord
{
    public static function tableName()
    {
        return 'news';
    }

    public function rules()
    {
        return [
            [['title', 'text', 'type'], 'required' ],
            [['title', 'text'],'trim']
        ];
    }
}