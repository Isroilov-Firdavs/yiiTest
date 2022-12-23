<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "maxsulot".
 *
 * @property int $id
 * @property string $foto
 */
class Maxsulot extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'maxsulot';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['foto'], 'required'],
            [['foto'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'foto' => 'Foto',
        ];
    }
}
