<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "works".
 *
 * @property int $id_works
 * @property int|null $id_student
 * @property string|null $id_sotrudnik
 * @property string|null $id_specialty
 * @property string|null $id_podpis
 * @property string|null $datez
 * @property string|null $name
 * @property string|null $status
 * @property string|null $typew
 * @property string|null $ozenka
 * @property string|null $mycheckwork
 * @property string|null $docmycheckwork
 * @property string|null $intercheckwork
 * @property string|null $docintercheckwork
 * @property string|null $publicwork
 * @property string|null $filework
 * @property string|null $statuswork
 */
class Works extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'works';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_student'], 'integer'],
            [['id_sotrudnik', 'id_specialty', 'id_podpis', 'datez', 'name', 'status', 'typew', 'ozenka', 'mycheckwork', 'docmycheckwork', 'intercheckwork', 'docintercheckwork', 'publicwork', 'filework', 'statuswork'], 'string', 'max' => 256],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_works' => 'Id Works',
            'id_student' => 'Id Student',
            'id_sotrudnik' => 'Id Sotrudnik',
            'id_specialty' => 'Id Specialty',
            'id_podpis' => 'Id Podpis',
            'datez' => 'Datez',
            'name' => 'Name',
            'status' => 'Status',
            'typew' => 'Typew',
            'ozenka' => 'Ozenka',
            'mycheckwork' => 'Mycheckwork',
            'docmycheckwork' => 'Docmycheckwork',
            'intercheckwork' => 'Intercheckwork',
            'docintercheckwork' => 'Docintercheckwork',
            'publicwork' => 'Publicwork',
            'filework' => 'Filework',
            'statuswork' => 'Statuswork',
        ];
    }
}
