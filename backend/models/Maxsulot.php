<?php

namespace backend\models;

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
            [['foto'], 'file'],
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
