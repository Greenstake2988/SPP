<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Programashasindicadores;

/**
 * ProgramashasindicadoresSearch represents the model behind the search form about `app\models\Programashasindicadores`.
 */
class ProgramashasindicadoresSearch extends Programashasindicadores
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['programas_idprogramas', 'indicadores_idindicadores'], 'integer'],
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
        $query = Programashasindicadores::find();

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
            'programas_idprogramas' => $this->programas_idprogramas,
            'indicadores_idindicadores' => $this->indicadores_idindicadores,
        ]);

        return $dataProvider;
    }
}
