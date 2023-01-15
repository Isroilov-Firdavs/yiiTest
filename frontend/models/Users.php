<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property int|null $car_name
 * @property string $name
 *
 * @property Car $carName
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
            [['car_name'], 'default', 'value' => null],
            [['car_name'], 'integer'],
            [['name'], 'required'],
            [['name'], 'string', 'max' => 80],
            [['car_name'], 'exist', 'skipOnError' => true, 'targetClass' => Car::class, 'targetAttribute' => ['car_name' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'car_name' => 'Car Name',
            'name' => 'Name',
        ];
    }

    /**
     * Gets query for [[CarName]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCarName()
    {
        return $this->hasOne(Car::class, ['id' => 'car_name']);
    }
}
