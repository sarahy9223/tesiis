<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Fundador;

/**
 * FundadorSearch represents the model behind the search form of `app\models\Fundador`.
 */
class FundadorSearch extends Fundador
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idFund'], 'integer'],
            [['nombFun', 'appatFun', 'apmatFun', 'sexoFun', 'nacionalidad'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Fundador::find();

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
            'idFund' => $this->idFund,
        ]);

        $query->andFilterWhere(['like', 'nombFun', $this->nombFun])
            ->andFilterWhere(['like', 'appatFun', $this->appatFun])
            ->andFilterWhere(['like', 'apmatFun', $this->apmatFun])
            ->andFilterWhere(['like', 'sexoFun', $this->sexoFun])
            ->andFilterWhere(['like', 'nacionalidad', $this->nacionalidad]);

        return $dataProvider;
    }
}
