<?php

namespace app\models;

use yii\base\Model;
use yii\db\ActiveRecord;

class AddUrgentCaseForm extends ActiveRecord
{
    public static function tableName()
    {
        return 'urgent_case';
    }

    public function rules()
    {
        return [
            [['title', 'text', 'type'], 'required' ],
            [['title', 'text'],'trim']
        ];
    }
}