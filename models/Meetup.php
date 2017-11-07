<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "meetup".
 *
 * @property integer $id
 * @property string $name
 * @property string $city
 * @property string $address
 */
class Meetup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'meetup';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'city', 'address'], 'required'],
            [['name', 'city'], 'string', 'max' => 80],
            [['address'], 'string', 'max' => 120],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'city' => 'City',
            'address' => 'Address',
        ];
    }
}
