<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "urgent_case".
 *
 * @property int $id
 * @property string $title
 * @property int $date
 * @property string $text
 * @property string $image
 * @property string $type
 * @property int $user_id
 */
class UrgentCase extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'urgent_case';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'date', 'text', 'image', 'type', 'user_id'], 'required'],
            [['title', 'text', 'image'], 'string'],
            [['date', 'user_id'], 'integer'],
            [['type'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'date' => 'Date',
            'text' => 'Text',
            'image' => 'Image',
            'type' => 'Type',
            'user_id' => 'User ID',
        ];
    }
}
