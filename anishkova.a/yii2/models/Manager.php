<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "manager".
 *
 * @property int $idmanager
 * @property string|null $fio
 * @property string|null $telef
 * @property string|null $email
 * @property int|null $goodswork
 */
class Manager extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'manager';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['goodswork'], 'integer'],
            [['fio', 'telef', 'email'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idmanager' => 'Idmanager',
            'fio' => 'Fio',
            'telef' => 'Telef',
            'email' => 'Email',
            'goodswork' => 'Goodswork',
        ];
    }
}
