<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\client;

/**
 * clientSearch represents the model behind the search form of `app\models\client`.
 */
class clientSearch extends client
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idclient'], 'integer'],
            [['urlreferal', 'fio', 'telef', 'email', 'sferawork', 'comment', 'firma'], 'safe'],
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
        $query = client::find();

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
            'idclient' => $this->idclient,
        ]);

        $query->andFilterWhere(['like', 'urlreferal', $this->urlreferal])
            ->andFilterWhere(['like', 'fio', $this->fio])
            ->andFilterWhere(['like', 'telef', $this->telef])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'sferawork', $this->sferawork])
            ->andFilterWhere(['like', 'comment', $this->comment])
            ->andFilterWhere(['like', 'firma', $this->firma]);

        return $dataProvider;
    }
}
