<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tovar".
 *
 * @property int $id
 * @property string $nomi
 * @property string $narxi
 * @property string $malumoti
 * @property string $category_id
 * @property string $vaqti
 */
class Tovar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tovar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomi', 'narxi', 'malumoti', 'category_id'], 'required'],
            [['vaqti'], 'safe'],
            [['nomi', 'narxi'], 'string', 'max' => 80],
            [['malumoti'], 'string', 'max' => 200],
            [['category_id'], 'string', 'max' => 50],
        ];
    }
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id'=>'category_id']);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nomi' => 'Nomi',
            'narxi' => 'Narxi',
            'malumoti' => 'Malumoti',
            'category_id' => 'Kategoriyasi',
            'vaqti' => 'Vaqti',
        ];
    }
}
