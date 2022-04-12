<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $region
 * @property string $password
 * @property string|null $auth_key
 * @property string|null $image
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'phone', 'region', 'password'], 'required'],
            [['email', 'phone', 'region', 'password', 'image'], 'string'],
            [['name'], 'string', 'max' => 40],
            [['auth_key'], 'string', 'max' => 255],
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
            'email' => 'Email',
            'phone' => 'Phone',
            'region' => 'Region',
            'password' => 'Password',
            'auth_key' => 'Auth Key',
            'image' => 'Image',
        ];
    }
}
