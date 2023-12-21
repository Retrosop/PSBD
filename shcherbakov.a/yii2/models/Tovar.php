<?php

namespace app\models;



/**
 * This is the model class for table "tovar".
 *
 * @property int $id_works
 * @property string|null $id_sotrudnik
 * @property string|null $id_specialty
 * @property string|null $id_podpis
 * @property string|null $datez
 * @property string|null $food
 */
class tovar extends \yii\db\ActiveRecord
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
            [['id_sotrudnik', 'id_specialty', 'id_podpis', 'datez', 'food'], 'string', 'max' => 256],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_works' => 'Id Works',
            'id_sotrudnik' => 'Id Sotrudnik',
            'id_specialty' => 'Id Specialty',
            'id_podpis' => 'Id Podpis',
            'datez' => 'Datez',
            'food' => 'Food',
        ];
    }
}
