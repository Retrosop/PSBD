<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "statement".
 *
 * @property int $idstatement
 * @property string|null $dates
 * @property int|null $idclent
 * @property string|null $namework
 * @property string|null $daterin
 * @property string|null $daterout
 * @property string|null $desc
 * @property float|null $summa
 * @property int|null $srokkredita
 * @property int|null $pervonzvon
 * @property string|null $countteam
 * @property int|null $idmanager
 * @property string|null $resoluciy
 * @property string|null $statuswork
 * @property string|null $dateof
 */
class Statement extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'statement';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dates', 'daterin', 'daterout', 'dateof'], 'safe'],
            [['idclent', 'srokkredita', 'pervonzvon', 'idmanager'], 'integer'],
            [['desc', 'countteam', 'resoluciy'], 'string'],
            [['summa'], 'number'],
            [['namework', 'statuswork'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idstatement' => 'Idstatement',
            'dates' => 'Dates',
            'idclent' => 'Idclent',
            'namework' => 'Namework',
            'daterin' => 'Daterin',
            'daterout' => 'Daterout',
            'desc' => 'Desc',
            'summa' => 'Summa',
            'srokkredita' => 'Srokkredita',
            'pervonzvon' => 'Pervonzvon',
            'countteam' => 'Countteam',
            'idmanager' => 'Idmanager',
            'resoluciy' => 'Resoluciy',
            'statuswork' => 'Statuswork',
            'dateof' => 'Dateof',
        ];
    }
}
