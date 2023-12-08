<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vidi".
 *
 * @property int $idvidi
 * @property string|null $name
 * @property string|null $desc
 * @property string|null $detail
 */
class Vidi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vidi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['desc', 'detail'], 'string'],
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idvidi' => 'Idvidi',
            'name' => 'Имя',
            'desc' => 'Desc',
            'detail' => 'Detail',
        ];
    }
}
