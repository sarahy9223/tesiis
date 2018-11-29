<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Protocolo;

/**
 * ProtocoloSearch represents the model behind the search form of `app\models\Protocolo`.
 */
class ProtocoloSearch extends Protocolo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idPro'], 'integer'],
            [['nomPro', 'caracP', 'fechacread'], 'safe'],
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
        $query = Protocolo::find();

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
            'idPro' => $this->idPro,
            'fechacread' => $this->fechacread,
        ]);

        $query->andFilterWhere(['like', 'nomPro', $this->nomPro])
            ->andFilterWhere(['like', 'caracP', $this->caracP]);

        return $dataProvider;
    }
}
