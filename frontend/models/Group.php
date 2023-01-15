<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "guruh".
 *
 * @property int $id
 * @property int|null $nomi
 */
class Group extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'guruh';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomi'], 'default', 'value' => null],
            [['nomi'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nomi' => 'Nomi',
        ];
    }
}
