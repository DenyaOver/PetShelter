<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "volunteers".
 *
 * @property int $id
 * @property string $name
 * @property int $amount
 * @property string $date
 * @property string $email
 */
class Volunteers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'volunteers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'amount', 'date', 'email'], 'required'],
            [['amount'], 'integer'],
            [['date'], 'safe'],
            [['name'], 'string', 'max' => 40],
            [['email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'amount' => 'Amount',
            'date' => 'Date',
            'email' => 'Email',
        ];
    }
}
