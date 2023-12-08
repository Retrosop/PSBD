<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\statement;

/**
 * statementSearch represents the model behind the search form of `app\models\statement`.
 */
class statementSearch extends statement
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idstatement', 'idclent', 'srokkredita', 'pervonzvon', 'idmanager'], 'integer'],
            [['dates', 'namework', 'daterin', 'daterout', 'desc', 'countteam', 'resoluciy', 'statuswork', 'dateof'], 'safe'],
            [['summa'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = statement::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'idstatement' => $this->idstatement,
            'dates' => $this->dates,
            'idclent' => $this->idclent,
            'daterin' => $this->daterin,
            'daterout' => $this->daterout,
            'summa' => $this->summa,
            'srokkredita' => $this->srokkredita,
            'pervonzvon' => $this->pervonzvon,
            'idmanager' => $this->idmanager,
            'dateof' => $this->dateof,
        ]);

        $query->andFilterWhere(['like', 'namework', $this->namework])
            ->andFilterWhere(['like', 'desc', $this->desc])
            ->andFilterWhere(['like', 'countteam', $this->countteam])
            ->andFilterWhere(['like', 'resoluciy', $this->resoluciy])
            ->andFilterWhere(['like', 'statuswork', $this->statuswork]);

        return $dataProvider;
    }
}
