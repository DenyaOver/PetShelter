<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "dogs".
 *
 * @property int $id
 * @property string $name
 * @property int|null $age
 * @property string|null $breed
 * @property string $sex
 * @property string $description
 * @property string|null $photo
 * @property string $pet
 * @property int $user_id
 */
class Dogs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dogs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'sex', 'description', 'user_id'], 'required'],
            [['age', 'user_id'], 'integer'],
            [['description', 'photo'], 'string'],
            [['name'], 'string', 'max' => 10],
            [['breed'], 'string', 'max' => 20],
            [['sex'], 'string', 'max' => 6],
            [['pet'], 'string', 'max' => 3],
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
            'age' => 'Age',
            'breed' => 'Breed',
            'sex' => 'Sex',
            'description' => 'Description',
            'photo' => 'Photo',
            'pet' => 'Pet',
            'user_id' => 'User ID',
        ];
    }
}
