<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "client".
 *
 * @property int $idclient
 * @property string|null $urlreferal
 * @property string|null $fio
 * @property string|null $telef
 * @property string|null $email
 * @property string|null $sferawork
 * @property string|null $comment
 * @property string|null $firma
 */
class Client extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'client';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['urlreferal'], 'string', 'max' => 50],
            [['fio', 'telef', 'email', 'sferawork', 'comment', 'firma'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idclient' => 'Idclient',
            'urlreferal' => 'Urlreferal',
            'fio' => 'Fio',
            'telef' => 'Telef',
            'email' => 'Email',
            'sferawork' => 'Sferawork',
            'comment' => 'Comment',
            'firma' => 'Firma',
        ];
    }
}
