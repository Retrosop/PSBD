<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "publikacii".
 *
 * @property string|null $name
 * @property int|null $year
 * @property string|null $vihod
 */
class Publikacii extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'publikacii';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['year'], 'integer'],
            [['name', 'vihod'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'year' => 'Year',
            'vihod' => 'Vihod',
        ];
    }
}
