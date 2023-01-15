<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "language".
 *
 * @property int $id
 * @property string $nomi_uz
 * @property string $nomi_ru
 * @property string $nomi_en
 */
class Language extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'language';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomi_uz', 'nomi_ru', 'nomi_en'], 'required'],
            [['nomi_uz', 'nomi_ru', 'nomi_en'], 'string', 'max' => 80],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nomi_uz' => 'Nomi Uz',
            'nomi_ru' => 'Nomi Ru',
            'nomi_en' => 'Nomi En',
        ];
    }
}
